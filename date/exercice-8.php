<?php 
	$date = new DateTime('now');
	$pastDate = $date->sub(new DateInterval('P22D'));
 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 8</title>
</head>
<body>
	<h1>Date du jour - 22 jours</h1>
	<h2> <?= $pastDate->format('d-m-Y') ?> </h2>
</body>
</html>