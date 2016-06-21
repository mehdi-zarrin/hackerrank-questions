<?php 

	$primeNumbers = [];
	for($i = 1; $i <= 100; $i++ ) {
		$counter = 0; 
		for($j = 1; $j <= 100; $j++) {
			if($i % $j == 0) {
				$counter++;
			}
		}
		if($counter == 2) {
			$primeNumbers[] = $i;
		}
		echo 'i is : ' . $i . ' and counter is : ' . $counter . PHP_EOL ;
	}


	print_r($primeNumbers); die ; 




	// 7 / 1 
	// 7 / 2
	// 7 / 3 
	// 7 / 4 
	// 7 / 5
	// 7 / 6 
	// 7 / 7 
	// 7 / 8 
	// 7 / 9 
	// ------ 


	// print_r($primeNumbers); die; 