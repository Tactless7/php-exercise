<?php 
	function greetings($nom, $prenom, $age){
		return 'Bonjour '.$nom.' '.$prenom.', tu as '.$age.' ans.';
	}

	echo greetings('Blier', 'Juliane', 25);