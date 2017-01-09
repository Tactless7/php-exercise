<?php 
	if($_GET['nom'] && $_GET['prenom']){
		echo '<div>Nom : ' .$_GET['nom']. '</div>';
		echo '<div>Prénom : ' .$_GET['prenom']. '</div>';
	}