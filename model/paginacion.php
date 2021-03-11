<?php
require_once("conexion.php");

$base=Conectar::conexion();
    $tamano_pagina = 2;

if(isset($_GET["pagina"])){
    if($_GET["pagina"]==1){
        header("Location:index.php");
    }else{
        $pagina=$_GET["pagina"];
    }
}else{
    $pagina = 1;
}

$empezar_desde=($pagina-1)*$tamano_pagina;

$sql=("SELECT * FROM DATOS_USUARIOS2");
$sqlResultado = $base->prepare($sql);
$sqlResultado->execute(array());

$num_filas = $sqlResultado->rowCount();
$total_paginas=ceil($num_filas/$tamano_pagina);

?>