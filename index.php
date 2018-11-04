<?php

include 'config.php';
/////////////////////////////////////////////////     Help  Menu     /////////////////////////////////////////////////
function help(){
    print "";
}
/////////////////////////////////////////////////     Help  Menu     /////////////////////////////////////////////////
/////////////////////////////////////////////////     About Menu     /////////////////////////////////////////////////
function about(){
    print "";
}
/////////////////////////////////////////////////     About Menu     /////////////////////////////////////////////////
/////////////////////////////////////////////////     Main  Menu     /////////////////////////////////////////////////
function index(){
    include 'config.php';
    print "$red                                                     \n";
    print "$yellow========================================================\n";
    print "$red        .---.        .-----------                      \n";
    print "$red       /     \  __  /    ------                        \n";
    print "$red      / /     \(  )/    -----                          \n";
    print "$red     //////   ' \/ `   ---    $white    N1ght.Frmwrk$red V.1.5\n";
    print "$red    //// / // :    : ---      $cyan    By$white N1ght.Hax0r    \n";
    print "$red   // /   /  /`    '--                                 \n";
    print "$red  //          //..\\\                                   \n";
    print "$yellow============$red UU$yellow ==$red UU$yellow ==================================\n";
    print "$red             '//||\\\`                                  \n";
    print "$red               ''``                                     \n";
    print "$okegreen\n████████████████████$white  N1ght_Frmwrk$okegreen  ████████████████████\n\n";
    print "$cyan 01$red :$white BruteForce\n";
    print "$cyan 02$red :$white Scanner\n";
    print "$cyan 03$red :$white Encode & Decode\n";
    print "$cyan 04$red :$white Generator\n\n";
    print "$cyan 0h$red :$white Show help\n";
    print "$cyan 0a$red :$white Show about this tool\n";
}
/////////////////////////////////////////////////     Main  Menu     /////////////////////////////////////////////////
/////////////////////////////////////////////////     Brute Menu     /////////////////////////////////////////////////
function brute(){
    include 'config.php';
    print "$okegreen\n████████████████████$white   BruteForce$okegreen   ████████████████████\n\n";
    print "$cyan 01$red :$white Admin Login Finder\n";
    print "$cyan 02$red :$white Dirscanner\n";
    print "$cyan 03$red :$white Shell Scanner\n";
    print "$cyan 04$red :$white Subdomain Scanner\n";
}
/////////////////////////////////////////////////     Brute Menu     /////////////////////////////////////////////////
/////////////////////////////////////////////////     Scan  Menu     /////////////////////////////////////////////////
function scan(){
    include 'config.php';
    print "$okegreen\n████████████████████$white    Scanner$okegreen     ████████████████████\n\n";
    print "$cyan 01$red :$white Whois\n";
    print "$cyan 02$red :$white DNSLookup\n";
    print "$cyan 03$red :$white Host Search\n";
    print "$cyan 04$red :$white Nmap Scan\n";
}
/////////////////////////////////////////////////     Scan  Menu     /////////////////////////////////////////////////
/////////////////////////////////////////////////    Encode  Menu    /////////////////////////////////////////////////
function endecode(){
    include 'config.php';
    print "$okegreen\n████████████████████$white Encode & Decode$okegreen ████████████████████\n\n";
    print "$cyan 01$red :$white Encode\n";
}
/////////////////////////////////////////////////    Decode  Menu    /////////////////////////////////////////////////
/////////////////////////////////////////////////   Generator Menu   /////////////////////////////////////////////////
function generator(){
    include 'config.php';
    print "$okegreen\n████████████████████$white    Generator$okegreen    ████████████████████\n\n";
    print "$cyan 01$red :$white Bukalapak Voucher Generator\n";
    print "$cyan 02$red :$white Tokopedia Voucher Generator\n";
    print "$cyan 03$red :$white Gojek Voucher Generator\n";
    print "$cyan 04$red :$white Google Play Card Generator\n";
    print "$cyan 05$red :$white Password Generator\n";
    print "$cyan 00$red :$white Custom Generator\n";
}
/////////////////////////////////////////////////   Generator Menu   /////////////////////////////////////////////////

