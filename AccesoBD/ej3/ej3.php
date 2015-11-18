<?php
require_once "conectSQL.php";

$baseDatos=conectarMySQL();

$insert=<<<SQL
    insert into productos(nombre,precio)
    value(:nombre,:precio)
SQL;

$productos=$_REQUEST["productos"];

$arrayProd=explode("#",$productos);

$preInsert=$baseDatos->prepare($insert);

foreach($arrayProd as $k=>$v){
        
    $preInsert->bindParam(":nombre",$v);  
        
    $preInsert->bindParam(":precio",$v);         
}

echo "<h1>Producto insertado</h1><br/>";
    
echo "<input type=\"button\" onClick=\"location.href='formulario.php'\" value='Volver'>"

?>