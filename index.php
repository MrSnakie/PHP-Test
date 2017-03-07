<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
</head>

<body>
	<container>
		<p>
			<a href="variable.php">Variable PHP</a>
		</p>

		<p>
			<?php
				include 'variable.php';

				// EXO 1
				echo $inutile.'<br />';

				// EXO 2
				echo $nom.'<br />';
				echo $prenom.'<br />';
				echo $age.'<br />';

				// EXO 3
				echo $km.'<br />';
				echo ($km = 3).'<br />';
				echo ($km = 125).'<br />';

				// EXO 4
				echo $ma_string.'<br />';
				echo $ma_boolean.'<br />';
				echo $ma_float.'<br />';

				// EXO 5
				echo $entier.'<br />';
				echo ($entier = 999).'<br />';

				// EXO 6
				echo "Bonjour, ".$nomm.", comment vas tu ? <br />";

				// EXO 7
				echo $PRENOM." ".$NOM." tu as ".$AGE." ans. <br />";

				// EXO 8
				echo $calcul1 ." ". $calcul2 ." ". $calcul3;
			?>
		</p>

		<p>
			<a href="conditions.php">Conditions PHP</a>
		</p>

		<?php
			include 'conditions.php'
		?>
	</container>
</body>
</html>