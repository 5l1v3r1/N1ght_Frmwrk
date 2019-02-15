<?php

include 'config.php';
@system("mkdir result");

// Banner

function index(){
    include 'config.php';
    $date = date('H:i:s');
    @system("clear");
    print "\n";
    print "$red       _,  _,___,____, __, _,____, \n";
    print "$red      (-|\ |(-/|(-/ _,(-|__|(-|    \n";
    print "$red       _| \|,'_|,_\__| _|  |,_|,  $purple V.6.8\n";
    print "$red      (      (  (     (     (      \n";
    print "$yellow       ____,____, __, _,_   _,____, __, , \n";
    print "$yellow      (-|_,(-|__)(-|\/|(-|  |(-|__)( |_/  \n";
    print "$yellow       _|   _|  \,_| _|,_|/\|,_|  \,_| \, \n";
    print "$yellow      (    (     (     (     (     (      \n\n";
}

// Menu

function menu(){
    include 'config.php';
    $date = date('H:i:s');
    print "$okegreen\n═════════════[[$white     $date$okegreen    ]]═════════════";
    print "$okegreen\n═════════════[[$white       Menu$okegreen      ]]═════════════\n\n";
    print "$cyan 01  $red :$white  IP Tools\n";
    print "$cyan 02  $red :$white  BruteForce\n";
    print "$cyan 03  $red :$white  Scanner\n";
    print "$cyan 04  $red :$white  Encode & Decode\n";
    print "$cyan 05  $red :$white  Generator\n";
    print "$cyan 06  $red :$white  Spammer\n\n";
    print "$cyan 99  $red :$white  Exit\n\n";
    $user = trim(shell_exec('whoami'));
    $host = trim(shell_exec('hostname'));
    echo "$okegreen [$cyan $user$red.$cyan$host$okegreen ]$white - on -$okegreen [$white Menu$okegreen ] \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == '01' OR $input == '1'){
        index();
        iptools();
    }
    elseif ($input == '02' OR $input == '2'){
        index();
        brute();
    }
    elseif ($input == '03' OR $input == '3'){
        index();
        scan();
    }
    elseif ($input == '04' OR $input == '4'){
        index();
        endecode();
    }
    elseif ($input == '05' OR $input == '5'){
        index();
        generator();
    }
    elseif ($input == '06' OR $input == '6'){
        index();
        spam();
    }
    elseif ($input == '99'){
        exit();
    }
    elseif ($input == 'bash'){
        @system("bash");
        index();
        menu();
    }
    else{
        index();
        menu();
    }
}

function brute(){
    include 'config.php';
    $date = date('H:i:s');
    print "$okegreen\n═════════════[[$white     $date$okegreen    ]]═════════════";
    print "$okegreen\n═════════════[[$white    BruteForce$okegreen   ]]═════════════\n\n";
    print "$yellow COMINGSOON!! \n\n";
}

function scan(){
    include 'config.php';
    $date = date('H:i:s');
    print "$okegreen\n═════════════[[$white     $date$okegreen    ]]═════════════";
    print "$okegreen\n═════════════[[$white       Scan$okegreen      ]]═════════════\n\n";
    print "$cyan 01  $red :$white  Admin Login Finder\n";
    print "$cyan 02  $red :$white  Directory Scanner\n";
    print "$cyan 03  $red :$white  Shell Finder\n";
    print "$cyan 04  $red :$white  Subdomain Scanner\n\n";
    print "$cyan 00  $red :$white  Back\n";
    print "$cyan 99  $red :$white  Exit\n\n";
    $user = trim(shell_exec('whoami'));
    $host = trim(shell_exec('hostname'));
    echo "$okegreen [$cyan $user$red.$cyan$host$okegreen ]$white - on -$okegreen [$white Menu/Scan$okegreen ] \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == '01' OR $input == '1'){
        index();
        logfin();
    }
    elseif ($input == '02' OR $input == '2'){
        index();
        dirscan();
    }
    elseif ($input == '03' OR $input == '3'){
        index();
        shellscan();
    }
    elseif ($input == '04' OR $input == '4'){
        index();
        subdoscan();
    }
    elseif ($input == '00' OR $input == '0'){
        index();
        menu();
    }
    elseif ($input == '99'){
        exit();
    }
    else{
        index();
        scan();
    }
}

