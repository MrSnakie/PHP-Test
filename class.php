<?php
	require_once 'include/config.php';

	/*=============================================
	=            Affichage des clients            =
	=============================================*/

	$select_clients = 'SELECT * FROM clients';

	if(isset($_GET['sort'])){
		if ($_GET['sort'] == 'ID') {
			$select_clients .= " ORDER BY id";
		}
		elseif ($_GET['sort'] == 'Nom') {
			$select_clients .= " ORDER BY lastName";
		}
		elseif ($_GET['sort'] == 'Prenom') {
			$select_clients .= " ORDER BY firstName";
		}
		elseif ($_GET['sort'] == 'DateNaissance') {
			$select_clients .= " ORDER BY birthDate";
		}
		elseif ($_GET['sort'] == 'Carte') {
			$select_clients .= " ORDER BY card";
		}
		elseif ($_GET['sort'] == 'NumeroCarte') {
			$select_clients .= " ORDER BY cardNumber";
		}
	};

	$traitement_clients = $pdo->query($select_clients);
	$clients = $traitement_clients->fetchAll();

	/*=============================================
	=         Affichage des spectacles            =
	=============================================*/

	$traitement_spectacles = $pdo->query('
			SELECT showTypes.type, genres.genre
				AS firstGenre, secGenres.genre
				AS secondGenre
			FROM showTypes, genres, genres AS secGenres
			WHERE showTypes.id = genres.showTypesId AND showTypes.id = secGenres.showTypesId
			ORDER BY genres.id
		');
	$spectacles = $traitement_spectacles->fetchAll();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<script type="text/javascript">
		function showHide() {
			var ctn = document.getElementById('exo2');
			ctn.display = ctn.display == 'none' ? 'block' : 'none';
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
				<?php
					/* Afficher tous les clients */
					foreach  ($clients as $value) {
						echo '<tr>';
							echo '<td>';
								print_r($value->id); // ID
							echo '</td>';

							echo '<td>';
								print_r($value->lastName); // Nom
							echo '</td>';

							echo '<td>';
								print_r($value->firstName); // Prénom
							echo '</td>';

							echo '<td style="width: 150px">';
								print_r($value->birthDate); // Date de naissance
							echo '</td>';

							echo '<td>';
								if($value->card == 1){ // Carte
									echo 'Oui';
								}else{
									echo 'Non';
								};
							echo '</td>';

							echo '<td style="width: 150px">';
								if($value->cardNumber == NULL){ // Numéro de carte
									echo 'Aucun';
								}else{
									print_r($value->cardNumber);
								};
							echo '</td>';
						echo '</tr>';
					}
				?>
			</tbody>
		</table>

		<!--==================================-->

		<hr>

		<!--=====================================
		=               EXERCICE 2              =
		======================================-->

		<h2>Exercice n°2</h2>
		<p onclick="showHide()">Afficher contenu</p>
		<div id="exo2">
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
		<p><a href='index.php'>Retour</a></p>
	</container>
</body>
</html>
