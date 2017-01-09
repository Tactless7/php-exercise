<?php 
setcookie('username', $_POST['username'], time() + 30, null, null, false, true);
setcookie('password', $_POST['password'], time() + 30, null, null, false, true); 
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 3bis</title>
</head>
<body>
	<h1>Login</h1>
	<div>AHAH ! Tu as essayé de te logger sous le pseudo <?= isset($_COOKIE['username']) ? $_COOKIE['username'] : 'inconnu' ?> et avec le mot de passe <?= isset($_COOKIE['password']) ? $_COOKIE['password'] : 'inconnu' ?></div>
</body>
</html>