function endecode(){
    include 'config.php';
    $date = date('H:i:s');
    print "$okegreen\n═════════════[[$white     $date$okegreen    ]]═════════════";
    print "$okegreen\n═════════════[[$white     Endecode$okegreen    ]]═════════════\n\n";
    print "$cyan 01  $red :$white  Encode\n\n";
    print "$cyan 00  $red :$white  Back\n";
    print "$cyan 99  $red :$white  Exit\n\n";
    $user = trim(shell_exec('whoami'));
    $host = trim(shell_exec('hostname'));
    echo "$okegreen [$cyan $user$red.$cyan$host$okegreen ]$white - on -$okegreen [$white Menu/Crypto$okegreen ] \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == '01' OR $input == '1'){
        index();
        encode();
    }
    elseif ($input == '00' OR $input == '0'){
        index();
        menu();
    }
    elseif ($input == '99'){
        exit();
    }
    else{
        index();
        endecode();
    }
}

function iptools(){
    include 'config.php';
    $date = date('H:i:s');
    print "$okegreen\n═════════════[[$white     $date$okegreen    ]]═════════════";
    print "$okegreen\n═════════════[[$white     IP Tools$okegreen    ]]═════════════\n\n";
    print "$cyan 01  $red :$white  MTR Traceroute\n";
    print "$cyan 02  $red :$white  Test Ping\n";
    print "$cyan 03  $red :$white  DNS Lookup\n";
    print "$cyan 04  $red :$white  Reverse DNS\n";
    print "$cyan 05  $red :$white  Whois\n";
    print "$cyan 06  $red :$white  Host Search\n";
    print "$cyan 07  $red :$white  Reverse IP\n";
    print "$cyan 08  $red :$white  HTTP Headers\n";
    print "$cyan 09  $red :$white  Page Links\n";
    print "$cyan 10  $red :$white  Nmap Port Scan\n\n";
    print "$cyan 00  $red :$white  Back\n";
    print "$cyan 99  $red :$white  Exit\n\n";
    $user = trim(shell_exec('whoami'));
    $host = trim(shell_exec('hostname'));
    echo "$okegreen [$cyan $user$red.$cyan$host$okegreen ]$white - on -$okegreen [$white Menu/IP$okegreen ] \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == '01' OR $input == '1'){
        index();
        mtr();
    }
    elseif ($input == '02' OR $input == '2'){
        index();
        testping();
    }
    elseif ($input == '03' OR $input == '3'){
        index();
        dnslookup();
    }
    elseif ($input == '04' OR $input == '4'){
        index();
        reversedns();
    }
    elseif ($input == '05' OR $input == '5'){
        index();
        whois();
    }
    elseif ($input == '06' OR $input == '6'){
        index();
        host();
    }
    elseif ($input == '07' OR $input == '7'){
        index();
        reverseip();
    }
    elseif ($input == '08' OR $input == '8'){
        index();
        httphead();
    }
    elseif ($input == '09' OR $input == '9'){
        index();
        pagelink();
    }
    elseif ($input == '10'){
        index();
        nmap();
    }
    elseif ($input == '00' OR $input == '0'){
        index();
        menu();
    }
    elseif ($input == '99'){
        exit();
    }
    else{
        index();
        iptools();
    }
}

