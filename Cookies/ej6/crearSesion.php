<?php
    include("punto.php");

    session_unset();

    echo "Sesión antigua borrada</br>";

    session_start();

    $_SESSION["entero"]=5;
    $_SESSION["real"]=3.1418;
    $_SESSION["texto"]="Hola soy un texto";
    $_SESSION["fecha"]=date_create("1992-12-10");
    $_SESSION["semaforo"]=["r"=>"rojo",
                           "a"=>"amarillo",
                           "v"=>"verde"
                         ];
    $_SESSION["punto"]=new Punto();

    echo "Sesión nueva creada";

?>