<?php
	
	
	echo "Introduce un numero:";

    $as='as';
    $dos='dos';
    $tres='tres';
    $cuatro='cuatro';
    $cinco='cinco';
    $seis='seis';
    $siete='siete';
    $sota='sota';
    $caballo='caballo';
    $rey='rey';

    $carta='as';
		
	fscanf(STDIN, "%d\n", $numero);	    
	
	for($i=0;$i<=$numero;$i++){
			
		switch ($carta){
            
            case 'as':
                echo $carta;
                $carta=$dos;
                break;                
           
            case 'dos':
                echo $carta;
                $carta=$tres;
                break;
                
            case 'tres':
                echo $carta;
                $carta=$cuatro;
                break;
                
            case 'cuatro': 
                echo $carta;
                $carta=$cinco;
                break;
                
            case 'cinco':
                echo $carta;
                $carta=$seis;
                break;
                
            case 'seis':
                echo $carta;
                $carta=$siete;
                break;
                
            case 'siete':
                echo $carta;
                $carta=$sota;
                break;
                
            case 'sota':
                echo $carta;
                $carta=$caballo;
                break;
                
            case 'caballo':
                echo $carta;
                $carta=$rey;
                break;
                
            case 'rey':
                echo $carta;
                $carta=$as;
                break;
                                
        }
        
        echo " ";
		
	}	
?>