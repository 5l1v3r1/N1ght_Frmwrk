<?php

include 'config.php';
@system("mkdir result");

function betaprogram(){
    include 'config.php';
    print "\n";
    print "$yellow COMINGSOON!! \n\n";
}

// Banner

function help(){
    include 'config.php';
    @system("clear");
    print "\n";
    print "$red       __   __ \n";
    print "$red      /  \./  \/\_ \n";
    print "$red   __{^\_ _}_   )  }$okegreen/^\ $purple   N1ght.Frmwrk$cyan Project      \n";
    print "$red  /  /\_/^\._}_/  /$okegreen/  / \n";
    print "$red (  (__{(@)}\__}./$okegreen/_/__A____A_____A________A_____A___\n";
    print "$red  \__/{/(_)\_}  )\\$okegreen\\ \\\---v-----V-----V-v----Y----v----\n";
    print "$red   (   (__)_)_/  )\ $okegreen\> \n";
    print "$red    \__/     \__/\/$okegreen\/$white            How To Use\n";
    print "$red       \__,--' \n\n";
    print "$white This framework uses the command to run several tools in it\n\n";
    print "$white Commands that can be used, including :\n\n";
    sleep(1);
    print "$okegreen\n████████████████████$white     Basics$okegreen     ████████████████████\n\n";
    print "$cyan bash$white     OR$cyan   -b$red  :$white Run Your Bash\n";
    print "$cyan clear$white    OR$cyan   -c$red  :$white Clear Your Terminal\n";
    print "$cyan install$white  OR$cyan   -i$red  :$white Install This Framework\n";
    print "$cyan about$white    OR$cyan   -a$red  :$white Show About This Framework\n";
    print "$cyan help$white     OR$cyan   -h$red  :$white Show Help\n";
    print "$cyan menu$white     OR$cyan   -m$red  :$white Show Menu\n";
    print "$cyan exit$white     OR$cyan   -e$red  :$white Exit Program\n\n";
    sleep(1);
    menu();sleep(1);
    brute();sleep(1);
    scan();sleep(1);
    endecode();sleep(1);
    iptools();sleep(1);
    generator();
    print "\n";
}

function about(){
    include 'config.php';
    @system("clear");
    print "\n";
    print "$red       __   __ \n";
    print "$red      /  \./  \/\_ \n";
    print "$red   __{^\_ _}_   )  }$okegreen/^\ $purple   N1ght.Frmwrk$cyan Project      \n";
    print "$red  /  /\_/^\._}_/  /$okegreen/  / \n";
    print "$red (  (__{(@)}\__}./$okegreen/_/__A____A_____A________A_____A___\n";
    print "$red  \__/{/(_)\_}  )\\$okegreen\\ \\\---v-----V-----V-v----Y----v----\n";
    print "$red   (   (__)_)_/  )\ $okegreen\> \n";
    print "$red    \__/     \__/\/$okegreen\/$white      About Me and My Tool\n";
    print "$red       \__,--' \n\n";
    print "$cyan Name$red       :$white Rakka Pratama Putra\n";
    print "$cyan Birth$red      :$white 16 August 2003\n";
    print "$cyan Country$red    :$white ID\n";
    print "$cyan Fav. Color$red :$white White\n\n";
    print "$okegreen ═══════════════════════$white About$okegreen ══════════════════════\n\n";
    print "$white I made this framework initially just for fun\n";
    print "$white but finally I developed this framework by adding\n";
    print "$white some tools for penetration for hackers out there.\n";
    print "$white Maybe now I can only add a few tools in this framework,\n";
    print "$white and I will continue to update them\n\n";
}

