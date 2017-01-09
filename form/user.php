<?php 
	
	if(isset($_GET['first_name']) && isset($_GET['last_name'])){
		$first_name = $_GET['first_name'];
		$last_name = $_GET['last_name'];
	}

	if(isset($_POST['first_name']) && isset($_POST['last_name'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
	}

	echo '<div>Bonjour ' .$first_name. ' ' .$last_name. '</div>';


