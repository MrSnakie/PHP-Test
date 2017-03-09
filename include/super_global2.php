<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="../style/css/style.css">
</head>

<body>
	<container>
		<h2>Exercice 2</h2>
		<?php
			session_start();

			echo "<p>" .$_SESSION['nom']. "</p>";
			echo "<p>" .$_SESSION['prenom']. "</p>";
			echo "<p>" .$_SESSION['age']. "</p>";

			session_destroy();
		?>
		<p><a href='../super_global.php'>Retour</a></p>
	</container>
</body>
</html>