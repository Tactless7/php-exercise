<?php 
	include 'exercice-5.php';

	foreach ($hautsDeFrance as $key => $value) {
		echo '<div>Le département ' .$value. ' a pour numéro le ' .$key. '</div>';
	}