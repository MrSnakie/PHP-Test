<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="../style/css/style.css">
</head>

<body>
	<container>
		<h2>Exercice 5</h2>
		<?php
			if(isset($_COOKIE['login'], $_COOKIE['password'])){
		?>
				<form action="../super_global.php" method="POST">
					<p>Login: <input type="text" name="login" value="<?php echo $_COOKIE['login'] ?>" required></p>
					<p>Mot de passe: <input type="password" name="mdp" value="<?php echo $_COOKIE['password'] ?>" required></p>
					<p><input type="submit" value="Envoyer"></p>
				</form>
		<?php
			}else{
				echo "<p>Un ou plusieurs cookies n'existent pas.</p>";
			}
		?>
		<p><a href='../super_global.php'>Retour</a></p>
	</container>
</body>
</html>