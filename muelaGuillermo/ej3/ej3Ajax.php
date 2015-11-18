<?php
    
   require_once "../ej1/ej1.php";

    if($_REQUEST["metodo"]==1){
        
      echo conjugar($_REQUEST["verbo"]);  
        
    }

    else{
        
        $verbo=$_REQUEST["verbo"];

        if(substr($verbo,-2,2)=="ar"){

                $conjugacion="1ª conjugación";

        }

        if(substr($verbo,-2,2)=="er"){

            $conjugacion="2ª conjugación";

        }

        if(substr($verbo,-2,2)=="ir"){

            $conjugacion="3ª conjugación";

        }
        
        echo $conjugacion;
    }
    
    
?>