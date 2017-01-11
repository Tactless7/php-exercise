<?php
	require 'vendor/autoload.php';
	use Carbon\Carbon;
	
	$months = array(1 => 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
	$month = $_GET['month'];
	$year = $_GET['year'];


	$now = Carbon::now();
	

	
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