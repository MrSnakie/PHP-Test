<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
</head>

<body>
	<container>
		<!--=====================================
		=               EXERCICE 1              =
		======================================-->
		
		<h2>Exercice 1</h2>
		<?php
			echo "<p>Nous sommes le " .date('d/m/Y'). ".</p>";
		?>
		
		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 2              =
		======================================-->

		<h2>Exercice 2</h2>
		<?php
			echo "<p>Nous sommes le " .date('d-m-Y'). ".</p>";
		?>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 3              =
		======================================-->

		<h2>Exercice 3</h2>
		<?php
			echo "<p>Nous sommes le " .strftime('%A %d %B %Y'). ".</p>";
		?>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 4              =
		======================================-->

		<h2>Exercice 4</h2>
		<?php
			echo "<p>Timestamp du jour: " .time(). ".</p>";
			echo "<p>Timestamp du mardi 2 mars 2016 à 15h34 et 12s: " .mktime(15, 34, 12, 03, 2, 2016). ".</p>";
		?>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 5              =
		======================================-->

		<h2>Exercice 5</h2>
		<?php
			$aujourdhui = new DateTime(date('d-m-Y'));
			$jour_cible = new DateTime('2016-05-16');
			$interval = date_diff($aujourdhui, $jour_cible);
			echo "<p>Il y a  " .$interval->format('%a'). " jours entre le 16 mai 2016 et aujourd'hui.</p>";
		?>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 6              =
		======================================-->

		<h2>Exercice 6</h2>
		<?php
			echo "<p>Il y a  " .cal_days_in_month(CAL_GREGORIAN, 2, 2016). " jours dans le mois de février 2016.</p>";
		?>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 7              =
		======================================-->

		<h2>Exercice 7</h2>
		<?php
			echo "<p>" .date('d m Y', strtotime("+20 day")). "</p>";
		?>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 8              =
		======================================-->

		<h2>Exercice 8</h2>
		<?php
			echo "<p>" .date('d m Y', strtotime("-20 day")). "</p>";
		?>

		<!--==================================-->

		<hr>

		<!--=====================================
		=                  T.P.                 =
		======================================-->

		<h2>T.P.</h2>
		<?php
			if (isset($_GET['mois'], $_GET['annee'])) {
				$mois = (int) $_GET['mois'];
				$annee = (int) $_GET['annee'];
			}else{
				$mois = (int) date('m');
				$annee = (int) date('Y');
			}

			$calendrier = new DateTime($annee .'-'. $mois .'-1');
			$nombre_de_jours = cal_days_in_month(CAL_GREGORIAN, 6, 2007);
			$numtour = 0;

			switch ($calendrier->format('l')) {
				case 'Monday':
					$index = 0;
					break;

				case 'Tuesday':
					$index = 1;
					break;

				case 'Wednesday':
					$index = 2;
					break;

				case 'Thursday':
					$index = 3;
					break;

				case 'Friday':
					$index = 4;
					break;

				case 'Saturday':
					$index = 5;
					break;

				case 'Sunday':
					$index = 6;
					break;
			}

			$numero_du_mois = [];

			for ($i=0; $i < $index; $i++) { // Boucle numéro du mois
				array_push($numero_du_mois, ' ');
			}

			for ($numero_jour=1; $numero_jour <= $nombre_de_jours; $numero_jour++) { // Boucle numéro du jour
				array_push($numero_du_mois, $numero_jour);
			}

			for ($i=0; $i < 6-$index+7; $i++) { 
				array_push($numero_du_mois, ' ');
			}
		?>

		<center>
			<form method="GET" action="">
				<select name="mois">
					<option value="1">Janvier</option>
					<option value="2">Février</option>
					<option value="3">Mars</option>
					<option value="4">Avril</option>
					<option value="5">Mai</option>
					<option value="6">Juin</option>
					<option value="7">Juillet</option>
					<option value="8">Août</option>
					<option value="9">Septembre</option>
					<option value="10">Octobre</option>
					<option value="11">Novembre</option>
					<option value="11">Décembre</option>
				</select>

				<select name="annee">
					<?php
						for ($i=1930; $i <=  2017; $i++) { 
							echo '<option value="'.$i.'">'.$i.'</option>';
						}
					?>
				</select>

				<button type="submit">Afficher</button>
			</form>

			</br>

			<table>
				<tbody>
					<tr>
						<td colspan="7">« <?= $calendrier->format('F Y') ?> »</td>
					</tr>

					<tr>
						<td>Lu</td>
						<td>Ma</td>
						<td>Me</td>
						<td>Je</td>
						<td>Ve</td>
						<td>Sa</td>
						<td>Di</td>
					</tr>

					<?php
						for ($semaine=0; $semaine <= 5 ; $semaine++) {
							echo '<tr>';

							for ($jour=0; $jour <= 6 ; $jour++) {
								echo '<td class="numjour">' .$numero_du_mois[$numtour]. '</td>';
								$numtour++;
							}

							echo '</tr>';
						}
					?>
				</tbody>
			</table>
		</center>

		<!--==================================-->

		<hr>

		<p><a href='index.php'>Retour</a></p>
	</container>
</body>
</html>