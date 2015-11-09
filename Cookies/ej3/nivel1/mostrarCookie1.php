<?php

    echo "<table border=\"1\"><th>Nombre</th><th>Contenido</th>";

    foreach($_COOKIE as $k => $v){
        
        echo "<tr><td>$k</td><td>$v</td></tr>";
        
    }

    echo "</table>";

?>