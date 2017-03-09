<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="../style/css/style.css">
</head>

<body>
	<container>
		<h2>Exercice 4</h2>
		<?php
			if(isset($_COOKIE['login'], $_COOKIE['password'])){
				echo "<p><strong>Login</strong>: " .$_COOKIE['login']. "</p>";
				echo "<p><strong>Mot de passe</strong>: " .$_COOKIE['password']. "</p>";
			}else{
				echo "<p>Un ou plusieurs cookies n'existent pas.</p>";
			}
		?>
		<p><a href='../super_global.php'>Retour</a></p>
	</container>
</body>
</html>