function generator(){
    include 'config.php';
    $date = date('H:i:s');
    print "$okegreen\n═════════════[[$white     $date$okegreen    ]]═════════════";
    print "$okegreen\n═════════════[[$white     Generate$okegreen    ]]═════════════\n\n";
    print "$cyan 01  $red :$white  HMA License key Generator\n";
    print "$cyan 02  $red :$white  Custom Code Generator\n";
    print "$cyan 03  $red :$white  Wifi.id Campus Generator\n";
    print "$cyan 04  $red :$white  Facebook UID Generator\n\n";
    print "$cyan 00  $red :$white  Back\n";
    print "$cyan 99  $red :$white  Exit\n\n";
    $user = trim(shell_exec('whoami'));
    $host = trim(shell_exec('hostname'));
    echo "$okegreen [$cyan $user$red.$cyan$host$okegreen ]$white - on -$okegreen [$white Menu/Generator$okegreen ] \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == '01' OR $input == '1'){
        index();
        hma();
    }
    elseif ($input == '02' OR $input == '2'){
        index();
        custgen();
    }
    elseif ($input == '03' OR $input == '3'){
        index();
        wifiid();
    }
    elseif ($input == '04' OR $input == '4'){
        index();
        fbid();
    }
    elseif ($input == '00' OR $input == '0'){
        index();
        menu();
    }
    elseif ($input == '99'){
        exit();
    }
    else{
        index();
        generator();
    }
}

function spam(){
    include 'config.php';
    $date = date('H:i:s');
    print "$okegreen\n═════════════[[$white     $date$okegreen    ]]═════════════";
    print "$okegreen\n═════════════[[$white       Spam$okegreen      ]]═════════════\n\n";
    print "$cyan 01  $red :$white  SMS Pizza Hut Delivery\n";
    print "$cyan 02  $red :$white  SMS JD.ID\n";
    print "$cyan 03  $red :$white  SMS Telkomsel\n\n";
    print "$cyan 00  $red :$white  Back\n";
    print "$cyan 99  $red :$white  Exit\n\n";
    $user = trim(shell_exec('whoami'));
    $host = trim(shell_exec('hostname'));
    echo "$okegreen [$cyan $user$red.$cyan$host$okegreen ]$white - on -$okegreen [$white Menu/Spam$okegreen ] \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == '01' OR $input == '1'){
        index();
        smsphd();
    }
    elseif ($input == '02' OR $input == '2'){
        index();
        smsjd();
    }
    elseif ($input == '03' OR $input == '3'){
        index();
        smstelkom();
    }
    elseif ($input == '00' OR $input == '0'){
        index();
        menu();
    }
    elseif ($input == '99'){
        exit();
    }
    else{
        index();
        spam();
    }
}

// Encode Tools

function encode(){
    include 'config.php';
    $date = date('H:i:s');
    print "$okegreen\n═════════════[[$white     $date$okegreen    ]]═════════════";
    print "$okegreen\n═════════════[[$white      Encode$okegreen     ]]═════════════\n\n";
    print "$cyan 01  $red :$white  Encode Md4\n";
    print "$cyan 02  $red :$white  Encode Md5\n";
    print "$cyan 03  $red :$white  Encode Sha1\n";
    print "$cyan 04  $red :$white  Encode Base64\n";
    print "$cyan 05  $red :$white  Encode All Type\n\n";
    print "$cyan 00  $red :$white  Back\n";
    print "$cyan 99  $red :$white  Exit\n\n";
    $user = trim(shell_exec('whoami'));
    $host = trim(shell_exec('hostname'));
    echo "$okegreen [$cyan $user$red.$cyan$host$okegreen ]$white - on -$okegreen [$white Menu/Endecode/Encode$okegreen ] \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == '01' OR $input == '1'){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN));
        echo "$cyan Encode Md4$red :$white ",crypt('md4',$base);
    }
    elseif ($input == '02' OR $input == '2'){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN,256));
        echo "$cyan Encode Md5$red :$white ",md5($base);
    }
    elseif ($input == '03' OR $input == '3'){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN));
        echo "$cyan Encode Sha1$red :$white ",sha1($base);
    }
    elseif ($input == '04' OR $input == '4'){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN));
        echo "$cyan Encode Md5$red :$white ",base64_encode($base);
    }
    elseif ($input == '05' OR $input == '5'){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN));
        print "$okegreen █$white Length$okegreen █████$white Type$okegreen █████████████$white Encode$okegreen █████████████$white\n";
        foreach (hash_algos() as $v){
            $r = hash($v, $base, false);
            printf("    %3d         %-12s       %s\n\n", strlen($r), $v, $r);
        }
    }
    elseif ($input == '00' OR $input == '0'){
        index();
        endecode();
    }
    elseif ($input == '99'){
        exit();
    }
    else{
        index();
        encode();
    }
    print "\n\n";
}

