<?php

	for ($i=0; $i < 10; $i++) { 
		if ($i === 5) {
			continue;
		}
		echo $i;

	}

	for ($i=0; $i < 10; $i++) { 
		if ($i === 5) {
			break;
		}
		echo $i;
		
	}

?>