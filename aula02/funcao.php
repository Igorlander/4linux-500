<?php


echo "<pre>";

function ola(){
	echo "Ola funcão!!!!!<br>";

}

function soma(){
	$soma = 2 + 3;
	return $soma;
}

function soma1($a,$b,$c){
	$soma = $a + $b + $c;
	return $soma;
}


 for ($i=0; $i < 5; $i++) { 
 	ola();

 }
 echo "<hr>";

 echo soma();
echo "<hr>";
echo soma1(1,3,4);
?>