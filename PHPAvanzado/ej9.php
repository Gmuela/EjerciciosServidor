<?php

    require_once "utilHTML.php";
?>

<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
</head>
<body>
	
    <?php
    
        echo resaltar("Texto para resaltar"); 


        echo eligeH("Texto en h2","2");

        for($i=0;$i<10;$i++){
            
            echo ponerParrafos("Texto en parrafos");
            
            
        }
        
        echo "Escribe texto";
        echo crearInputText("texto","text","");

        echo "<br/><br/>Elige uno<br/>";

        echo "Rojo";
        echo crearInputRadioCheck("radio","color","rojo");

        
        echo "Verde";
        echo crearInputRadioCheck("radio","color","verde");

       
        echo "Amarillo";
        echo crearInputRadioCheck("radio","color","amarillo");   

        
        echo "<br/><br/>Elige uno o varios<br/>";

        echo "Perro";
        echo crearInputRadioCheck("checkbox","animal[]","perro"); 

        echo "Gato";
        echo crearInputRadioCheck("checkbox","animal[]","gato"); 


        echo "Pajaro";
        echo crearInputRadioCheck("checkbox","animal[]","pajaro"); 

    ?>
    
    
    
    
</body>
</html>