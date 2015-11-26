<?php

require_once("modelo.php");

$consulta=consultaBD();

$consulta2=consultaBDTodos();

require_once("vista.php");

?>