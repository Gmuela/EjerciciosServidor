<?php

require_once "../conectSQL.php";

$baseDatos=conectarMySQL();
    
$consulta="SELECT * FROM empleados WHERE numemp={$_REQUEST["numemp"]}";

$resultado=$baseDatos->query($consulta);


?>