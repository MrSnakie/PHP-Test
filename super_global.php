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
			
			echo "<p><a href='include/super_global2.php'>Afficher sessions PHP</a></p>";
		?>

		<hr>

		<h2>Exercice 3</h2>
		<form action="super_global.php" method="POST">
				<p>Login: <input type="text" name="login" required></p>
				<p>Mot de passe: <input type="password" name="mdp" required></p>
				<p><input type="submit" value="Envoyer"></p>
		</form>
		<?php
			if(isset($_POST['login'], $_POST['mdp'])){
				setcookie('login', $_POST['login'], time()+360);
				setcookie('password', $_POST['mdp'], time()+360);
			}
		?>

		<hr>

		<h2>Exerice 4</h2>
		<p><a href='include/super_global3.php'>Afficher cookies PHP</a></p>
	</container>
</body>
</html>