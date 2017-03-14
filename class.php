<?php
	require_once 'include/config.php';
	$traitement_clients = $pdo->query('SELECT * FROM clients ORDER BY lastName');
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
					<th>ID</th>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Date de naissance</th>
					<th>Carte</th>
					<th>Numéro de carte</th>
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

							echo '<td>';
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