/////////////////////////////////////////////////    Brute  Tools    /////////////////////////////////////////////////
///////////////////////////////////////////////// Admin Login Finder /////////////////////////////////////////////////
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
///////////////////////////////////////////////// Admin Login Finder /////////////////////////////////////////////////
/////////////////////////////////////////////////     Dirscanner     /////////////////////////////////////////////////
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
    foreach($lists as $directory){
            $log = "$targetnya/$directory";
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
/////////////////////////////////////////////////     Dirscanner     /////////////////////////////////////////////////
/////////////////////////////////////////////////   Shell  scanner   /////////////////////////////////////////////////
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
/////////////////////////////////////////////////   Shell  scanner   /////////////////////////////////////////////////
/////////////////////////////////////////////////   Subdo  scanner   /////////////////////////////////////////////////
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
/////////////////////////////////////////////////   Subdo  scanner   /////////////////////////////////////////////////
/////////////////////////////////////////////////    Brute  Tools    /////////////////////////////////////////////////

/////////////////////////////////////////////////   Scanner  Tools   /////////////////////////////////////////////////
/////////////////////////////////////////////////       Whois        /////////////////////////////////////////////////
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
	touch($file);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/whois-$target.txt\n\n";
}
/////////////////////////////////////////////////       Whois        /////////////////////////////////////////////////
/////////////////////////////////////////////////     Dnslookup      /////////////////////////////////////////////////
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
	touch($file);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/dnslookup-$target.txt\n\n";
}
/////////////////////////////////////////////////     Dnslookup      /////////////////////////////////////////////////
/////////////////////////////////////////////////    Host Search     /////////////////////////////////////////////////
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
	touch($file);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/host-$target.txt\n\n";
}
/////////////////////////////////////////////////    Host Search     /////////////////////////////////////////////////
/////////////////////////////////////////////////     Nmap Scan      /////////////////////////////////////////////////
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
	touch($file);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/nmap-$target.txt\n\n";
}
/////////////////////////////////////////////////     Nmap Scan      /////////////////////////////////////////////////
/////////////////////////////////////////////////   Scanner  Tools   /////////////////////////////////////////////////

/////////////////////////////////////////////////   Endecode Tools   /////////////////////////////////////////////////
/////////////////////////////////////////////////       Encode       /////////////////////////////////////////////////
function encode(){
    include 'config.php';
    print "$okegreen\n█████████████████$white    Encode Tools$okegreen    █████████████████\n\n";
    print "$cyan 01$red :$white Encode Md4\n";
    print "$cyan 02$red :$white Encode Md5\n";
    print "$cyan 03$red :$white Encode Sha1\n";
    print "$cyan 04$red :$white Encode Base64\n";
    print "$cyan 05$red :$white Encode All Type\n\n";
    echo "$cyan Menu$red >$white ";
    $menu = trim(fgets(STDIN));
    if ($menu == 1 OR $menu == 01){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN));
        echo "$cyan Encode Md4$red :$white ",crypt('md4',$base);
    }
    elseif ($menu == 2 OR $menu == 02){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN,256));
        echo "$cyan Encode Md5$red :$white ",md5($base);
    }
    elseif ($menu == 3 OR $menu == 03){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN));
        echo "$cyan Encode Sha1$red :$white ",sha1($base);
    }
    elseif ($menu == 4 OR $menu == 04){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN));
        echo "$cyan Encode Md5$red :$white ",base64_encode($base);
    }
    elseif ($menu == 5 OR $menu == 05){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN));
        print "$okegreen █$white Length$okegreen █████$white Type$okegreen █████████████$white Encode$okegreen █████████████$white\n";
        foreach (hash_algos() as $v){
            $r = hash($v, $base, false);
            printf("    %3d         %-12s       %s\n\n", strlen($r), $v, $r);
        }
    }
}
/////////////////////////////////////////////////       Encode       /////////////////////////////////////////////////
/////////////////////////////////////////////////   Endecode Tools   /////////////////////////////////////////////////

