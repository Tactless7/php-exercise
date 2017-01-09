<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 6</title>
</head>
<body>
	<?php 
	$form = '<form action="/exercice-6.php" method="POST">
		<label for="civilite">Civilité : <select name="civilite" id="civilite">
			<option value="Mme">Mme</option>
			<option value="Mr">Mr</option>
		</select></label>
		<label for="first_name">First Name :<input type="text" name="first_name"></label>		
		<label for="last_name">Last Name :<input type="text" name="last_name"></label>
		<button type="submit">Envoyer</button>
	</form>';

	if (isset($_POST['first_name']) || isset($_POST['last_name'])) {
		echo $_POST['civilite'].' '.$_POST['first_name'].' '.$_POST['last_name'];

	} else {
		echo htmlspecialchars_decode($form);
	}
	?>
	
</body>
</html>