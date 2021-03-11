<?php

    class Personas_model{

        private $db;
        private $personas;

        public function Personas_model(){

            require_once("model/conexion.php");
            $this->db=Conectar::conexion();
            $this->personas=array();
        } 

        public function get_personas(){
            require("paginacion.php");
            $consulta=$this->db->query("SELECT * FROM datos_usuarios2 LIMIT $empezar_desde, $tamano_pagina");
            //$consulta=$this->db->query("SELECT * FROM datos_usuarios2");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->personas[]=$filas;
            }

            return $this->personas;

        }

        public function insert_personas(){            
            $nombre=$_POST["Nom"];
            $apellido=$_POST["Ape"];
            $direccion=$_POST["Dir"];

            $sql="INSERT INTO datos_usuarios2 (Nombre, Apellido, Direccion) VALUES (:nom, :ape, :dir)";
            $resultado=$this->db->prepare($sql);
            $resultado->execute(array(":nom"=>$nombre,":ape"=>$apellido,":dir"=>$direccion));

            header("Location:index.php");
            
        }


    }



?>