<?php 
	if(isset($_GET['dateDebut']) && isset($_GET['dateFin'])){
		echo '<div>Date de début : ' .$_GET['dateDebut']. '</div>';
		echo '<div>Date de fin : ' .$_GET['dateFin']. '</div>';
	}