function index(){
    include 'config.php';
    @system("clear");
    print "\n";
    print "$okegreen      \      ,  $red  _,  _,___,____, __, _,____, \n";
    print "$okegreen      l\   ,/   $red  (-|\ |(-/|(-/ _,(-|__|(-|    \n";
    print "$okegreen ._   `|] /j    $red   _| \|,'_|,_\__| _|  |,_|,  $purple V.6.5\n";
    print "$okegreen  `\\, \|f7 _,/'$red  (      (  (     (     (      \n";
    print "$okegreen    \"`=,k/,x-' $yellow    ____,____, __, _,_   _,____, __, , \n";
    print "$okegreen     ,z/fY-=-   $yellow (-|_,(-|__)(-|\/|(-|  |(-|__)( |_/  \n";
    print "$okegreen   -'\" .y \    $yellow   _|   _|  \,_| _|,_|/\|,_|  \,_| \, \n";
    print "$okegreen       '   \    $yellow (    (     (     (     (     (      \n";
    print "$okegreen            \________________________________________ \n\n";
}

function install(){
    include 'config.php';
    $user = trim(shell_exec('whoami'));
    print "\n";
    if ($user == 'root'){
        sleep(1);
        @system("rm -rf /opt/N1ght/Framework");
        @system("rm -rf /usr/bin/nconsole");
        print "$white [$yellow *$white ]$okegreen Making Special Directory ";print ".";print ".";print ".";
        @system("mkdir /opt/N1ght");print "$cyan [$white DONE$cyan ]";print "\n";
        sleep(1);
        print "$white [$yellow *$white ]$okegreen Making N1ght_Frmwrk Directory ";print ".";print ".";print ".";
        @system("mkdir /opt/N1ght/Framework");print "$cyan [$white DONE$cyan ]";print "\n";
        sleep(1);
        print "$white [$yellow *$white ]$okegreen Copying Script to /opt/N1ght/Framework/ ";print ".";print ".";print ".";
        @system("cp -r install/nconsole.php /opt/N1ght/Framework/");
        @system("cp -r install/config.php /opt/N1ght/Framework/");print "$cyan [$white DONE$cyan ]";print "\n";
        sleep(1);
        print "$white [$yellow *$white ]$okegreen Copying Command to /usr/bin/ ";print ".";print ".";print ".";
        @system("cp install/bin/nconsole /usr/bin/");print "$cyan [$white DONE$cyan ]";print "\n";
        sleep(1);
        print "$white [$yellow *$white ]$okegreen Setting Permission for /usr/bin/nconsole ";print ".";print ".";print ".";
        @system("chmod +x /usr/bin/nconsole");print "$cyan [$white DONE$cyan ]";print "\n";
        sleep(2);
        print "\n\n";
        print "$cyan [$white DONE$cyan ]";
        sleep(1);
        print "\n";
        print "$okegreen You can using this framework by typing$white ($cyan nconsole$white )$okegreen command";
        print "\n\n";
    }
    else{
        print "$white [$red !$white ]$yellow Maybe you need to enter your$red ROOT$yellow passwd ";
        sleep(1);
        @system("sudo rm -rf /opt/N1ght/Framework");
        @system("sudo rm -rf /usr/bin/nconsole");
        print "$white [$yellow *$white ]$okegreen Making Special Directory ";print ".";print ".";print ".";
        @system("sudo mkdir /opt/N1ght");print "$cyan [$white DONE$cyan ]";print "\n";
        sleep(1);
        print "$white [$yellow *$white ]$okegreen Making N1ght_Frmwrk Directory ";print ".";print ".";print ".";
        @system("sudo mkdir /opt/N1ght/Framework");print "$cyan [$white DONE$cyan ]";print "\n";
        sleep(1);
        print "$white [$yellow *$white ]$okegreen Copying Script to /opt/N1ght/Framework/ ";print ".";print ".";print ".";
        @system("sudo cp -r install/nconsole.php /opt/N1ght/Framework/");
        @system("sudo cp -r install/config.php /opt/N1ght/Framework/");print "$cyan [$white DONE$cyan ]";print "\n";
        sleep(1);
        print "$white [$yellow *$white ]$okegreen Copying Command to /usr/bin/ ";print ".";print ".";print ".";
        @system("sudo cp install/bin/nconsole /usr/bin/");print "$cyan [$white DONE$cyan ]";print "\n";
        sleep(1);
        print "$white [$yellow *$white ]$okegreen Setting Permission for /usr/bin/nconsole ";print ".";print ".";print ".";
        @system("sudo chmod +x /usr/bin/nconsole");print "$cyan [$white DONE$cyan ]";print "\n";
        sleep(2);
        print "\n\n";
        print "$cyan [$white DONE$cyan ]";
        sleep(1);
        print "\n";
        print "$okegreen You can using this framework by typing$white ($cyan nconsole$white )$okegreen command";
        print "\n\n";
    }
}

