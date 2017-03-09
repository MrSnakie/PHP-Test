<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
</head>

<body>
	<container>
		<h2>Exercice 1</h2>
		<?php
			echo "<p>Nous sommes le " .date('d/m/Y'). ".</p>";
		?>

		<hr>

		<h2>Exercice 2</h2>
		<?php
			echo "<p>Nous sommes le " .date('d-m-Y'). ".</p>";
		?>

		<hr>

		<h2>Exercice 3</h2>
		<?php
			echo "<p>Nous sommes le " .strftime('%A %d %B %Y'). ".</p>";
		?>

		<hr>

		<h2>Exercice 4</h2>
		<?php
			echo "<p>Timestamp du jour: " .time(). ".</p>";
			echo "<p>Timestamp du mardi 2 mars 2016 à 15h34 et 12s: " .mktime(15, 34, 12, 03, 2, 2016). ".</p>";
		?>

		<hr>

		<h2>Exercice 5</h2>
		<?php
			$aujourdhui = new DateTime(date('d-m-Y'));
			$jour_cible = new DateTime('2016-05-16');
			$interval = date_diff($aujourdhui, $jour_cible);
			echo "<p>Il y a  " .$interval->format('%a'). " jours entre le 16 mai 2016 et aujourd'hui.</p>";
		?>

		<hr>
		<p><a href='index.php'>Retour</a></p>
	</container>
</body>
</html>