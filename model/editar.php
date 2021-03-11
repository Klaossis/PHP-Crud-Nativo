<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar</h1>
    
<?php
    include("conexion.php");
    $base=Conectar::conexion();
    if(!isset($_POST["bot_actualizar"])){
    $id=$_GET["id"];
    $nom=$_GET["nom"];
    $ape=$_GET["ape"];
    $dir=$_GET["dir"];
    }else{
        $id=$_POST["id"];
        $nom=$_POST["nom"];
        $ape=$_POST["ape"];
        $dir=$_POST["dir"];

        $sql="UPDATE datos_usuarios2 SET Nombre=:miNom, Apellido=:miApe, Direccion=:miDir WHERE ID=:miId";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(":miId"=>$id,":miNom"=>$nom,":miApe"=>$ape,":miDir"=>$dir));

        header("Location:../index.php");

    }

?>

<br>

<p>&nbsp;</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" name="form1" method="POST">
    <table width="25%" border="0" align="center">
    <tr>
        <td></td>
        <td><label for="id"></label>
        <input type="hidden" name="id" id="id" value="<?php echo $id?>"></td>
    </tr>

    <tr>
        <td>Nombre</td>
        <td><label for="nom"></label>
        <input type="text" name="nom" id="nom" value="<?php echo $nom?>"></td>
    </tr>

    <tr>
        <td>Apellido</td>
        <td><label for="ape"></label>
        <input type="text" name="ape" id="ape" value="<?php echo $ape?>"></td>
    </tr>

    <tr>
        <td>Dirección</td>
        <td><label for="dir"></label>
        <input type="text" name="dir" id="dir" value="<?php echo $dir?>"></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
    </table>
</form>
<p>&nbsp;</p>
</body>
</html>