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
?>