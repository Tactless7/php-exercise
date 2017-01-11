<?php 
	$months = array(1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	$month = intval($_GET['month']);
	$year = intval($_GET['year']);

	$firstDayOfWeek = getFirstDayOfWeek($months, $month, $year);
	$numberOfDays = getNumberOfDays($months, $month, $year);
	// var_dump($firstDayOfWeek);
	// createCalendar($firstDayOfWeek, $numberOfDays);

	//Retourne l'index du jour de la semaine (entre 0 et 6)
	function getFirstDayOfWeek($months, $month, $year){
		$firstDayTimestamp = strtotime('1 '.$months[$month].' '.$year);
		$firstDayIndex = date('w', $firstDayTimestamp);
		var_dump($firstDayIndex);
		return $firstDayIndex;
	}

	//Retourne le nombre de jours dans le mois
	function getNumberOfDays($months, $month, $year){
		$monthToEvaluate = strtotime('1 '.$months[$month].' '.$year);
		$monthAfter = strtotime('1 '.$months[$month+1].' '.$year);
		$interval = $monthAfter - $monthToEvaluate;
		return $interval / (60*60*24);
		// var_dump($numberOfDays);
		// return $numberOfDays;
	}


	function createCalendar($startingDay, $numberOfDays){
		$countDayOfWeek = 0; //Variable qui sert à savoir quand faire un nouveau row
		$date = 1; //Date à inscrire dans les cases

		for ($i=0; $i < ($startingDay + $numberOfDays); $i++) { 
			if ($countDayOfWeek === 0) {
				echo '<tr>';
			}
			if ($countDayOfWeek === 7){
				echo '</tr>';
				$countDayOfWeek = 0;
			}
			if ($i < $startingDay){
				echo '<td></td>';
				$countDayOfWeek++;
			} else {
				echo'<td>'. $date .'</td>';
				$date++;
				$countDayOfWeek++;
			}
			
			
		}
	}
 ?>