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
		<p><strong>Votre "user agent":</strong> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
		<p><strong>Votre adresse IP:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
		<p><strong>Nom du serveur:</strong> <?php echo $_SERVER['SERVER_NAME']; ?></p>

		<hr>

		<h2>Exercice 2</h2>
		<?php
			session_start();

			$_SESSION['nom'] = "L'Éponge";
			$_SESSION['prenom'] = "Bob";
			$_SESSION['age'] = "10 ans";
			
			echo "<p><a href='include/super_global2.php'>Sessions PHP</a></p>";
		?>
	</container>
</body>
</html>