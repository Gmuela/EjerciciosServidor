<?php

    $n=100;

    while(!($n>=1 && $n<=10)){
        
        echo "Introduce N: ";

        fscanf(STDIN, "%d\n", $n);

    }

    $formato="";
        
    while(!($formato=='nombre') && !($formato=='romano') && !($formato=='english')){
    
        echo "Introduce formato: ";

        fscanf(STDIN, "%s\n", $formato);
        
    }
    
    $numeros = [
        'romano' => [0,'I','II','III','IV','V','VI','VII','VIII','IX','X'] ,
        'nombre' => [0,'uno','dos','tres','cuatro','cinco','seis','siete','ocho','nueve','diez'],
        'english' => [0,'one','two','three','four','five','six','seven','eigth','nine','ten']
    ];
        
    for($i=1;$i<=$n;$i++){
        
        echo "{$numeros[$formato][$i]}\n";
        
    }
?>