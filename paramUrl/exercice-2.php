<?php 
	if(isset($_GET['age'])){
		echo '<div>Age : ' .$_GET['age']. '</div>';
	} else {
		echo 'Le paramètre age n\'est pas défini.';
	}