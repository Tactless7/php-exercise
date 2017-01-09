<?php session_start() ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 2 (bis)</title>
</head>
<body>
	
	<h1>Bonjour <?= $_SESSION['prenom']?> <?= $_SESSION['nom']?></h1>
	<h2>Tu as <?= $_SESSION['age']?> ans.</h2>
	
</body>
</html>