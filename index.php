<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
</head>

<body>
	<container>
		<p><a href="variable.php">Variable PHP</a></p>
		<?php
			include 'variable.php';

			echo $nom.'<br />';
			echo $prenom.'<br />';
			echo $age.'<br />';

			echo $km.'<br />';
			echo ($km = 3).'<br />';
			echo ($km = 125).'<br />';

			echo $ma_string.'<br />';
			echo $ma_boolean.'<br />';
			echo $ma_float.'<br />';
		?>
	</container>
</body>
</html>