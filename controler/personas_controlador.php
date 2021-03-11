<?php

require_once("model/personas_modelo.php");


$persona=new Personas_model();
$matriz_personas = $persona->get_personas();


require_once("view/personas_view.php");


?>