<?php

    //Método para obetener la ruta directamente
    $rutaV1=pathinfo($_SERVER["REQUEST_URI"])["dirname"];


    //Método para obetener la ruta mediante explode() implode()
    $rutaV2=$_SERVER['REQUEST_URI'];

    $rutaV2=explode("/",$rutaV2);

    array_pop($rutaV2);

    $rutaV2=implode("/",$rutaV2);

    if($_GET["nivel"]=="0"){
        
        $rutaV1=$rutaV1."/";
        
    }

    elseif($_GET["nivel"]=="1"){
        
        $rutaV1=$rutaV1."/nivel1";
        
    }

    elseif($_GET["nivel"]=="2"){
        
        $rutaV1=$rutaV1."/nivel1/nivel2";
        
    }
    
    setcookie($_GET["nombre"],$_GET["contenido"],0,$rutaV1);
    
    echo "<h1>Cookie creada!</h1>";



?>