function clear_history(){
    include 'config.php';
    print "\n";
    print "$white [$yellow *$white ]$okegreen Removing .cmd_history ";print ".";print ".";print ".";
    @system("rm .cmd_history");
    sleep(2);
    print "$cyan [$white DONE$cyan ]";
    sleep(1);
    print "\n\n";
}

// Menu

function menu(){
    include 'config.php';
    print "$okegreen\n████████████████████$white       Menu$okegreen      ████████████████████\n\n";
    print "$cyan iptool$white   OR$cyan   -ip$red :$white IP Tools\n";
    print "$cyan brute$white    OR$cyan   -br$red :$white BruteForce\n";
    print "$cyan scan$white     OR$cyan   -sc$red :$white Scanner\n";
    print "$cyan crypto$white   OR$cyan   -cr$red :$white Encode & Decode\n";
    print "$cyan gen$white      OR$cyan   -gn$red :$white Generator\n";
    print "$cyan spam$white     OR$cyan   -sp$red :$white Spammer\n\n";
}

function brute(){
    include 'config.php';
    print "$okegreen\n████████████████████$white    BruteForce$okegreen   ████████████████████\n\n";
    print "$yellow COMINGSOON!! \n\n";
}

function scan(){
    include 'config.php';
    print "$okegreen\n████████████████████$white     Scanner$okegreen     ████████████████████\n\n";
    print "$cyan adlog$red       :$white Admin Login Finder\n";
    print "$cyan dirscan$red     :$white Directory Scanner\n";
    print "$cyan shellscan$red   :$white Shell Finder\n";
    print "$cyan subscan$red     :$white Subdomain Scanner\n\n";
}

function endecode(){
    include 'config.php';
    print "$okegreen\n████████████████████$white Encode & Decode$okegreen ████████████████████\n\n";
    print "$cyan encode$red      :$white Encode\n\n";
}

function iptools(){
    include 'config.php';
    print "$okegreen\n████████████████████$white    IP  Tools$okegreen    ████████████████████\n\n";
    print "$cyan mtr$red         :$white MTR Traceroute\n";
    print "$cyan nping$red       :$white Test Ping\n";
    print "$cyan dnslookup$red   :$white DNS Lookup\n";
    print "$cyan revdns$red      :$white Reverse DNS\n";
    print "$cyan whois$red       :$white Whois\n";
    print "$cyan hostsrc$red     :$white Host Search\n";
    print "$cyan revip$red       :$white Reverse IP\n";
    print "$cyan httphead$red    :$white HTTP Headers\n";
    print "$cyan pagelink$red    :$white Page Links\n";
    print "$cyan nmap$red        :$white Nmap Port Scan\n\n";
}

function generator(){
    include 'config.php';
    print "$okegreen\n████████████████████$white    Generator$okegreen    ████████████████████\n\n";
    print "$cyan hma$red         :$white HMA License key Generator\n";
    print "$cyan custgen$red     :$white Custom Code Generator\n\n";
}

function spam(){
    include 'config.php';
    print "$okegreen\n████████████████████$white     Spammer$okegreen     ████████████████████\n\n";
    print "$cyan smsphd$red      :$white SMS Pizza Hut Delivery\n";
    print "$cyan smstp$red       :$white SMS Tokopedia\n";
    print "$cyan calltp$red      :$white Call Tokopedia\n";
    print "$cyan smsjd$red       :$white SMS JD.ID\n";
    print "$cyan smsts$red       :$white SMS Telkomsel\n\n";
}

