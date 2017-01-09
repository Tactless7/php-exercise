<?php 
	if(isset($_GET['langage']) && isset($_GET['serveur'])){
		echo '<div>Langage : ' .$_GET['langage']. '</div>';
		echo '<div>Serveur : ' .$_GET['serveur']. '</div>';
	}