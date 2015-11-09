<?php

    require_once "utilHTML.php";

    pintarSelectSimp("colores",["rojo"=>"Rojo","verde"=>"Verde","azul"=>"Azul"]);   

    echo "<br/><br/>";

    pintarSelectMult("colores",["rojo"=>"Rojo","verde"=>"Verde","azul"=>"Azul"],["verde"]);


?>