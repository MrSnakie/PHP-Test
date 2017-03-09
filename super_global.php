<!DOCTYPE html>
<html>
<head>
	<title>Starting PHP</title>
	<meta name="author" content="Stéphane Bariller">
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
</head>

<body>
	<container>
		<p><strong>Votre "user agent":</strong> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
		<p><strong>Votre adresse IP:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
		<p><strong>Nom du serveur:</strong> <?php echo $_SERVER['SERVER_NAME']; ?></p>
	</container>
</body>
</html>