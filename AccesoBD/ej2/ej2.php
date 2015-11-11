<?php
require_once "conectSQL.php";

$baseDatos=conectarMySQL();

$insert=<<<SQL
    insert into productos(nombre,precio)
    value(:nombre,:precio)
SQL;

$preInsert=$baseDatos->prepare($insert);

$preInsert->bindParam(":nombre",$_REQUEST["nombre"]);
$preInsert->bindParam(":precio",$_REQUEST["precio"]);
$preInsert->execute();  

echo "<h1>Producto insertado</h1><br/>";
    
echo "<input type=\"button\" onClick=\"location.href='formulario.php'\" value='Volver'>"

?>