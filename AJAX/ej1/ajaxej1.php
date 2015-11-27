<?php

    if(isset($_REQUEST["nombre"])){
        
        $nombre=$_REQUEST["nombre"];  
        
    }

    else{
        
        $nombre="Error";
        
    }
    
    $arraySaludos=array("¡¡Qué pasa $nombre!!","Hola $nombre", "¿Qué tal estás $nombre?");

    $aleatorio=rand(0,2);

    $hRand=$aleatorio+1;

    echo "<h$hRand>$arraySaludos[$aleatorio]</h$hRand>";



?>
