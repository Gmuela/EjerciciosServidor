<?php

require_once "../conectSQL.php";

$baseDatos=conectarMySQL();

if(isset($_REQUEST["recuperar"])){
    
    $consulta="SELECT * FROM empleados WHERE numemp={$_REQUEST["numemp"]}";
    
    $resultado=$baseDatos->query($consulta);

    if(!$resultado){

        echo false;        
    }
    
    else{
        $solucionQuery='';
        foreach ($resultado as $f) {
            
            $solucionQuery=("{$f['numemp']}#{$f['nombre']}#{$f['apellido']}");
        }
        
        echo $solucionQuery;
    }
}


else{
    $update=<<<SQL
    DELETE FROM empleados WHERE numemp=:numemp
SQL;

    $resultado=$baseDatos->prepare($update);
    
    $numemp=$_REQUEST["numemp"];


    $resultado->bindParam(":numemp",$numemp);
    
    $control=$resultado->execute();

    if ($control) {

       header("Location:../mensaje.php?origen=borrar");

    }

    else{

        //header("Location:../mensaje.php?origen=error");
        var_dump($_REQUEST);

    }
}


?>