// Generator Tools

function custgen(){
    include 'config.php';
    echo "$cyan Want to Input Base(y/n)?$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 'y' OR $input == 'Y'){
        echo "$cyan Base$red >$white ";
        $base = trim(fgets(STDIN));
        echo "$cyan Jumlah Digit Kode$red >$white ";
        $total = trim(fgets(STDIN));
        echo "$cyan UPPER/lower (U/l)?$red >$white ";
        $case = trim(fgets(STDIN));
        echo "$cyan Total Kode$red >$white ";
        $jumlah = trim(fgets(STDIN));
        if ($case == 'U' OR $case == 'u'){
            function random($panjang)
            {
                $karakter = '';
                $karakter .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; // karakter alfabet
                $karakter .= '1234567890'; // karakter numerik
                $string = '';
                for ($i=0; $i < $panjang; $i++) { 
                    $pos = rand(0, strlen($karakter)-1);
                    $string .= $karakter{$pos};
                }
                return $string;
            }
            for ($i=0; $i < $jumlah; $i++){
                echo " ".$base.random($total-strlen($base));
                echo "\n";
            }
        }
        elseif ($case == 'l' OR $case == 'L'){
            function random($panjang)
            {
                $karakter = '';
                $karakter .= 'abcdefghijklmnopqrstuvwxyz'; // karakter alfabet
                $karakter .= '1234567890'; // karakter numerik
                $string = '';
                for ($i=0; $i < $panjang; $i++) { 
                    $pos = rand(0, strlen($karakter)-1);
                    $string .= $karakter{$pos};
                }
                return $string;
            }
            for ($i=0; $i < $jumlah; $i++){
                echo " ".$base.random($total-strlen($base));
                echo "\n";
            }
        }
    }
    elseif ($input == 'n' OR $input == 'N'){
        echo "$cyan Jumlah Digit Kode$red >$white ";
        $total = trim(fgets(STDIN));
        echo "$cyan UPPER/lower (U/l)?$red >$white ";
        $case = trim(fgets(STDIN));
        echo "$cyan Total Kode$red >$white ";
        $jumlah = trim(fgets(STDIN));
        if ($case == 'U' OR $case == 'u'){
            function random($panjang)
            {
                $karakter = '';
                $karakter .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; // karakter alfabet
                $karakter .= '1234567890'; // karakter numerik
                $string = '';
                for ($i=0; $i < $panjang; $i++) { 
                    $pos = rand(0, strlen($karakter)-1);
                    $string .= $karakter{$pos};
                }
                return $string;
            }
            for ($i=0; $i < $jumlah; $i++){
                echo " ".random($total);
                echo "\n";
            }
        }
        elseif ($case == 'l' OR $case == 'L'){
            function random($panjang)
            {
                $karakter = '';
                $karakter .= 'abcdefghijklmnopqrstuvwxyz'; // karakter alfabet
                $karakter .= '1234567890'; // karakter numerik
                $string = '';
                for ($i=0; $i < $panjang; $i++) { 
                    $pos = rand(0, strlen($karakter)-1);
                    $string .= $karakter{$pos};
                }
                return $string;
            }
            for ($i=0; $i < $jumlah; $i++){
                echo " ".random($total);
                echo "\n";
            }
        }
    }
}

