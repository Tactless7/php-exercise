<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 8</title>
</head>
<body>
	<?php 
	$form = '<form action="/exercice-8.php" method="POST" enctype="multipart/form-data">
		<label for="civilite">Civilité : <select name="civilite" id="civilite">
			<option value="Mme">Mme</option>
			<option value="Mr">Mr</option>
		</select></label>
		<label for="first_name">First Name :<input type="text" name="first_name"></label>		
		<label for="last_name">Last Name :<input type="text" name="last_name"></label>
		<label>Uploader un fichier : <input type="file" name="mon_fichier" id="mon_fichier" /></label>
		<button type="submit">Envoyer</button>
	</form>';

	if ( ( isset($_POST['first_name']) || isset($_POST['last_name']) ) && isset($_FILES['mon_fichier'])) {
		echo '<div>'.$_POST['civilite'].' '.$_POST['first_name'].' '.$_POST['last_name'].', vous avez téléchargé le fichier '.$_FILES['mon_fichier']['name'].'</div>';

		$extensionValide = 'pdf';
		$infosfichier = pathinfo($_FILES['mon_fichier']['name']);
		$extensionUpload = $infosfichier['extension'];

		if(in_array($extensionUpload, $extensionValide)){
			echo 'C\'est un fichier ' .$extensionUpload;
		} else {
			echo 'Seuls les fichiers ' .$extensionValide. ' sont acceptés.';
		}

	} else {
		echo htmlspecialchars_decode($form);
	}
	?>
	
</body>
</html>