<?php

	function validaNumero($num){
		if ($num % 2 === 0 ) {
			return "numero é par : $num <br>";
			echo "<hr>";
		}else {
			return "numero é impar : $num <br>";
			echo "<hr>";
		}

}
	


	function ehMaior($a,$b){
		
		if($a === $b){
		echo "Numeros são iguais :";
		return $a;
		echo "<hr>";
		}else if ($a > $b) {
			echo "variavel A é maior : ";
			return $a;
			echo "<hr>";
		}else {
			echo "variavel B é menor : ";
			return $b;
			echo "<hr>";
		}
	}

	function maiorDeIdade($pessoas){

		foreach ($pessoas as $pessoa){
			return (($pessoa['idade'] >= 18) && $pessoa['temHbilitacao']) ? '
			Pode Dirigir' : 'Não pode dirigir';
			}


	}


	echo validaNumero(5);
	echo "<hr>";
	echo ehMaior(11,10);
	echo "<hr>";
	echo maiorDeIdade([$pessoas]);
	


	$pessoas = [

			'0' => [
				'nome' => 'Igor',
				'idade' =>  34,
			],

			'1' => [
				'nome' => 'Katia',
				'idade' =>  36,
				
			],


			'2' => [
				'nome' => 'Mariana' ,
				'idade' =>  31,
				
			],

			'3' => [
				'nome' => 'Viviane' ,
				'idade' =>  15,
				
			],

			'4' => [
				'nome' => 'Joefina' ,
				'idade' =>  12,
				
			],

			'5' => [
				'nome' => 'Julia' ,
				'idade' =>  18,
				
			],
	];









?>