// Encode Tools

function encode(){
    include 'config.php';
    print "$okegreen\n█████████████████$white    Encode Tools$okegreen    █████████████████\n\n";
    print "$cyan enmd4$red       :$white Encode Md4\n";
    print "$cyan enmd5$red       :$white Encode Md5\n";
    print "$cyan ensha1$red      :$white Encode Sha1\n";
    print "$cyan enbase64$red    :$white Encode Base64\n";
    print "$cyan enall$red       :$white Encode All Type\n\n";
    echo "$red >$white ";
    $menu = trim(fgets(STDIN));
    if ($menu == 'enmd4'){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN));
        echo "$cyan Encode Md4$red :$white ",crypt('md4',$base);
    }
    elseif ($menu == 'enmd5'){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN,256));
        echo "$cyan Encode Md5$red :$white ",md5($base);
    }
    elseif ($menu == 'ensha1'){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN));
        echo "$cyan Encode Sha1$red :$white ",sha1($base);
    }
    elseif ($menu == 'enbase64'){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN));
        echo "$cyan Encode Md5$red :$white ",base64_encode($base);
    }
    elseif ($menu == 'enall'){
        echo "$cyan Input Kata$red >$white ";
        $base = trim(fgets(STDIN));
        print "$okegreen █$white Length$okegreen █████$white Type$okegreen █████████████$white Encode$okegreen █████████████$white\n";
        foreach (hash_algos() as $v){
            $r = hash($v, $base, false);
            printf("    %3d         %-12s       %s\n\n", strlen($r), $v, $r);
        }
    }
    print "\n\n";
    main();
}

function enall(){
    include 'config.php';
    echo "$cyan Input Kata$red >$white ";
    $base = trim(fgets(STDIN));
    print "$okegreen █$white Length$okegreen █████$white Type$okegreen █████████████$white Encode$okegreen █████████████$white\n";
    foreach (hash_algos() as $v){
        $r = hash($v, $base, false);
        printf("    %3d         %-12s       %s\n\n", strlen($r), $v, $r);
    }
    print "\n\n";
}

function enbase64(){
    include 'config.php';
    echo "$cyan Input Kata$red >$white ";
    $base = trim(fgets(STDIN));
    echo "$cyan Encode Md5$red :$white ",base64_encode($base);
    print "\n\n";
}

function enmd4(){
    include 'config.php';
    echo "$cyan Input Kata$red >$white ";
    $base = trim(fgets(STDIN));
    echo "$cyan Encode Md4$red :$white ",crypt('md4',$base);
    print "\n\n";
}

function enmd5(){
    include 'config.php';
    echo "$cyan Input Kata$red >$white ";
    $base = trim(fgets(STDIN,256));
    echo "$cyan Encode Md5$red :$white ",md5($base);
    print "\n\n";
}

function ensha1(){
    include 'config.php';
    echo "$cyan Input Kata$red >$white ";
    $base = trim(fgets(STDIN));
    echo "$cyan Encode Sha1$red :$white ",sha1($base);
    print "\n\n";
}

// Generator Tools

