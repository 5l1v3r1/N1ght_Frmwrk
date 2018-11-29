<?php

include 'main/config.php';
include 'main/main.php';
@system("mkdir result");
index();
function main(){
    include 'main/config.php';
    echo "$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == '-b' OR $input == 'brute'){
        brute();
        main();
    }
    elseif ($input == '-s' OR $input == 'scan'){
        scan();
        main();
    }
    elseif ($input == '-c' OR $input == 'crypto'){
        endecode();
        main();
    }
    elseif ($input == '-i' OR $input == 'iptool'){
        iptools();
        main();
    }
    elseif ($input == '-g' OR $input == 'gen'){
        generator();
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
    elseif ($input == 'custgen'){
        custgen();
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
    else{
        echo"$white Command $input Not Found\n\n";
        main();
    }
}
main();
?>
