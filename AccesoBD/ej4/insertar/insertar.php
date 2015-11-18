<?php

require_once "conectSQL.php";

$baseDatos=conectarMySQL();

$insert=<<<SQL
        insert into empleados(numemp,nombre,apellido,telefono,sexo)
        value(:numemp,:nombre,:apellido,:telefono,:sexo)
SQL;

$resultado=$db->prepare($insert);
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


?>