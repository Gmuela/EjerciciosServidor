<?php

require_once "../conectSQL.php";

$baseDatos=conectarMySQL();
    
$consulta="SELECT * FROM empleados WHERE numemp=:numemp";

$preparado=$baseDatos->prepare($consulta);

$preparado->bindParam(":numemp",$_REQUEST["numemp"]);
$preparado->execute();

$consulta=$preparado->fetchAll();

if($consulta!=[]){
    
    echo 1;
}

else{
    
    echo 0;
    
}

?>