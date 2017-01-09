<?php 
	if(isset($_GET['nom']) && isset($_GET['prenom'])){
		echo '<div>Nom : ' .$_GET['nom']. '</div>';
		echo '<div>Prénom : ' .$_GET['prenom']. '</div>';
	}