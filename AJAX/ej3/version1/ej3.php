<?php

    $palabras=["es"=>["Palabra","Traducción","Enviar"],"en"=>["Word","Translation","Send"],"fr"=>["Mot","Traduction","Envoyer"]];
    
    if(isset($_REQUEST["lang"])){
        
        echo "<style>img{width=10%;height: 10%;}</style>";
        
        echo "<form method=\"post\" action=\"ej3.php\" id=\"formulario\">";
        
        foreach($palabras as $k=>$v){
            
            if($_REQUEST["lang"]==$k){
                
                echo "<img src=\"../img/$k.png\"><input type=\"radio\" name=\"lang\" value=\"$k\" onchange=\"submit()\" checked=\"checked\"/>";
                
            }
            
            else{
                echo "<img src=\"../img/$k.png\"><input type=\"radio\" name=\"lang\" value=\"$k\" onchange=\"submit()\"/>";
            }
        }
        
        echo "</form>";
        
        echo "</br>";
        echo "{$palabras[$_REQUEST["lang"]][0]}<input type=\"text\"/></br>";
        echo "{$palabras[$_REQUEST["lang"]][1]}<input type=\"text\"/></br>";
        echo "<input type=\"button\" value=\"{$palabras[$_REQUEST["lang"]][2]}\">";
        
        
    }
       
    else{
        
        echo "CACA DE VACA";
    }
    

?>