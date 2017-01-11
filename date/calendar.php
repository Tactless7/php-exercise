<?php 
	$months = array(1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	$month = intval($_GET['month']);
	$year = intval($_GET['year']);

	// $calendarPage = date_create(); 
	// date_date_set($calendarPage, $year, $month, 1);
	// date_format($calendarPage, 'm-Y');
	// var_dump($calendarPage);

	//Retourne l'index du jour de la semaine (entre 0 et 6)
	function getFirstDayOfWeek(){
		$jd = gregoriantojd($month, 1, $year);
		return JDDayOfWeek($jd, 0);
	}

	//Retourne le nombre de jours dans le mois
	function getNumberOfDay($months, $month, $year){
		$monthToEvaluate = strtotime('1 '.$months[$month].' '.$year);
		$monthAfter = strtotime('1 '.$months[$month+1].' '.$year);
		$interval = $monthAfter - $monthToEvaluate;
		$numberOfDay = $interval / (60*60*24);
		return $numberOfDay;
	}


	function createCalendar($startingDay, $numberOfDay){
		
	}
 ?>