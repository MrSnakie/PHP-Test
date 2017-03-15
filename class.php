<?php
	require_once 'include/config.php';

	/*=============================================
	=            Affichage des clients            =
	=============================================*/

	$select_clients = "SELECT *
			FROM clients
			# LIMIT 20 # EXO 3 - Limiter affichage à 20 clients
			# WHERE card = 1 # EXO 4 - Afficher seulement les utilisateurs qui ont une carte
			WHERE lastName LIKE 'M%' # EXO 5 - Afficher nom clients qui commencent par M
		";

	if(isset($_GET['sort'])){
		if ($_GET['sort'] == 'ID') {
			$select_clients .= " ORDER BY id";
		}elseif ($_GET['sort'] == 'Nom') {
			$select_clients .= " ORDER BY lastName";
		}elseif ($_GET['sort'] == 'Prenom') {
			$select_clients .= " ORDER BY firstName";
		}elseif ($_GET['sort'] == 'DateNaissance') {
			$select_clients .= " ORDER BY birthDate";
		}elseif ($_GET['sort'] == 'Carte') {
			$select_clients .= " ORDER BY card";
		}elseif ($_GET['sort'] == 'NumeroCarte') {
			$select_clients .= " ORDER BY cardNumber";
		}
	}else{
		$select_clients .= " ORDER BY lastName";
	};

	$traitement_clients = $pdo->query($select_clients);
	$clients = $traitement_clients->fetchAll();

	/*=============================================
	=         Affichage des spectacles            =
	=============================================*/

	$traitement_spectacles = $pdo->query("
			SELECT showTypes.type, genres.genre
				AS firstGenre, secGenres.genre
				AS secondGenre
			FROM showTypes, genres, genres AS secGenres
			WHERE showTypes.id = genres.showTypesId AND showTypes.id = secGenres.showTypesId
			ORDER BY genres.id
		");
	$spectacles = $traitement_spectacles->fetchAll();

	/*=============================================
	=         Phrase annonce spectacles           =
	=============================================*/

	$traitement_spectacles = $pdo->query("
			SELECT *
			FROM shows
			ORDER BY title
		");
	$annonce_spectacles = $traitement_spectacles->fetchAll();

	/*=============================================
	=           Phrase annonce clients            =
	=============================================*/

	$traitement_clients = $pdo->query("
			SELECT *
			FROM clients
		");
	$annonce_clients = $traitement_clients->fetchAll();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<script type="text/javascript">
		function showHideExo2() {
			exo = document.getElementById('exo2');
			if(exo.style.display == "none") {
				exo.style.display = "block";
			}else{
				exo.style.display = "none";
			}
		}
		function showHideExo7() {
			exo = document.getElementById('exo7');
			if(exo.style.display == "none") {
				exo.style.display = "block";
			}else{
				exo.style.display = "none";
			}
		}
	</script>
</head>

<body>
	<container>
		<!--=====================================
		=               EXERCICE 1              =
		======================================-->

		<h2>Exercice n°1</h2>
		<table align="center">
			<thead>
				<tr>
					<th><a href="class.php?sort=ID">ID</a></th>
					<th><a href="class.php?sort=Nom">Nom</a></th>
					<th><a href="class.php?sort=Prenom">Prénom</a></th>
					<th><a href="class.php?sort=DateNaissance">Date de naissance</a></th>
					<th><a href="class.php?sort=Carte">Carte</a></th>
					<th><a href="class.php?sort=NumeroCarte">Numéro de carte</a></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($clients as $value) : ?>
					<tr>
						<td><?= $value->id ?></td> <!-- ID du client -->
						<td><?= $value->lastName ?></td> <!-- Nom du client -->
						<td><?= $value->firstName ?></td> <!-- Prénom du client -->
						<td style="width: 150px"><?= $value->birthDate ?></td> <!-- Date de naissance -->
						<td>
							<?php
								if($value->card == 1){ // Carte de fidélité (Oui / Non)
									echo 'Oui';
								}else{
									echo 'Non';
								};
							?>
						</td>
						<td style="width: 150px">
							<?php
								if($value->cardNumber == NULL){ // Numéro de carte
									echo 'Aucun';
								}else{
									print_r($value->cardNumber);
								};
							?>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 2              =
		======================================-->

		<h2>Exercice n°2</h2>
		<p style="cursor: pointer; color: lime;" onclick="showHideExo2()">Afficher contenu</p>
		<div style="display:none" id="exo2">
			<table align="center">
				<thead>
					<tr>
						<th>Type</th>
						<th>Genre 1</th>
						<th>Genre 2</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($spectacles as $value) : ?>
					<tr>
						<td><?= $value->type ?></td>
						<td style="width: auto"><?= $value->firstGenre ?></td>
						<td style="width: auto"><?= $value->secondGenre ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 3              =
		======================================-->

		<h2>Exercice n°3</h2>
		<p>Voir le 1er tableau.</p>
		<p>On affiche que 20 clients.</p>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 4              =
		======================================-->

		<h2>Exercice n°4</h2>
		<p>Voir le 1er tableau.</p>
		<p>On affiche que les clients qui ont une carte.</p>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 5              =
		======================================-->

		<h2>Exercice n°5</h2>
		<p>Voir le 1er tableau.</p>
		<p>On affiche que les clients ou le nom commencent par "M".</p>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 6              =
		======================================-->

		<h2>Exercice n°6</h2>
		<?php
			foreach ($annonce_spectacles as $value) {
				echo "<p>". $value->title ." par ". $value->performer .", le ". $value->date ." à ". $value->startTime .".</p>";
			}
		?>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 7              =
		======================================-->

		<h2>Exercice n°7</h2>
		<p style="cursor: pointer; color: lime;" onclick="showHideExo7()">Afficher contenu</p>
		<div style="display:none" id="exo7">
			<?php foreach ($annonce_clients as $value) : ?>
				<p>
					<strong>Nom du client:</strong> <?= $value->lastName ?> —
					<strong>Prénom du client:</strong> <?= $value->firstName ?> —
					<strong>Date de naissance:</strong> <?= $value->birthDate ?> —
					<strong>Carte de fidélité:</strong> <?= ($value->card == 1)?'Oui':'Non'; ?>
					<?php if($value->cardNumber !== NULL){echo '— <strong>Numéro de carte:</strong>' .$value->cardNumber;} ?>
				</p>
			<?php endforeach; ?>
		</div>

		<!--==================================-->

		<hr>
		<p><a href='index.php'>Retour</a></p>
	</container>
</body>
</html>