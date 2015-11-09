<?php 

    $nombre=$_FILES['archivo']['name'];    

    if($_REQUEST["tipo"]=="TEXTO"){
        
       $carpeta = "files/txt/"; 
        
    }

    else if($_REQUEST["tipo"]=="IMAGEN"){
        
         $carpeta = "files/img/";        
        
    }
    
    echo "$carpeta$nombre<br/>";
    copy ($_FILES['archivo']['tmp_name'], $carpeta.$nombre );

    echo "El fichero $nombre se almacen&oacute; en $carpeta";

?>
