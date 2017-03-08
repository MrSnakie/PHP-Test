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
			<?php
				echo $_GET['nom'] ." ". $_GET['prenom'];
			?>
		</p>
	</container>
</body>
</html>