<?php

	$i = 0;	

/*	do {
		if ($i % 2 == 0 ) {
			echo "numero $i é par : $i <br>";
			echo "<hr>";
		}if ($i % 2 != 0 ) {
			echo "numero $i é impar : $i <br>";
			echo "<hr>";
		
		}if ($i % 5 == 0 ) {
			echo "numero $i é multiplo de 5 : $i <br>";
			echo "<hr>";
		}
		$i++;
	} while ($i <= 100);
*/
	echo "<hr>";

	for ($i=0; $i < 100; $i++) { 
		
		if ($i == 3) {
			continue;
			}		


		if ($i % 2 === 0 ) {
			echo "numero $i é par : $i <br>";
			echo "<hr>";
		}if ($i % 2 !== 0 ) {
			echo "numero $i é impar : $i <br>";
			echo "<hr>";
		
		}if ($i % 5 === 0 ) {
			echo "numero $i é multiplo de 5 : $i <br>";
			echo "<hr>";
		}
 	echo "<hr>";

		$i++;
	}/*

	while ($i <100) {
		if ($i % 2 == 0 ) {
			echo "numero $i é par : $i <br>";
			echo "<hr>";
		}if ($i % 2 != 0 ) {
			echo "numero $i é impar : $i <br>";
			echo "<hr>";
		
		}if ($i % 5 == 0 ) {
			echo "numero $i é multiplo de 5 : $i <br>";
			echo "<hr>";
		}
 	echo "<hr>";

		$i++;

	}*/



?>