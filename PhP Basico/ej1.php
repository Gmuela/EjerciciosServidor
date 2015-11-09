<?php
	$max=0;
	$min=0;
	$numero=1;
	
	while($numero!=0){
		
		echo "Introduce n:";
		
		fscanf(STDIN, "%d\n", $numero);
		
		if($max<$numero){
			
			$max=$numero;
		}
		if($min>$numero){
			
			$min=$numero;		
		}
}
	echo "Maximo: $max \n";
	echo "Minimo: $min";


?>