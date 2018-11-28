<?php

function dnslookup(){
    include 'main/config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/reversedns/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ N1ght_Frmwrk-dnslookup ]\n\n".$result."	";
	$open = fopen("result/dnslookup-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/dnslookup-$target.txt\n\n";
}

?>