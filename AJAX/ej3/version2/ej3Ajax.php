<?php

    $palabras=["es"=>["Palabra","Traducción","Enviar"],"en"=>["Word","Translation","Send"],"fr"=>["Mot","Traduction","Envoyer"]];

    $return="";

    if(isset($_REQUEST["lang"])){  
        
        for($i=0;$i<3;$i++){
            
           $return.="{$palabras[$_REQUEST["lang"]][$i]}&"; 
            
        }
        
        echo "$return";
    }
       
    else{
        
        echo "CACA DE VACA";
    }
    

?>