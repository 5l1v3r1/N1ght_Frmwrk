<?php

include 'main/config.php';
include 'main/main.php';
@system("mkdir result");
index();
function main(){
    include 'main/config.php';
    echo "$red >$white ";
    $input = trim(fgets(STDIN));
    $open = fopen(".cmd_history", 'a');
    fwrite($open, $input. "\n");
    fclose($open);
    if ($input == '-m' OR $input == 'menu'){
        menu();
        main();
    }
    elseif ($input == '-c' OR $input == 'clear'){
        index();
        main();
    }
    elseif ($input == '-b' OR $input == 'brute'){
        brute();
        main();
    }
    elseif ($input == '-sc' OR $input == 'scan'){
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
    elseif ($input == 'exit' or $input == '-e'){
        echo"$red Exitting now$white ";
        exit();
    }
    elseif ($input == 'quit' OR $input == 'q'){
        echo"$white Command $input Not Found\n";
        echo"$white Type ($cyan exit$white ) to Exit Program\n\n";
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
