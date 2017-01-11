<?php include 'calendar.php' ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TP Calendrier</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<form action="tpCalendrier.php" method="GET">
		<select name="month" id="month">
			<option value="1">January</option>
			<option value="2">February</option>
			<option value="3">March</option>
			<option value="4">April</option>
			<option value="5">May</option>
			<option value="6">June</option>
			<option value="7">July</option>
			<option value="8">August</option>
			<option value="9">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
		</select>
		<select name="year" id="year">
			<option value="2016">2016</option>
			<option value="2017">2017</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
		</select>
		<button type="submit">Créer</button>
	</form>

	<div>
		<h2> <?= isset($_GET['month']) && isset($_GET['year'])? $months[$month].' '.$year : null ?> </h2>
		<table>
			<tr>
				<th>Dimanche</th>
				<th>Lundi</th>
				<th>Mardi</th>
				<th>Mercredi</th>
				<th>Jeudi</th>
				<th>Vendredi</th>
				<th>Samedi</th>
			</tr>

			<?php (isset($_GET['month']) && isset($_GET['year'])) ? createCalendar($firstDayOfWeek, $numberOfDays) : null ?>
		</table>
	</div>

</body>
</html>