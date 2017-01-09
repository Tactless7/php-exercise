<?php 
	if(isset($_GET['batiment']) && isset($_GET['salle'])){
		echo '<div>Bâtiment : ' .$_GET['batiment']. '</div>';
		echo '<div>Salle : ' .$_GET['salle']. '</div>';
	}