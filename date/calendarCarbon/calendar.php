<?php
	require 'vendor/autoload.php';
	use Carbon\Carbon;
	
	$months = array(1 => 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
	$month = intval($_GET['month'], 10);
	$year = intval($_GET['year'], 10);

	$numberOfDays = getNumberOfDays($month, $year);

	function getNumberOfDays($month, $year){
		$monthToEvaluate = Carbon::createFromDate($year, $month, 1);
		$monthAfter = $monthToEvaluate->copy()->addMonth();
		return $monthToEvaluate->diffInDays($monthAfter);	
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