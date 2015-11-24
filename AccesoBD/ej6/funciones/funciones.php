<?php

require_once "../conectSQL.php";

$baseDatos=conectarMySQL();

/*****Borrar*****/

if($_REQUEST["funcion"]=="borrar"){
    
    $update=<<<SQL
        DELETE FROM empleados WHERE numemp=:numemp
SQL;

    $resultado=$baseDatos->prepare($update);

    $numemp=$_REQUEST["numemp"];

    $resultado->bindParam(":numemp",$numemp);

    $control=$resultado->execute();

    if ($control) {

       echo 1;

    }

    else{

        echo 0;

    }    
    
}


/*****Consultar******/

if($_REQUEST["funcion"]=="consultar"){

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

/*********Crear************/

if($_REQUEST["funcion"]=="crear"){

    $insert=<<<SQL
        insert into empleados(numemp,nombre,apellido,telefono,sexo)
        value(:numemp,:nombre,:apellido,:telefono,:sexo)
SQL;

    $resultado=$baseDatos->prepare($insert);

    $numemp=$_REQUEST["numemp"];
    $nombre=$_REQUEST["nombre"];
    $apellido=$_REQUEST["apellido"];
    $telefono=$_REQUEST["telefono"];
    $sexo=$_REQUEST["sexo"];

    $resultado->bindParam(":numemp",$numemp);
    $resultado->bindParam(":nombre",$nombre);
    $resultado->bindParam(":apellido",$apellido);
    $resultado->bindParam("telefono",$telefono);
    $resultado->bindParam(":sexo",$sexo);

    $control=$resultado->execute();

    if($control){

       echo 1;

    }

    else{

        echo 0;

    }
}


/*********Modificar***********/


if($_REQUEST["funcion"]=="actualizar"){
    
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