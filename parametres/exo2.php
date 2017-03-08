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
			<?php
				if (isset($_GET['nom'], $_GET['prenom'], $_GET['age'])) {
					echo $_GET['nom'] ." ". $_GET['prenom'] ." ". $_GET['age'];
				}else{
					echo "Le paramètres 'age' n'existe pas.";
				}
			?>
		</p>
	</container>
</body>
</html>