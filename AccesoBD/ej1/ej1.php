<?php

require_once "conectSQL.php";

$arrayProductos=["p1"=>["cocacola","2.5"],"p2"=>["pepsi","2"],"p3"=>["bocadillo","3"],"p4"=>["fanta","2.2"],"p5"=>["sandwich","2.3"]];
    
$baseDatos=conectarMySQL();

$insert=<<<SQL
    insert into productos(nombre,precio)
    value(:nombre,:precio)
SQL;

$preInsert=$baseDatos->prepare($insert);

foreach($arrayProductos as $k=>$v){

    $preInsert->bindParam(":nombre",$v[0]);
    $preInsert->bindParam(":precio",$v[1]);
    $preInsert->execute();
}  

?>