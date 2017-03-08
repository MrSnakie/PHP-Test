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
			<h1>Formulaire n°1</h1>
			<form action="include/user.php" method="GET">
				Prénom: <input type="text" name="nom1">
				Nom: <input type="text" name="prenom1">
				<input type="submit" value="Envoyer">
			</form>
		</p>

		<hr>

		<p>
			<h1>Formulaire n°2</h1>
			<form action="include/user.php" method="POST">
				Prénom: <input type="text" name="nom2">
				Nom: <input type="text" name="prenom2">
				<input type="submit" value="Envoyer">
			</form>
		</p>

		<hr>

		<p>
			<h1>Formulaire n°3</h1>
			<form action="formulaire.php" method="GET">
				Civilité: <select name="civilite">
					<option value="mr">Mr</option>
					<option value="mme">Mme</option>
				</select>
				Nom: <input type="text" name="nom">
				Prénom: <input type="text" name="prenom">
				<input type="submit" value="Envoyer">
			</form>
		</p>
	</container>
</body>
</html>