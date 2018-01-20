<?php

	// APROVADO
		// nota >= 7 e frequencia >= 8
		

	// RECUPERAÇÃO

		// nota < 5  e frequencia >= 8

 	//REPROVADO
		
		// nota < 5 OU frequencia < 8


$nota = 1;
$frequencia = 8;



switch (true) {
	case ($nota >= 7 && $frequencia >= 8):
			echo "APROVADO";
		break;
	case ($nota < 5  &&  $nota <7  && $frequencia >= 8):
			echo "RECUPERAÇÃO";
		break;
	case ($nota < 5  || $frequencia < 8):
			echo "REPROVADO";
		break;
	default:
			echo "Não sei a nota";
		break;	

}

	echo "<br>";
	echo "<br>";
	echo "<hr>";
	echo "<br>";
	echo "<br>";



if ($nota >= 7 && $frequencia >= 8) {
		echo "APROVADO";
		
	} elseif ($nota < 5  &&  $nota <7  && $frequencia >= 8) {
		echo "RECUPERAÇÃO";
		
	} elseif ($nota < 5  || $frequencia < 8) {
		echo "REPROVADO";
		
	}
	

?>