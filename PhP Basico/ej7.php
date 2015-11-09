<?php

    echo "Introduce linea de texto: ";

    fscanf(STDIN, "%s\n", $texto);

    echo"Introduce n: ";

    fscanf(STDIN, "%d\n", $num);

    for($i=0;$i<=$num;$i++){
        
        echo "<h$i>$texto</h$i>\n";
        
    }

    for($i=($num-1);$i>=1;$i--){
        
        echo "<h$i>$texto</h$i>\n";
        
    }

?>