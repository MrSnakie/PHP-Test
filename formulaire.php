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
				if(isset($_POST['civilite'], $_POST['nom'], $_POST['prenom'])){
					$verif = new SplFileInfo($_POST["fichier"]);
					if( $verif->getExtension() == "pdf"){
						echo "<p>".htmlspecialchars($_POST['civilite'] ." ". $_POST['nom'] ." ". $_POST['prenom'] ." ". $_POST['fichier'])."</p>";
						echo "<p><a href='formulaire.php'>Recommencer</a></p>";
					}else{
						echo "<p>Veuillez insérer un fichier .PDF uniquement.</p>";
					}
				}else{
			?>
					<form action="formulaire.php" method="POST">
						Civilité: <select name="civilite" required>
							<option value="Monsieur">Mr</option>
							<option value="Madame">Mme</option>
						</select>
						Nom: <input type="text" name="nom" required>
						Prénom: <input type="text" name="prenom" required>
						<p>Pièce jointe: <input type="file" name="fichier" size="500" required></p>
						<p><input type="submit" value="Envoyer"></p>
					</form>
			<?php
				}
			?>
		</p>
	</container>
</body>
</html>