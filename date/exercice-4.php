<?php 
	$date = "Tuesday 2 August 2016 15 hours";
	$date = strtotime($date);
 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 4</title>
</head>
<body>
	<ul>
		<li>Timestamp du jour : <?= time() ?> </li>
		<li>Timestamp du Mardi 2 Août à 15h : <?= $date ?> </li>
	</ul>
	
</body>
</html>