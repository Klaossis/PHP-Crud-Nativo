<?php
    include("conexion.php");
    $base=Conectar::conexion();

    $ID=$_GET["id"];
    $base->query("DELETE FROM datos_usuarios2 WHERE ID='$ID'");
    header("Location:../index.php");


?>