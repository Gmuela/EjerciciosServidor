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
            
            $solucionQuery=("{$f['numemp']}#{$f['nombre']}#{$f['apellido']}#{$f['sexo']}#{$f['telefono']}");
        }
        
        echo $solucionQuery;
    }
}


else{
$update=<<<SQL
update empleados set nombre=:nombre,apellido=:apellido,telefono=:telefono,sexo=:sexo
where numemp=:numemp
SQL;
    
    $resultado=$baseDatos->prepare($update);
    
    $nombre=$_REQUEST["nombre"];
    $apellido=$_REQUEST["apellido"];
    $telefono=$_REQUEST["telefono"];
    $sexo=$_REQUEST["sexo"];
    $numemp= $_REQUEST["numemp"];

    
    $resultado->bindParam(":nombre",$nombre);
    $resultado->bindParam(":apellido",$apellido);
    $resultado->bindParam(":telefono",$telefono);
    $resultado->bindParam(":sexo",$sexo);
    $resultado->bindParam(":numemp",$numemp);

    $control=$resultado->execute();

    if ($control) {

       echo 1;
    }

    else{

        echo 0;

    }
}

?>

