<?php
	
	/*----------  Informations connexion base de données  ----------*/
	/* Remplacez les valeurs suivantes selon vos informations de
	 * connexions.
	 */

	// Adresse de l'hôte
	$db_host = 'localhost'; // Par défaut "localhost"

	// Nom de la base de donnée
	$db_name = 'StartingPHP';

	// Nom d'utilisateur
	$db_user = 'root'; // Par défaut "root"

	// Mot de passe
	$db_password = ''; // Par défaut vide

	/*--------------------------------------------------------------*/

	$pdo=new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_user, $db_password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

?>