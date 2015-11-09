<?php

    $bool=isset($_COOKIE["cont"]);
    
    if($bool){
        
        setcookie("cont",($_COOKIE["cont"]+1));
        
        echo "Hola de nuevo. Es la ".$_COOKIE["cont"]." vez que entras";
        
    }

    else{
        
        setcookie("cont","2");
        
        echo "BIENVENIDO";        
    }     
?>