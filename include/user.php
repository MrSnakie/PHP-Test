<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="../style/css/style.css">
</head>

<body>
	<container>
		<p>
			<?php
				if(isset($_GET['nom'], $_GET['prenom'])) {
					echo $_GET['nom'] ." ". $_GET['prenom'];
				}else{
					echo "Il manque au moins un paramètre.";
				}
			?>
		</p>
	</container>
</body>
</html>