<?php 
	function isBigger ($number1, $number2){
		if($number1 > $number2){
			echo 'Le premier nombre est plus grand.';
		} else if ($number1 < $number2){
			echo 'Le premier nombre est plus petit.';
		} else {
			echo 'Les deux nombres sont identiques.';
		}
	}

	isBigger(10, 20);
	isBigger(20, 10);
	isBigger(10, 10);