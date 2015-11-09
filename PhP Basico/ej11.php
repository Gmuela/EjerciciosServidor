<?php

    $cadena = 'Guillermo:Muela:610//Maria:Calvo:611';
    
    $array=explode("//",$cadena);   
    
    foreach($array as $valor){
        
        $datos=explode(":",$valor);
    
        echo "Nombre: $datos[0]\n";
        echo "Apellido: $datos[1]\n";
        echo "Telefono: $datos[2]\n";
        echo "==========================\n";
        
    }

   

?>