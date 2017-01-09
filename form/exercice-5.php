<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 5</title>
</head>
<body>
	<form action="/exercice-5.php" method="POST">
		<label for="civilite">Civilité : <select name="civilite" id="civilite">
			<option value="X">Mme</option>
			<option value="Y">Mr</option>
		</select></label>
		<label for="first_name">First Name :<input type="text" name="first_name"></label>		
		<label for="last_name">Last Name :<input type="text" name="last_name"></label>
		<button type="submit">Envoyer</button>
	</form>
	
</body>
</html>