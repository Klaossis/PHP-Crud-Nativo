<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    td{
        border: 1px dotted #FF0000;
    }
</style>

</head>
<body>
<?php
require("model/paginacion.php");
require("model/insertar.php");

if(isset($_POST["cr"])){
    $persona->insert_personas();

    header("Location:index.php");
}

?>
<h1>CRUD <span><br><br> Create Read Update Delete</span></h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <table>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Direccion</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>

    <?php
        foreach($matriz_personas as $persona):?>

        <tr>
            <td><?php echo $persona["ID"]?></td>
            <td><?php echo $persona["Nombre"]?></td>
            <td><?php echo $persona["Apellido"]?></td>
            <td><?php echo $persona["Direccion"]?></td>

            <td><a href="model/borrar.php?id=<?php echo $persona["ID"]?>"><input type="button" name="del" id="del" value="Borrar"></a></td>
            <td><a href="model/editar.php?id=<?php echo $persona["ID"]?> & nom=<?php echo $persona["Nombre"]?> & ape=<?php echo $persona["Apellido"]?> 
            & dir=<?php echo $persona["Direccion"]?>"><input type="button" name="up" id="up" value="Actualizar"></a></td>
        </tr>

            <?php
            endforeach;

            

            ?>


        <tr>
            <td></td>
            <td><input type="text" name="Nom"></td>
            <td><input type="text" name="Ape"></td>
            <td><input type="text" name="Dir"></td>
            <td><input type="submit" name="cr" id="cr" value="Insetar"></td>
        </tr>
    </table>
</form>
</table>

<?php
for($i=1; $i <=$total_paginas;$i++){
        echo "<a href='?pagina=" . $i . "'>" . $i . "<a/>  ";
    }

?>


</body>
</html>