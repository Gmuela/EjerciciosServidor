<?php

    $nombre="";

    $edad=0;

    $cont=0;

    echo "Introduce el nombre(fin para salir): ";

    fscanf(STDIN, '%s\n', $nombre);

    while($nombre!="fin"){     

        echo "Introduce la edad: ";

        fscanf(STDIN, '%d\n', $edad);

        $array[$nombre]=$edad;
        
        echo "Introduce el nombre(fin para salir): ";

        fscanf(STDIN, '%s\n', $nombre);
        
    }

    arsort($array);

    foreach ($array as $nombre => $edad){
        
        echo "$nombre($edad)";
        
    }

?>