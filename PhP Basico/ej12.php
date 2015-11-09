<?php

    $cadena = 'Juan es tonto y su padre es todavia mas tonto';
    
    $array = explode(" ",$cadena);

    for($i=0;$i<count($array);$i++){
    
        if($array[$i]=="tonto"){
        
            $array[$i]="*****";
        
        }    
    
    }
    
    $cadena = implode(" ",$array);

    echo $cadena;
   

?>