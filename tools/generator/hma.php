<?php

function hma(){
	include 'main/config.php';
	echo "$cyan Total$red >$white ";
	$total = trim(fgets(STDIN));
	function randhma($panjang){
		$karakter = '';
		$karakter .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; // karakter alfabet
		$karakter .= '1234567890'; // karakter numerik
		$string = '';
		for ($i=0; $i < $panjang; $i++){
			$pos = rand(0, strlen($karakter)-1);
			$string .= $karakter{$pos};
		}
		return $string;
	}
	for ($i=0; $i < $total; $i++){
		echo " ".randhma(6)."-".randhma(6)."-".randhma(6);
		echo "\n";
	}
}

?>