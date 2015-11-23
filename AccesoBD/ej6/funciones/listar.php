<?php

require_once "../conectSQL.php";

$baseDatos=conectarMySQL();
    
$consulta="SELECT * FROM empleados WHERE numemp={$_REQUEST["numemp"]}";

$resultado=$baseDatos->query($consulta);

if(!$resultado){

    echo false;        
}

else{
    $solucionQuery='';
    foreach ($resultado as $f) {

        $solucionQuery=("{$f['numemp']}#{$f['nombre']}#{$f['apellido']}#{$f['sexo']}#{$f['telefono']}");
    }

    echo $solucionQuery;
}

?>