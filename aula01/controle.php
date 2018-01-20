<?php

	$idade = 20;
	$temHabilitacao = false;

	if ($idade >= 18 && $temHabilitacao) {
		echo "Pode Dirigir";
	} else if($idade >= 18 && !$temHabilitacao){
		echo "Não pode Dirigir, mas pode se habilitar";
	} else{

		echo "Não pode Dirigir, nem se habilitar";
	}



?>