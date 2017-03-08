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
				Prénom: <input type="text" name="nom1" required>
				Nom: <input type="text" name="prenom1" required>
				<input type="submit" value="Envoyer">
			</form>
		</p>

		<hr>

		<p>
			<h1>Formulaire n°2</h1>
			<form action="include/user.php" method="POST">
				Prénom: <input type="text" name="nom2" required>
				Nom: <input type="text" name="prenom2" required>
				<input type="submit" value="Envoyer">
			</form>
		</p>

		<hr>

		<p>
			<h1>Formulaire n°3</h1>
			<?php
				if(isset($_GET['civilite'], $_GET['nom'], $_GET['prenom'])){
					echo "<p>".htmlspecialchars($_GET['civilite'] ." ". $_GET['nom'] ." ". $_GET['prenom'])."</p>";
					echo "<p><a href='formulaire.php'>Recommencer</a></p>";
				}else{
			?>
					<form action="formulaire.php" method="GET">
						Civilité: <select name="civilite" required>
							<option value="Monsieur">Mr</option>
							<option value="Madame">Mme</option>
						</select>
						Nom: <input type="text" name="nom" required>
						Prénom: <input type="text" name="prenom" required>
						<input type="submit" value="Envoyer">
					</form>
			<?php
				}
			?>
		</p>
	</container>
</body>
</html>