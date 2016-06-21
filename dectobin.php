<?php
	


	/* 


		5 / 2 = 2 -> rem = 1;
		2 / 2 = 1 -> rem = 0;
		1 / 2 = 0 -> rem = 1;


		8 / 2 = 4 -> rem = 0;
		4 / 2 = 2 -> rem = 0;
		2 / 2 = 1 -> rem = 0;
		1 / 2 = 0 -> rem = 1; 

		1000
		8421


		7 / 2 = 3 -> rem = 1;
		3 / 2 = 1 -> rem = 1;
		1 / 2 = 0 -> rem = 1;
		
		111
		421				


		12 / 2 = 6 -> rem = 0;
		6 / 2  = 3 -> rem = 0;
		3 / 2  = 1 -> rem = 1;
		1 / 2  = 0 -> rem = 1;

		1100
		8421



		15 / 2 = 7 -> rem = 1;
		7 / 2  = 3 -> rem = 1;
		3 / 2  = 1 -> rem = 1;
		1 / 2  = 0 -> rem = 1;
		
		1111
		8421


		16 / 2 = 8 -> rem = 0;
		8 / 2  = 4 -> rem = 0;
		4 / 2  = 2 -> rem = 0;
		2 / 2  = 1 -> rem = 0;
		1 / 2  = 0 -> rem = 1;


		10000
		16 8 4 2 1
	*/



	$number = 2049;
	$result = false; 
	$str = [] ;
	do {

		if(!$result) {
			$result = floor($number / 2); 
			if($number % 2 == 0) {
				$str[] = "0";
			} else {
				$str[]= "1";
			}
		}else {

			if($result % 2 == 0) {
				$str[]= "0";
			} else {
				$str[]= "1";
			}

			$result = floor($result / 2);
			
		}


	} while($result > 0);


	echo implode('', array_reverse($str));