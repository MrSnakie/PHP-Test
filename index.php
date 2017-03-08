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
			<a href="variable.php">Variable PHP</a>
		</p>

		<p>
			<?php
				include 'variable.php';

				// EXO 1
				echo $inutile.'<br />';

				// EXO 2
				echo $nom.'<br />';
				echo $prenom.'<br />';
				echo $age.'<br />';

				// EXO 3
				echo $km.'<br />';
				echo ($km = 3).'<br />';
				echo ($km = 125).'<br />';

				// EXO 4
				echo $ma_string.'<br />';
				echo $ma_boolean.'<br />';
				echo $ma_float.'<br />';

				// EXO 5
				echo $entier.'<br />';
				echo ($entier = 999).'<br />';

				// EXO 6
				echo "Bonjour, ".$nomm.", comment vas tu ? <br />";

				// EXO 7
				echo $PRENOM." ".$NOM." tu as ".$AGE." ans. <br />";

				// EXO 8
				echo $calcul1 ." ". $calcul2 ." ". $calcul3;
			?>
		</p>

		<p>
			<a href="conditions.php">Conditions PHP</a>
		</p>

		<p>
			<?php
				include 'conditions.php';

				// EXO 9
				if($age >= 18){
					echo "Vous êtes majeurs. <br />";
				}else{
					echo "Vous êtes mineurs. <br />";
				}

				// EXO 10
				if($iseasy == true){
					echo "C'est facile ! <br />";
				}else{
					echo "C'est difficile ! <br />";
				}

				// EXO 11
				if($age >= 18 && $genre == 'Homme'){
					echo "Vous êtes un homme et vous êtes majeurs. </br>";
				}else if($age >= 18 && $genre == 'Femme'){
					echo "Vous êtes une femme et vous êtes majeurs. </br>";
				}else if($age <= 18 && $genre == 'Homme'){
					echo "Vous êtes un homme et vous êtes mineurs. </br>";
				}else if($age <= 18 && $genre == 'Femme'){
					echo "Vous êtes une femme et vous êtes mineurs. </br>";
				}

				// EXO 12
				switch ($magnitude) {
					case 1:
						echo "Micro-séisme impossible à ressentir. </br>";
						break;
					case 2:
						echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres. </br>";
						break;
					case 3:
						echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti. </br>";
						break;
					case 4:
						echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats. </br>";
						break;
					case 5:
						echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes. </br>";
						break;
					case 6:
						echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre. </br>";
						break;
					case 7:
						echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance. </br>";
						break;
					case 8:
						echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres. </br>";
						break;
					case 9:
						echo "Séisme capable de tout détruire sur une très vaste zone. </br>";
						break;
				}

				// EXO 13
				if($maVariable != 'Homme'){
					echo "C'est une développeuse !!! </br>";
				}else{
					echo "C'est une développeur !!! </br>";
				}
			?>
		</p>

		<p>
			<a href="boucle.php">Boucle PHP</a>
		</p>

		<p>
		<?php
			include 'boucle.php';

			// EXO 14
			while($While <= 10){
				echo $While." ";
				$While++;
			}
			echo "</br>";

			// EXO 15
			while(20 > $var1){
				echo ($var1*$var2)." ";
				$var1++;
			}
			echo "</br>";

			// EXO 16
			while($v1 >= 10){
				echo ($v1*$v2)." ";
				$v1--;
			}
			echo "</br>";

			// EXO 17
			while($VARIABLE <= 10){
				echo $VARIABLE." ";
				$VARIABLE+=0.5;
			}
			echo "</br>";

			// EXO 18
			for($boucle; $boucle<=15; $boucle++){
				echo "On y arrive presque. ";
			}
			echo "</br>";

			// EXO 19
			for($boucle2; $boucle2>=0; $boucle2--){
				echo "Presque bon. ";
			}
			echo "</br>";

			// EXO 20
			for($boucle3; $boucle<=100; $boucle+=15){
				echo "On tient le bon bout. ";
			}
			echo "</br>";

			// EXO 21
			for($boucle4; $boucle>=0; $boucle-=12){
				echo "Enfin !!!! ";
			}
			echo "</br>";
		?>
		</p>

		<p>
			<a href="function.php">Function PHP</a>
		</p>

		<p>
			<?php
				include 'function.php';

				// EXO 22
				truetrue();

				// EXO 23
				echo chaine('Ceci est une chaîne de caractère.');

				// EXO 24
				echo double_chaine('Ma première phrase.','Ma deuxième phrase.');

				// EXO 25
				nombres(10, 9);

				// EXO 26
				echo nb_string(15, 'est mon nombre préféré.');

				// EXO 27
				echo info('BARILLER', 'Stéphane', 20);

				// EXO 28
				echo majorite(20, 'Homme');

				// EXO 29
				echo somme(45, 9, 2);
			?>
		</p>

		<p>
			<a href="tableau.php">Tableau PHP</a>
		</p>

		<p>
			<?php
				include 'tableau.php';

				// EXO 30
				print_r($moi);
				echo "</br>";

				// EXO 31
				echo $moi[3-1];
			?>
		</p>
	</container>
</body>
</html>