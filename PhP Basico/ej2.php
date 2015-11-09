<?php
	
	$mas='+';
	$menos='-';
	$punto='.';
	$simbolo=$mas;
	
	echo "Introduce n:";
		
	fscanf(STDIN, "%d\n", $numero);
	
	$cont=$numero;
	
	for(;$cont>0;$cont--){
		
		$numero=$cont;
		
		while($numero!=0){

			echo $simbolo;
			
			switch($simbolo){
				
				case($mas):
				
					$simbolo=$menos;
					break;
				
				case($menos):
				
					$simbolo=$punto;
					break;
					
				case($punto):
				
					$simbolo=$mas;
                    break;
			}
			
			$numero--;
		}
		
		echo "\n";
	}
?>