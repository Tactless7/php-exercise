<?php 
	$date1 = strtotime('1 February 2016');
	$date2 = strtotime('1 March 2016');
	$interval = $date2 - $date1;
	$nbJours = $interval / (60*60*24);
 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 6</title>

	<h1>Nombre de jours dans le mois de février 2016</h1>
	<h2> <?= $nbJours ?> </h2>
</head>
<body>

	
</body>
</html>