<?php 
	function somme($nombre1 = 1, $nombre2 = 2, $nombre3 = 3){
		return $nombre1 + $nombre2 + $nombre3;
	}

	echo '<div>'.somme().'</div>';
	echo '<div>'.somme(5, 5, 5).'</div>';
	echo '<div>'.somme(6, 9).'</div>';
	echo '<div>'.somme(12).'</div>';