function hma(){
	include 'config.php';
	echo "$cyan Total$red >$white ";
	$total = trim(fgets(STDIN));
	function randhma($panjang){
		$karakter = '';
		$karakter .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$karakter .= '1234567890';
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

function wifiid(){
    include 'config.php';
    print "$cyan 01  $red :$white  Password like Username\n";
    print "$cyan 02  $red :$white  Default Campus Account\n\n";
    echo "$cyan Menu$red >$white ";
    $input = trim(fgets(STDIN));print "\n";
    if ($input == '01' OR $input == '1'){
        echo "$cyan Base$red >$white ";
        $base = trim(fgets(STDIN));
        echo "$cyan Panjang Username$red >$white ";
        $total = trim(fgets(STDIN));
        echo "$cyan Nama Kampus$red >$white ";
        $univ = trim(fgets(STDIN));
        echo "$cyan Total Akun$red >$white ";
        $jumlah = trim(fgets(STDIN));
        print "\n";
        function randwifi($panjang){
            $karakter = '';
            $karakter .= '1234567890';
            $string = '';
            for ($i=0; $i < $panjang; $i++){
                $pos = rand(0, strlen($karakter)-1);
                $string .= $karakter{$pos};
            }
            return $string;
        }
        for ($i=0; $i < $jumlah; $i++){
            $acak = $base.randwifi($total-strlen($base));
            print "$cyan [$okegreen Username$cyan ]$red >$white ".$acak."@".$univ;print "\n";
            print "$cyan [$okegreen Password$cyan ]$red >$white ".$acak;print "\n\n";
        }
    }
    elseif ($input == '02' OR $input == '2'){
        print "$cyan 01  $red :$white  Use Data List\n";
        print "$cyan 02  $red :$white  Manual Input\n\n";
        echo "$cyan Menu$red >$white ";
        $input = trim(fgets(STDIN));
        print "\n";
        if ($input == '01' OR $input == '1'){
            print "$cyan [$red !$cyan ]$yellow COMINGSOON !!\n\n";
        }
        elseif ($input == '02' OR $input == '2'){
            print "$cyan NIM$red >$white ";
            $nim = trim(fgets(STDIN));
            print "$cyan Tahun Registrasi$red >$white ";
            $tahun = trim(fgets(STDIN));
            print "$cyan Tanggal Lahir$red >$white ";
            $tanggal = trim(fgets(STDIN));
            print "$cyan Ganjil/Genap$red >$white ";
            $ganjilgenap = trim(fgets(STDIN));
            print "$cyan [$okegreen Username$cyan ]$red >$white ".$nim."@ut.ac.id";print "\n";
            print "$cyan [$okegreen Password$cyan ]$red >$white ".$tahun.$ganjilgenap.$tanggal;print "\n\n";
        }
    }
}

function fbid(){
    include 'config.php';
    $base = '1000';
    echo "$cyan Total$red >$white ";
    $jumlah = trim(fgets(STDIN));

    function randfbid($panjang){
        $karakter = '';
        $karakter .= '1234567890';
        $string = '';
        for ($i=0; $i < $panjang; $i++){
            $pos = rand(0, strlen($karakter)-1);
            $string .= $karakter{$pos};
        }
        return $string;
    }
    for ($i=0; $i < $jumlah; $i++){
        $acak = $base.randfbid(15-strlen($base))."\n";
        $open = fopen("result/fbid.txt", 'a');
        fwrite($open, $acak);
        fclose($open);
        print "$white$acak";
    }
    print "\n$cyan [!]==// Result reported to result/fbid.txt\n\n";
}

// IP Tools

function dnslookup(){
    include 'config.php';
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

function httphead(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/httpheaders/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ N1ght_Frmwrk-headers ]\n\n".$result."	";
	$open = fopen("result/headers-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/headers-$target.txt\n\n";
}

function host(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/hostsearch/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ N1ght_Frmwrk-host ]\n\n".$result."	";
	$open = fopen("result/host-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/host-$target.txt\n\n";
}

function mtr(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/mtr/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ N1ght_Frmwrk-mtr ]\n\n".$result."	";
	$open = fopen("result/mtr-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/mtr-$target.txt\n\n";
}

function nmap(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/nmap/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ N1ght_Frmwrk-nmap ]\n\n".$result."	";
	$open = fopen("result/nmap-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/nmap-$target.txt\n\n";
}

function pagelink(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/pagelinks/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ N1ght_Frmwrk-links ]\n\n".$result."	";
	$open = fopen("result/links-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/links-$target.txt\n\n";
}

function reversedns(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/reversedns/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ N1ght_Frmwrk-reversedns ]\n\n".$result."	";
	$open = fopen("result/reversedns-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/reversedns-$target.txt\n\n";
}

function reverseip(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/reverseip/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ N1ght_Frmwrk-reverseip ]\n\n".$result."	";
	$open = fopen("result/reverseip-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/reverseip-$target.txt\n\n";
}

function testping(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/nping/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ N1ght_Frmwrk-testping ]\n\n".$result."	";
	$open = fopen("result/testping-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/testping-$target.txt\n\n";
}

function whois(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/whois/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ N1ght_Frmwrk-whois ]\n\n".$result."	";
	$open = fopen("result/whois-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/whois-$target.txt\n\n";
}

// Scanner Tools

function dirscan(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    echo "$cyan Use Default List (Y/N)?$red  >$white ";
    $pilihan = trim(fgets(STDIN));
    if ($pilihan == 'Y' OR $pilihan == 'y'){
            $list = 'wordlist/dirscan.txt';
        }
    else{
            echo "$cyan List$red >$white ";
            $list = trim(fgets(STDIN));
        }
    if(!preg_match("/^http:\/\//",$target) AND !preg_match("/^https:\/\//",$target)){
            $targetnya = "http://$target";
        }
    else{
            $targetnya = $target;
        }
    echo "$yellow \n [!]==// Opening $list ...";
    $buka = fopen("$list","r");
    $ukuran = filesize("$list");
    $baca = fread($buka,$ukuran);
    $lists = explode("\r\n",$baca);
    echo "$cyan\n [!]==// Please Wait...
    ";
    foreach($lists as $dir){
            $log = "$targetnya/$dir";
            $ch = curl_init("$log");
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            if($httpcode == 200){
                    $handle = fopen("result/dirscan-$target.txt", "a+");
                    fwrite($handle, "$log\n");
                    print "\n$cyan  [".date('H:m:s')."]==//$white $log =>$cyan OK";
                }
            elseif($httpcode == 403){
                    print "\n$red  [".date('H:m:s')."]==//$white $log =>$red FORBIDDEN";
                }
            else{
                    print "\n$red  [".date('H:m:s')."]==//$white $log =>$red ERROR";
                }
        }
    echo "\n\n$cyan [!]==// Result OK reported to result/dirscan-$target.txt\n\n $white ";
}

function logfin(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    echo "$cyan Use Default List (Y/N)?$red  >$white ";
    $pilihan = trim(fgets(STDIN));
    if ($pilihan == 'Y' OR $pilihan == 'y'){
            $list = 'wordlist/adlog.txt';
        }
    else{
            echo "$cyan List$red >$white ";
            $list = trim(fgets(STDIN));
        }
    if(!preg_match("/^http:\/\//",$target) AND !preg_match("/^https:\/\//",$target)){
            $targetnya = "http://$target";
        }
    else{
            $targetnya = $target;
        }
    echo "$yellow \n [!]==// Opening $list ...";
    $buka = fopen("$list","r");
    $ukuran = filesize("$list");
    $baca = fread($buka,$ukuran);
    $lists = explode("\r\n",$baca);
    echo "$cyan\n [!]==// Please Wait...
    ";
    foreach($lists as $login){
            $log = "$targetnya/$login";
            $ch = curl_init("$log");
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            if($httpcode == 200){
                $handle = fopen("result/adlog-$target.txt", "a+");
                fwrite($handle, "$log\n");
                print "\n$cyan  [".date('H:m:s')."]==//$white $log =>$cyan OK";
            }
            elseif($httpcode == 403){
                print "\n$red  [".date('H:m:s')."]==//$white $log =>$red FORBIDDEN";
            }
            else{
                print "\n$red  [".date('H:m:s')."]==//$white $log =>$red ERROR";
            }
        }
    echo "\n\n$cyan [!]==// Result OK reported to result/adlog-$target.txt\n\n $white ";
}

function shellscan(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    echo "$cyan Use Default List (Y/N)?$red  >$white ";
    $pilihan = trim(fgets(STDIN));
    if ($pilihan == 'Y' OR $pilihan == 'y'){
            $list = 'wordlist/shell.txt';
        }
    else{
            echo "$cyan List$red >$white ";
            $list = trim(fgets(STDIN));
        }
    if(!preg_match("/^http:\/\//",$target) AND !preg_match("/^https:\/\//",$target)){
            $targetnya = "http://$target";
        }
    else{
            $targetnya = $target;
        }
    echo "$yellow \n [!]==// Opening $list ...";
    $buka = fopen("$list","r");
    $ukuran = filesize("$list");
    $baca = fread($buka,$ukuran);
    $lists = explode("\r\n",$baca);
    echo "$cyan\n [!]==// Please Wait...
    ";
    foreach($lists as $shell){
            $log = "$targetnya/$shell";
            $ch = curl_init("$log");
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            if($httpcode == 200){
                    $handle = fopen("result/shellscan-$target.txt", "a+");
                    fwrite($handle, "$log\n");
                    print "\n$cyan  [".date('H:m:s')."]==//$white $log =>$cyan OK";
                }
            elseif($httpcode == 403){
                    print "\n$red  [".date('H:m:s')."]==//$white $log =>$red FORBIDDEN";
                }
            else{
                    print "\n$red  [".date('H:m:s')."]==//$white $log =>$red ERROR";
                }
        }
    echo "\n\n$cyan [!]==// Result OK reported to result/shellscan-$target.txt\n\n $white ";
}

function subdoscan(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    echo "$cyan Use Default List (Y/N)?$red  >$white ";
    $pilihan = trim(fgets(STDIN));
    if ($pilihan == 'Y' OR $pilihan == 'y'){
            $list = 'wordlist/subdo.txt';
        }
    else{
            echo "$cyan List$red >$white ";
            $list = trim(fgets(STDIN));
        }
    $targetnya = $target;
    echo "$yellow \n [!]==// Opening $list ...";
    $buka = fopen("$list","r");
    $ukuran = filesize("$list");
    $baca = fread($buka,$ukuran);
    $lists = explode("\r\n",$baca);
    echo "$cyan\n [!]==// Please Wait...
    ";
    foreach($lists as $subdo){
            $log = "$subdo.$targetnya";
            $ch = curl_init("$log");
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            if($httpcode == 200){
                    $handle = fopen("result/subdo-$target.txt", "a+");
                    fwrite($handle, "$log\n");
                    print "\n$cyan  [".date('H:m:s')."]==//$white $log =>$cyan OK";
                }
            elseif($httpcode == 403){
                    print "\n$red  [".date('H:m:s')."]==//$white $log =>$red FORBIDDEN";
                }
            else{
                    print "\n$red  [".date('H:m:s')."]==//$white $log =>$red ERROR";
                }
        }
    echo "\n\n$cyan [!]==// Result OK reported to result/subdo-$target.txt\n\n $white ";
}

// Spammer Tools

function jdid($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        curl_exec ($ch);
        print ".";
        curl_close ($ch);
        sleep($wait);
        $x++;
        flush();
    }
}

function smsjdid(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $nomor = trim(fgets(STDIN));
    echo "$cyan Jumlah$red >$white ";
    $jumlah = trim(fgets(STDIN));
    echo "$cyan Delay$red >$white ";
    $jeda = trim(fgets(STDIN));
    print "\n";
    print "$yellow Processing";
    jdid($nomor, $jumlah, $jeda);
    print "\n";
    print "$cyan Done !!\n\n";
}

function phd($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.phd.co.id/en/users/sendOTP");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=".$no);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.phd.co.id/en/users/createnewuser');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        curl_exec ($ch);
        print ".";
        curl_close ($ch);
        sleep($wait);
        $x++;
        flush();
    }
}

function smsphd(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $nomor = trim(fgets(STDIN));
    echo "$cyan Jumlah$red >$white ";
    $jumlah = trim(fgets(STDIN));
    echo "$cyan Delay$red >$white ";
    $jeda = trim(fgets(STDIN));
    print "\n";
    print "$yellow Processing";
    phd($nomor, $jumlah, $jeda);
    print "\n";
    print "$cyan Done !!\n\n";
}

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
    include 'config.php';
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

index();
menu();

?>
