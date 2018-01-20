<?php
	

	$pessoas = [

			'0' => [
				'nome' => 'Igor',
				'sobrenome'=> 'Cataldi Grillo',
				'idade' =>  34,
				'peso' => 95,

			],

			'1' => [
				'nome' => 'Katia',
				'sobrenome'=> 'treze de Maio',
				'idade' =>  36,
				'peso' => 99,

			],


			'2' => [
				'nome' => 'Mariana' ,
				'sobrenome'=> 'SóDa ',
				'idade' =>  31,
				'peso' => 65,

			],

			'3' => [
				'nome' => 'Viviane' ,
				'sobrenome'=> 'Socrates',
				'idade' =>  15,
				'peso' => 15,

			],

			'4' => [
				'nome' => 'Joefina' ,
				'sobrenome'=> 'dalRé',
				'idade' =>  12,
				'peso' => 200,

			],

			'5' => [
				'nome' => 'Julia' ,
				'sobrenome'=> 'Seila',
				'idade' =>  18,
				'peso' => 64,

			],




	];

/*	echo "<pre>";

	print_r($pessoas)."<br>";
*/
	
		foreach ($pessoas as $pessoa){
			if ($pessoa['idade'] > 199){
				echo $pessoa['nome']." ".$pessoa['sobrenome']." ".$pessoa['idade'];

				echo "<hr>";
			}
			
			
		
		}	

		foreach ($pessoas as $pessoa){
			if ($pessoa['peso'] < 65){
				echo "nome : ".$pessoa['nome']." ".$pessoa['sobrenome']."<br> idade : ".$pessoa['idade']."<br> peso : ".$pessoa['peso']." pessoas que não estão gordas "."<br>";			
				echo "<hr>";
			}elseif ($pessoa['peso'] > 65) {
				echo "nome : ".$pessoa['nome']." ".$pessoa['sobrenome']."<br> idade : ".$pessoa['idade']."<br> peso : ".$pessoa['peso']." pessoas que estão gordas"."<br>";			
			echo "<hr>";
			}
		}












?>