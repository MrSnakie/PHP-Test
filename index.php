<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="style/css/style.min.css">
</head>

<body>
	<container>
		<p><a href="variable.php">Variable PHP</a></p>
		<?php
			include 'variable.php';
			echo $nom;
			echo '<br />';
			echo $prenom;
			echo '<br />';
			echo $age;
			echo '<br />';
			echo $km;
			echo '<br />';
			echo $km = 3;
			echo '<br />';
			echo $km = 125;
			echo '<br />';
		?>
	</container>
</body>
</html>