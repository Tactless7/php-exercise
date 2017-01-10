<?php 
	$date = new DateTime('now');
	$futureDate = $date->add(new DateInterval('P20D'));
 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 7</title>
</head>
<body>
	<h1>Date du jour + 20 jours</h1>
	<h2> <?= $futureDate->format('d-m-Y') ?> </h2>
</body>
</html>