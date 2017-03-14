<?php
	require_once 'include/config.php';
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
			$select_clients .= " ORDER BY lastName";
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
?>

<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
</head>

<body>
	<container>
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

		<hr>
		<p><a href='index.php'>Retour</a></p>
	</container>
</body>
</html>
