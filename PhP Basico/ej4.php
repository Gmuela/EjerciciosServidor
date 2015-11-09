<?php

    $numero=1;

    $i=0;
	
	while($numero!=0){
        
        echo "Introduce un numero:";
    
        fscanf(STDIN, '%d\n', $numero);        
        
        if($numero!=0){
        
            $array[$i]=$numero;
            
            $i++;
            
        }       
    }

    echo "Elige la operacion a realizar(suma o multiplicacion):";

    fscanf(STDIN, '%s\n', $opera);

    if ($opera=='suma'){
        
       $resultado=current($array);        
    
        for($j=1;$j<count($array);$j++){
            
            $resultado += next($array);            
                    
        }
        
        echo $resultado;       
    
    }

    if ($opera=='multiplicacion'){       
        
        $resultado=current($array);
    
        for($j=1;$j<count($array);$j++){
            
           $resultado *= next($array);
        
        }
        
        echo $resultado;
    
    }

?>