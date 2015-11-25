<?php

function consultaBD(){
   
    $baseDatos=new PDO("mysql:host=localhost;dbname=mvc","root","");

    $consulta="SELECT * FROM mensajes";
    
    $preparada=$baseDatos->prepare($consulta);  
    
    $preparada->execute();   
    
    $resultado=$preparada->fetchAll();
    
    $baseDatos=null;
    
    return $resultado[0];
    
}

function consultaBDTodos(){
   
    $baseDatos=new PDO("mysql:host=localhost;dbname=mvc","root","");

    $consulta="SELECT * FROM mensajes";
    
    $preparada=$baseDatos->prepare($consulta);  
    
    $preparada->execute();   
    
    $resultado=$preparada->fetchAll();
    
    $baseDatos=null;
    
    return $resultado;
    
}


?>