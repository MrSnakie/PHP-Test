<?php
	require_once 'include/config.php';

	/*=============================================
	=                Ajouter client               =
	=============================================*/

	if(isset($_POST['nom'], $_POST['prenom'], $_POST['date_naissance'], $_POST['carte'])){ // Si le formulaire a été envoyé
		if($_POST['carte'] == "0"){ // Si il n'y a pas de carte de fidélité
			$ajout_client = $pdo->prepare("
				INSERT INTO clients
				SET lastName = ?,
				firstName = ?,
				birthDate = ?,
				card = ?,
				cardNumber = ?
			");
			$ajout_client->execute([$_POST['nom'], $_POST['prenom'], $_POST['date_naissance'], $_POST['carte'], NULL]);
			echo "<h1 align='center' style='color:#FF4F4F'>Le client a été ajouté, mais sans carte de fidélité.</h1>";
		}else if($_POST['carte'] == "1"){
			$ajout_client = $pdo->prepare("
				INSERT INTO clients
				SET lastName = ?,
				firstName = ?,
				birthDate = ?,
				card = ?,
				cardNumber = ?
			");
			$ajout_client->execute([$_POST['nom'], $_POST['prenom'], $_POST['date_naissance'], $_POST['carte'], $_POST['numero_carte']]);
			echo "<h1 align='center' style='color:#FF4F4F'>Le client a été ajouté.</h1>";
		}
	}

	/*=============================================
	=    Ajouter client avec carte de fidélité    =
	=============================================*/

	$traitement_clients = $pdo->query("
			SELECT *
			FROM cardTypes
		");
	$add_clients_card = $traitement_clients->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<script>
		function Show(){
			document.getElementById('showornot').innerHTML = '<label for="numero_carte">Numéro de la carte:</label> <input type="text" name="numero_carte" maxlength="4" required />';
		}
		function Hide(){
			document.getElementById('showornot').innerHTML = '';
		}
	</script>
</head>

<body>
	<container>
		<!--=====================================
		=               EXERCICE 1              =
		=                   -                   =
		=            Ajout de client            =
		======================================-->

		<h2>Exercice n°1</h2>
		<form action="class2.php" method="post" accept-charset="utf-8">
			<p><label for="nom">Nom:</label> <input type="text" name="nom" maxlength="50" required /></p>
			<p><label for="prenom">Prénom:</label> <input type="text" name="prenom" maxlength="50" required /></p>
			<p><label for="date_naissance">Date de naissance:</label> <input type="date" name="date_naissance" required /></p>
			<p>
				<label for="carte">Le client a t'il une carte de fidélité ?</label>
				<input onclick="Show()" type="radio" value="1" id="Oui" name="carte" checked /> Oui
				<input onclick="Hide()" type="radio" value="0" id="Non" name="carte" /> Non
			</p>
			<p id="showornot"><label for="numero_carte">Numéro de la carte:</label> <input type="text" name="numero_carte" maxlength="4" required /></p>
			<p><button type="submit">Ajouter</button></p>
		</form>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 2              =
		=                   -                   =
		=      Créer client avec une carte      =
		=      (numéro et type à attribuer)     =
		======================================-->

		<h2>Exercice n°2</h2>
		<form action="class2.php" method="post" accept-charset="utf-8">
			<p>
				<label for="nom2">Nom:</label>
				<input type="text" name="nom2" maxlength="50" required />
			</p>

			<p>
				<label for="prenom2">Prénom:</label>
				<input type="text" name="prenom2" maxlength="50" required />
			</p>

			<p>
				<label for="date_naissance2">Date de naissance:</label>
				<input type="date" name="date_naissance2" required />
			</p>

			<p>
				<label for="carte2">Cocher la case pour ajouter une carte de fidélité:</label>
				<input type="checkbox" name="carte2" checked required />
			</p>

			<p id="autohide">
				<label for="numero_carte2">Numéro de carte:</label>
				<input type="number" name="numero_carte2" />
			</p>

			<p id="autohide">
				<label for="type_carte">Type de carte:</label>
				<select name="type_carte">
					<option>Selectionner un type de carte</option>}
					<?php
						foreach($add_clients_card as $value){
							echo '<option value="'.$value->id.'">'.$value->type.'</option>';
						}
					?>
				</select>
			</p>

			<p><button type="submit">Ajouter</button></p>
		</form>

		<!--==================================-->

		<hr>
		<p><a href='index.php'>Retour</a></p>
	</container>
</body>
</html>