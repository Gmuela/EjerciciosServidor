<?php

    include("punto.php");

    session_start();

    echo "{$_SESSION["entero"]}</br>";
    echo $_SESSION["real"]."</br>";
    echo $_SESSION["texto"]."</br>";
    echo $_SESSION["fecha"]->format("d-m-Y")."</br>";

    foreach($_SESSION["semaforo"] as $k=>$v){
        
        echo $_SESSION["semaforo"][$k]."/";
    }
    echo "</br>";
    echo "Punto x: ".$_SESSION["punto"]->x."</br>";
    echo "Punto y: ".$_SESSION["punto"]->y."</br>";
    
?>