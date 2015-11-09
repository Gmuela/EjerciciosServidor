<?php

    $palabras=["es"=>["Introduce un número (1-10)","Jugar","Volver","Mi número:","Tu número:"],"en"=>["Introduce a number (1-10)","Play","Back","My number:","Your number:"]];

    $solucion=["es"=>["¡Enhorabuena!","Lo siento, tu número es mayor","Lo siento, tu número es menor"],"en"=>["Congratulation!","I,m sorry, your number is higher","I,m sorry, your number is lower"]];

    $return="";

    if(isset($_REQUEST["lang"])){  
        
        for($i=0;$i<5;$i++){
            
           $return.="{$palabras[$_REQUEST["lang"]][$i]}&"; 
            
        }

        for($i=0;$i<3;$i++){   

            $return.="{$solucion[$_REQUEST["lang"]][$i]}&";

        }
        
        echo "$return";
    }
       
    else{
        
        echo "CACA DE VACA";
    }
    
?>

