<?php

    $palabrasPro=["tonto","tonta","mierda","caca","sexo"];

    $cadena = 'Paco es tonto y Lucia es tonta porque de tanto sexo se hicieron mierda vaya caca';
    
    $array = explode(" ",$cadena);

    for($i=0;$i<count($array);$i++){
        
        foreach($palabrasPro as $palabra){

            if($array[$i]==$palabra){

                $array[$i]="*****";

            }
        }
    
    }
    
    $cadena = implode(" ",$array);

    echo $cadena;
   

?>