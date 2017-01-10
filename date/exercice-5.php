<?php 
	$date1 = strtotime('now');
	$date2 = strtotime('16 May 2016');
	$interval = $date1 - $date2;
	$nbJours = $interval / (360*60*24);
 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 5</title>

	<h1>Différence entre le 16 mai 2016 et maintenant en jours</h1>
	<h2> <?= $nbJours ?> </h2>
</head>
<body>

	
</body>
</html>