/////////////////////////////////////////////////  Generator  Tools  /////////////////////////////////////////////////
/////////////////////////////////////////////////  BLVoc  Generator  /////////////////////////////////////////////////
function blvoc(){
    include 'config.php';
    $base100k = "NNAO835";
    $base200k1 = "BLMOII";
    $base200k2 = "BLMOIV";
    print "$okegreen\n█████████████████$white Bukalapak  Voucher$okegreen █████████████████\n\n";
    print "$cyan 01$red :$white Voucher CashBack 100k\n";
    print "$cyan 02$red :$white Voucher CashBack 200k (1)\n";
    print "$cyan 03$red :$white Voucher CashBack 200k (2)\n";
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
    echo "$cyan Menu$red >$white ";
    $menu = trim(fgets(STDIN));
    if ($menu == 1 OR $menu == 01){
        echo "$cyan Jumlah$red >$white ";
        $jumlah = trim(fgets(STDIN));
        for ($i=0; $i < $jumlah; $i++){
            echo $base100k.random(5);
            echo "\n";
        }
    }
    elseif ($menu == 2 OR $menu == 02){
        echo "$cyan Jumlah$red >$white ";
        $jumlah = trim(fgets(STDIN));
        for ($i=0; $i < $jumlah; $i++){
            echo $base200k1.random(4);
            echo "\n";
        }
    }
    elseif ($menu == 3 OR $menu == 03){
        echo "$cyan Jumlah$red >$white ";
        $jumlah = trim(fgets(STDIN));
        for ($i=0; $i < $jumlah; $i++){
            echo $base200k2.random(4);
            echo "\n";
        }
    }
}
/////////////////////////////////////////////////  BLVoc  Generator  /////////////////////////////////////////////////
/////////////////////////////////////////////////  Gojek  Generator  /////////////////////////////////////////////////
function gojekvoc(){
    include 'config.php';
    $basepulsa1 = "GPUX";
    print "$okegreen\n█████████████████$white   Gojek  Voucher$okegreen   █████████████████\n\n";
    print "$cyan 01$red :$white Voucher GO Pulsa 10k\n";
    print "$cyan 02$red :$white Voucher GO Pulsa 15k\n";
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
    echo "$cyan Menu$red >$white ";
    $menu = trim(fgets(STDIN));
    if ($menu == 1 OR $menu == 01){
        echo "$cyan Jumlah$red >$white ";
        $jumlah = trim(fgets(STDIN));
        for ($i=0; $i < $jumlah; $i++){
            echo $basepulsa1.random(8);
            echo "\n";
        }
    }
    elseif ($menu == 2 OR $menu == 02){
        echo "$cyan Jumlah$red >$white ";
        $jumlah = trim(fgets(STDIN));
        for ($i=0; $i < $jumlah; $i++){
            echo $basepulsa1.random(7);
            echo "\n";
        }
    }
}
/////////////////////////////////////////////////  Gojek  Generator  /////////////////////////////////////////////////
/////////////////////////////////////////////////  Custom Generator  /////////////////////////////////////////////////
function custgen(){
    include 'config.php';
    $basepulsa1 = "GPUX";
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
    echo "$cyan Want to Input Base(y/n)?$red >$white ";
    $menu = trim(fgets(STDIN));
    if ($menu == 'y' OR $menu == 'Y'){
        echo "$cyan Base$red >$white ";
        $base = trim(fgets(STDIN));
        echo "$cyan Panjang$red >$white ";
        $total = trim(fgets(STDIN));
        echo "$cyan Jumlah$red >$white ";
        $jumlah = trim(fgets(STDIN));
        for ($i=0; $i < $jumlah; $i++){
            echo $base.random($total-strlen($base));
            echo "\n";
        }
    }
    elseif ($menu == 'n' OR $menu == 'N'){
        echo "$cyan Panjang$red >$white ";
        $total = trim(fgets(STDIN));
        echo "$cyan Jumlah$red >$white ";
        $jumlah = trim(fgets(STDIN));
        for ($i=0; $i < $jumlah; $i++){
            echo random($total);
            echo "\n";
        }
    }
}
/////////////////////////////////////////////////  Custom Generator  /////////////////////////////////////////////////
/////////////////////////////////////////////////  Generator  Tools  /////////////////////////////////////////////////
?>
