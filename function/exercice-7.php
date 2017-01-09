<?php 
	function ageAndGender($age, $gender){
		if($gender === 'homme' || $gender === 'Homme'){
			$genderResult = 'un homme';
		} else if ($gender === 'femme' || $gender === 'Femme'){
			$genderResult = 'une femme';
		} else {
			return '<div>Alors ? Homme ou Femme ?</div>';
		}

		if($age >= 18){
			$ageResult = 'majeur';
		} else if($age < 18 && $age >=0){
			$ageResult = 'mineur';
		}
		else {
			return '<div>Vous mentez sur votre âge, c\'est mal.</div>';
		}

		return '<div>Vous êtes ' .$genderResult. ' et vous êtes ' .$ageResult.'.</div>';
	}

	echo ageAndGender(15, 'homme');
	echo ageAndGender(20, 'femme');
	echo ageAndGender(20, 'Homme');
	echo ageAndGender(10, 'Femme');
	echo ageAndGender(15, 'panda');
	echo ageAndGender(-4, 'femme');