function custgen(){
    include 'config.php';
    echo "$cyan Want to Input Base(y/n)?$red >$white ";
    $menu = trim(fgets(STDIN));
    if ($menu == 'y' OR $menu == 'Y'){
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
    elseif ($menu == 'n' OR $menu == 'N'){
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

// Command List

index();
function main(){
    include 'config.php';
    $user = trim(shell_exec('whoami'));
    $host = trim(shell_exec('hostname'));
    $date = date('H:i:s');
    echo "$okegreen [$cyan $user$red.$cyan$host$okegreen ]$white - on -$okegreen [$white $date$okegreen ] \n$red >$white ";
    $input = trim(fgets(STDIN));
    $open = fopen(".cmd_history", 'a');
    fwrite($open, $input. "\n");
    fclose($open);
    if ($input == '-ch' OR $input == 'clear history'){
        clear_history();
        main();
    }
    elseif ($input == '-m' OR $input == 'menu'){
        menu();
        main();
    }
    elseif ($input == '-c' OR $input == 'clear'){
        index();
        main();
    }
    elseif ($input == '-br' OR $input == 'brute'){
        brute();
        main();
    }
    elseif ($input == '-sc' OR $input == 'scan'){
        scan();
        main();
    }
    elseif ($input == '-cr' OR $input == 'crypto'){
        endecode();
        main();
    }
    elseif ($input == '-ip' OR $input == 'iptool'){
        iptools();
        main();
    }
    elseif ($input == '-gn' OR $input == 'gen'){
        generator();
        main();
    }
    elseif ($input == '-sp' OR $input == 'spam'){
        spam();
        main();
    }
    elseif ($input == '-h' OR $input == 'help'){
        help();
        main();
    }
    elseif ($input == '-a' OR $input == 'about'){
        about();
        main();
    }
    elseif ($input == 'exit' OR $input == '-e'){
        echo"$red Exitting now$white ";
        echo"\n";
        exit();
    }
    elseif ($input == 'quit' OR $input == 'q'){
        echo"$white Command $input Not Found\n";
        echo"$white Type ($cyan exit$white ) to Exit Program\n\n";
        main();
    }
    elseif ($input == 'bash' OR $input == '-b'){
        @system("bash");
        main();
    }
    elseif ($input == 'install'){
        install();
        main();
    }
    elseif ($input == 'adlog'){
        logfin();
        main();
    }
    elseif ($input == 'dirscan'){
        dirscan();
        main();
    }
    elseif ($input == 'shellscan'){
        shellscan();
        main();
    }
    elseif ($input == 'subscan'){
        subdoscan();
        main();
    }
    elseif ($input == 'encode'){
        encode();
        main();
    }
    elseif ($input == 'mtr'){
        mtr();
        main();
    }
    elseif ($input == 'nping'){
        testping();
        main();
    }
    elseif ($input == 'dnslookup'){
        dnslookup();
        main();
    }
    elseif ($input == 'revdns'){
        reversedns();
        main();
    }
    elseif ($input == 'whois'){
        whois();
        main();
    }
    elseif ($input == 'hostsrc'){
        host();
        main();
    }
    elseif ($input == 'revip'){
        reverseip();
        main();
    }
    elseif ($input == 'httphead'){
        httphead();
        main();
    }
    elseif ($input == 'pagelink'){
        pagelink();
        main();
    }
    elseif ($input == 'nmap'){
        nmap();
        main();
    }
    elseif ($input == 'ping'){
        ping();
        main();
    }
    elseif ($input == 'custgen'){
        custgen();
        main();
    }
    elseif ($input == 'hma'){
        hma();
        main();
    }
    elseif ($input == 'enmd4'){
        enmd4();
        main();
    }
    elseif ($input == 'enmd5'){
        enmd5();
        main();
    }
    elseif ($input == 'ensha1'){
        ensha1();
        main();
    }
    elseif ($input == 'enbase64'){
        enbase64();
        main();
    }
    elseif ($input == 'enall'){
        enall();
        main();
    }
    elseif ($input == 'smsphd'){
        smsphd();
        main();
    }
    elseif ($input == 'smstp'){
        betaprogram();
        main();
    }
    elseif ($input == 'calltp'){
        betaprogram();
        main();
    }
    elseif ($input == 'smsjd'){
        smsjdid();
        main();
    }
    elseif ($input == 'smsts'){
        smstelkom();
        main();
    }
    else{
        echo"$white Command $input Not Found\n";
        echo"$white Type ($cyan help$white ) to Show Help\n\n";
        main();
    }
}

main();

?>
