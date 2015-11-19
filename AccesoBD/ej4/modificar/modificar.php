<?php

require_once "../conectSQL.php";

$baseDatos=conectarMySQL();


if(isset($_REQUEST["recuperar"])){
    
    $consulta="SELECT * FRO empleado WHERE numemp='{$_REQUEST["numemp"]}'";

    $resultado=$baseDatos->query($consulta);

    if(!$resultado){

        echo false;        
    }
    
    else{
        
        echo $resultado;   
        
    }
}


else{
    
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

       header("Location:../mensaje.php?origen=insertar");

    }

    else{

        header("Location:../mensaje.php?origen=error");

    }
}

?>





