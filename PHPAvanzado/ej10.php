<?php

    require_once "utilHTML.php";

    for($i=1;$i<=50;$i++){
        
        if($i%2==0){
            
            echo "$i <br/>".PHP_EOL;
            
        }
        
        else{
            
            echo resaltar($i).PHP_EOL;
            
        }        
    }

?>

