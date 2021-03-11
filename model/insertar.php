<?php
/*
require_once("conexion.php");

$base=Conectar::conexion();

if(isset($_POST["cr"])){
        $nombre=$_POST["Nom"];
        $apellido=$_POST["Ape"];
        $direccion=$_POST["Dir"];

        $sql="INSERT INTO datos_usuarios2 (Nombre, Apellido, Direccion) VALUES (:nom, :ape, :dir)";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(":nom"=>$nombre,":ape"=>$apellido,":dir"=>$direccion));

        header("Location:index.php");
    }
*/
?>