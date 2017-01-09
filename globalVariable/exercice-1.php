<?php $userAgent = $_SERVER['HTTP_USER_AGENT']; 
$ipAddress = $_SERVER['REMOTE_ADDR'];
$serverName = $_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 1</title>
</head>
<body>
	
	<div>Votre User Agent est <?= isset($userAgent) ? $userAgent : 'inconnu'; ?>.</div>
	<div>Votre adresse IP est : <?= $ipAddress ?>.</div>
	<div>Serveur : <?= $serverName ?>.</div>
	
</body>
</html>