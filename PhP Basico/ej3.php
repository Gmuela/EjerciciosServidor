<?php
	
	
	echo "Introduce el numero de veces:";
		
	fscanf(STDIN, "%d\n", $veces);
	
	echo "Introduce el maximo de numeros:";
	
	fscanf(STDIN, "%d\n", $numero);
	
	$cont=0;

	for($i=0;$i<$veces;$i++){
			
		for($j=0;$j!=$numero;$j++){
			
			if($cont<=$numero){
				
				echo "$cont ";
				$cont++;
				
			}
		}
		
		echo '/ ';
		
		$cont=0;
	}	
?>