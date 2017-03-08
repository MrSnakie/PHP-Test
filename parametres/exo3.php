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
				if (isset($_GET['dateDebut'], $_GET['dateFin'])) {
					echo $_GET['dateDebut'] ." ". $_GET['dateFin'];
				}else{
					echo "Il manque au moins un paramètre.";
				}
			?>
		</p>
	</container>
</body>
</html>