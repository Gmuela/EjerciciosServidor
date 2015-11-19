<?php

    require_once "../ej1/ej1.php";

    $tablaVerbos="<table border=\"1\"><tr><th>Infinitivo</th><th>Conjugación</th><th>Presente de indicativo</th></tr>";

    $arrayVerbos=$_REQUEST["todosVerbos"];

    $arrayVerbos=explode("&",$arrayVerbos);

    array_shift($arrayVerbos);
        
    foreach($arrayVerbos as $verbo){
        
        if(substr($verbo,-2,2)=="ar"){
            
            $conjugacion="1";
            
        }
        
        if(substr($verbo,-2,2)=="er"){
            
            $conjugacion="2";
            
        }
        
        if(substr($verbo,-2,2)=="ir"){
            
            $conjugacion="3";
            
        }
        
        $conjugar=conjugar($verbo);
        
        $tablaVerbos.="<tr><td>$verbo</td><td>$conjugacion</td><td>$conjugar</td></tr>".PHP_EOL;
        
    }

    $verbo=$_REQUEST["verbo"];

    if(substr($verbo,-2,2)=="ar"){
            
            $conjugacion="1";
            
    }

    if(substr($verbo,-2,2)=="er"){

        $conjugacion="2";

    }

    if(substr($verbo,-2,2)=="ir"){

        $conjugacion="3";

    }

    $conjugar=conjugar($verbo);

    $tablaVerbos.="<tr><td>$verbo</td><td>$conjugacion</td><td>$conjugar</td></tr>".PHP_EOL;

    $tablaVerbos.="</table>";

echo $tablaVerbos;

echo "<br/><a href=\"ej2.php\">Volver a introducir verbos</a>";

?>
