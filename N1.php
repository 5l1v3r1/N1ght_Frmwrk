<?php

include 'config.php';

if (file_exists("result")){
}
else{
    @system("mkdir result");
}

// Banner

function index(){
    include 'config.php';
    $date = date('H:i:s');
    @system("clear");
    print "$cyan\n";
    print "  ██╗               \n";
    print "  ╚██╗              \n";
    print "   ╚██╗$white  これは私のものです.$cyan\n";
    print "   ██╔╝             \n";
    print "  ██╔╝  ███████╗    \n";
    print "  ╚═╝   ╚══════╝    \n";
    print "\n";
}

// Menu

function menu(){
    include 'config.php';
    print "$cyan 01$red :$white IP Tools\n";
    print "$cyan 02$red :$white Scanner\n";
    print "$cyan 03$red :$white Crypto\n";
    print "$cyan 04$red :$white Generator\n\n";
    print "$cyan 99$red :$white Exit\n\n";
    echo "$white Menu$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == '01' OR $input == '1'){
        index();
        iptools();
    }
    elseif ($input == '02' OR $input == '2'){
        index();
        scan();
    }
    elseif ($input == '03' OR $input == '3'){
        index();
        endecode();
    }
    elseif ($input == '04' OR $input == '4'){
        index();
        generator();
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
        print "\n";
        @system("$input");
        print "\n";
        menu();
    }
}

function scan(){
    include 'config.php';
    print "$cyan 01$red :$white Admin Login Finder\n";
    print "$cyan 02$red :$white Directory Scanner\n";
    print "$cyan 03$red :$white Shell Finder\n";
    print "$cyan 04$red :$white Subdomain Scanner\n\n";
    print "$cyan 00$red :$white Back\n";
    print "$cyan 99$red :$white Exit\n\n";
    echo "$white Menu/Scan$red >$white ";
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
    elseif ($input == 'bash'){
        @system("bash");
        index();
        scan();
    }
    else{
        print "\n";
        @system("$input");
        print "\n";
        scan();
    }
}

function endecode(){
    include 'config.php';
    print "$cyan 01$red :$white Encode\n\n";
    print "$cyan 00$red :$white Back\n";
    print "$cyan 99$red :$white Exit\n\n";
    echo "$white Menu/Crypto$red >$white ";
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
    elseif ($input == 'bash'){
        @system("bash");
        index();
        endecode();
    }
    else{
        print "\n";
        @system("$input");
        print "\n";
        endecode();
    }
}

function iptools(){
    include 'config.php';
    print "$cyan 01$red :$white MTR Traceroute\n";
    print "$cyan 02$red :$white Test Ping\n";
    print "$cyan 03$red :$white DNS Lookup\n";
    print "$cyan 04$red :$white Reverse DNS\n";
    print "$cyan 05$red :$white Whois\n";
    print "$cyan 06$red :$white Host Search\n";
    print "$cyan 07$red :$white Autonomous System Lookup\n";
	print "$cyan 08$red :$white Subnet Lookup\n";
	print "$cyan 09$red :$white Shared DNS Servers\n";
	print "$cyan 10$red :$white Geo IP Location Lookup\n";
	print "$cyan 11$red :$white Zone Transfer Test\n";
    print "$cyan 12$red :$white Reverse IP\n";
    print "$cyan 13$red :$white HTTP Headers\n";
    print "$cyan 14$red :$white Page Links\n";
    print "$cyan 15$red :$white Nmap Port Scan\n\n";
    print "$cyan 00$red :$white Back\n";
    print "$cyan 99$red :$white Exit\n\n";
    echo "$white Menu/IP$red >$white ";
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
        autonomous();
    }
    elseif ($input == '08' OR $input == '8'){
        index();
        subnet();
	}
	elseif ($input == '09' OR $input == '9'){
        index();
        sharedns();
    }
    elseif ($input == '10'){
        index();
        geoip();
	}
	elseif ($input == '11'){
        index();
        zonetransfer();
    }
    elseif ($input == '12'){
        index();
        reverseip();
    }
    elseif ($input == '13'){
        index();
        httphead();
    }
    elseif ($input == '14'){
        index();
        pagelink();
    }
    elseif ($input == '15'){
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
    elseif ($input == 'bash'){
        @system("bash");
        index();
        iptools();
    }
    else{
        print "\n";
        @system("$input");
        print "\n";
        iptools();
    }
}

function generator(){
    include 'config.php';
    print "$cyan 01$red :$white HMA License key Generator\n";
    print "$cyan 02$red :$white Custom Code Generator\n";
    print "$cyan 03$red :$white Wifi.id Campus Generator\n";
    print "$cyan 04$red :$white Facebook UID Generator\n\n";
    print "$cyan 00$red :$white Back\n";
    print "$cyan 99$red :$white Exit\n\n";
    echo "$white Menu/Generator$red >$white ";
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
    elseif ($input == 'bash'){
        @system("bash");
        index();
        generator();
    }
    else{
        print "\n";
        @system("$input");
        print "\n";
        generator();
    }
}

// Encode Tools

