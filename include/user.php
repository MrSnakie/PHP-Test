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
				if(isset($_GET['nom1'], $_GET['prenom1'])) {
					echo htmlspecialchars($_GET['nom1'] ." ". $_GET['prenom1']);
				}else if(isset($_POST['nom2'], $_POST['prenom2'])){
					echo htmlspecialchars($_POST['nom2'] ." ". $_POST['prenom2']);
				}
			?>
		</p>
	</container>
</body>
</html>