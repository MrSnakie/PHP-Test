<?php
	// EXO 22
	function truetrue(){
		echo true."</br>";
	}

	// EXO 23
	function chaine($string){
		return $string."</br>";
	}

	// EXO 24
	function double_chaine($string1, $string2){
		return $string1 ." ". $string2 ."</br>";
	}

	// EXO 25
	function nombres($n1, $n2){
		if($n1 == $n2){
			echo "Les deux nombres sont identiques.</br>";
		}else if($n1 >= $n2){
			echo "Le premier nombre est plus grand.</br>";
		}else if($n1 <= $n2){
			echo "Le premier nombre est plus petit.</br>";
		}
	}

	// EXO 26
	function nb_string($nb, $STRING){
		return $nb ." ". $STRING ."</br>";
	}

	// EXO 27
	function info($nom, $prenom, $age){
		return "Bonjour, ". $nom ." ". $prenom .", tu as ". $age ." ans.</br>";
	}

	// EXO 28
	function majorite($age, $genre){
		if($age >= 18 && $genre == 'Homme'){
			return "Vous êtes un homme et vous êtes majeurs. </br>";
		}else if($age >= 18 && $genre == 'Femme'){
			return "Vous êtes une femme et vous êtes majeurs. </br>";
		}else if($age <= 18 && $genre == 'Homme'){
			return "Vous êtes un homme et vous êtes mineurs. </br>";
		}else if($age <= 18 && $genre == 'Femme'){
			return "Vous êtes une femme et vous êtes mineurs. </br>";
		}
	}
?>