function encode(){
    include 'config.php';
    print "$cyan 01$red :$white Encode Md4\n";
    print "$cyan 02$red :$white Encode Md5\n";
    print "$cyan 03$red :$white Encode Sha1\n";
    print "$cyan 04$red :$white Encode Base64\n";
    print "$cyan 05$red :$white Encode All Type\n\n";
    print "$cyan 00$red :$white Back\n";
    print "$cyan 99$red :$white Exit\n\n";
    echo "$white Menu/Crypto/Encode$red >$white ";
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
    elseif ($input == 'bash'){
        @system("bash");
        index();
        encode();
    }
    else{
        print "\n";
        @system("$input");
        print "\n";
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
        $acak = randhma(6)."-".randhma(6)."-".randhma(6)."\n";
        $open = fopen("result/hma.txt", 'a');
        fwrite($open, $acak);
        fclose($open);
		print "$white$acak";
    }
    print "$cyan [$yellow *$cyan ]$white Key generated to result/hma.txt\n\n";
}

function wifiid(){
    include 'config.php';
    print "$cyan 01$red :$white Password like Username\n";
    print "$cyan 02$red :$white Default Campus Account\n\n";
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
        print "$cyan 01$red :$white Use Data List\n";
        print "$cyan 02$red :$white Manual Input\n\n";
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
    print "$cyan [$yellow *$cyan ]$white ID generated to result/fbid.txt\n\n";
}

// IP Tools

function dnslookup(){
    if (file_exists("result/dnslookup")){
    }
    else{
        @system("mkdir result/dnslookup");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/dnslookup/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ dnslookup ]\n\n".$result."	";
	$open = fopen("result/dnslookup/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/dnslookup/$target.txt\n\n";
}

function httphead(){
    if (file_exists("result/headers")){
    }
    else{
        @system("mkdir result/headers");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/httpheaders/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ headers ]\n\n".$result."	";
	$open = fopen("result/headers/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/headers/$target.txt\n\n";
}

function host(){
    if (file_exists("result/host")){
    }
    else{
        @system("mkdir result/host");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/hostsearch/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ host ]\n\n".$result."	";
	$open = fopen("result/host/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/host/$target.txt\n\n";
}

function mtr(){
    if (file_exists("result/mtr")){
    }
    else{
        @system("mkdir result/mtr");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/mtr/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ mtr ]\n\n".$result."	";
	$open = fopen("result/mtr/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/mtr/$target.txt\n\n";
}

function nmap(){
    if (file_exists("result/nmap")){
    }
    else{
        @system("mkdir result/nmap");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/nmap/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ nmap ]\n\n".$result."	";
	$open = fopen("result/nmap/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
    print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/nmap/$target.txt\n\n";
}

function pagelink(){
    if (file_exists("result/links")){
    }
    else{
        @system("mkdir result/links");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/pagelinks/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ links ]\n\n".$result."	";
	$open = fopen("result/links/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/links/$target.txt\n\n";
}

function zonetransfer(){
    if (file_exists("result/zonetransfer")){
    }
    else{
        @system("mkdir result/zonetransfer");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/zonetransfer/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ zonetransfer ]\n\n".$result."	";
	$open = fopen("result/zonetransfer/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/zonetransfer/$target.txt\n\n";
}

function sharedns(){
    if (file_exists("result/sharedns")){
    }
    else{
        @system("mkdir result/sharedns");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/findshareddns/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ sharedns ]\n\n".$result."	";
	$open = fopen("result/sharedns/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/sharedns/$target.txt\n\n";
}

function subnet(){
    if (file_exists("result/subnet")){
    }
    else{
        @system("mkdir result/subnet");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/subnetcalc/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ subnet ]\n\n".$result."	";
	$open = fopen("result/subnet/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/subnet/$target.txt\n\n";
}

function autonomous(){
    if (file_exists("result/autonomous")){
    }
    else{
        @system("mkdir result/autonomous");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/aslookup/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ autonomous ]\n\n".$result."	";
	$open = fopen("result/autonomous/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/autonomous/$target.txt\n\n";
}

function geoip(){
    if (file_exists("result/geoip")){
    }
    else{
        @system("mkdir result/geoip");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/geoip/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ geoip ]\n\n".$result."	";
	$open = fopen("result/geoip/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/geoip/$target.txt\n\n";
}

function reversedns(){
    if (file_exists("result/reversedns")){
    }
    else{
        @system("mkdir result/reversedns");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/reversedns/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ reversedns ]\n\n".$result."	";
	$open = fopen("result/reversedns/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/reversedns/$target.txt\n\n";
}

function reverseip(){
    if (file_exists("result/reverseip")){
    }
    else{
        @system("mkdir result/reverseip");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/reverseiplookup/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ reverseip ]\n\n".$result."	";
	$open = fopen("result/reverseip/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/reverseip/$target.txt\n\n";
}

function testping(){
    if (file_exists("result/testping")){
    }
    else{
        @system("mkdir result/testping");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/nping/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ testping ]\n\n".$result."	";
	$open = fopen("result/testping/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/testping/$target.txt\n\n";
}

function whois(){
    if (file_exists("result/whois")){
    }
    else{
        @system("mkdir result/whois");
    }
    index();
    include 'config.php';
    print "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
    print "\n";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/whois/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ whois ]\n\n".$result."	";
	$open = fopen("result/whois/$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	print "\n$cyan [$yellow *$cyan ]$white Result reported to result/whois/$target.txt\n\n";
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
    echo "\n$cyan [$yellow *$cyan ]$white Result OK reported to result/dirscan-$target.txt\n\n $white ";
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
    echo "\n$cyan [$yellow *$cyan ]$white Result OK reported to result/adlog-$target.txt\n\n $white ";
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
    echo "\n$cyan [$yellow *$cyan ]$white Result OK reported to result/shellscan-$target.txt\n\n $white ";
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
    echo "\n$cyan [$yellow *$cyan ]$white Result OK reported to result/subdo-$target.txt\n\n $white ";
}

index();
menu();

?>
