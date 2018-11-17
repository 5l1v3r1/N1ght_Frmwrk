<?php

include 'main/config.php';
include 'main/main.php';
@system("mkdir result");
indexold();
function brutemenu(){
    include 'main/config.php';
    include 'tools/brute/logfin.php';
    include 'tools/brute/dirscan.php';
    include 'tools/brute/shellscan.php';
    include 'tools/brute/subdoscan.php';
    brute();
    echo "$okegreen\n ($cyan Hax0r$okegreen )$white- on -$okegreen($white ~/Menu/Brute$okegreen ) \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 1 OR $input == 01){
        logfin($input);
    }
    elseif ($input == 2 OR $input == 02){
        dirscan($input);
    }
    elseif ($input == 3 OR $input == 03){
        shellscan($input);
    }
    elseif ($input == 4 OR $input == 04){
        subdoscan($input);
    }
    elseif ($input == 'cd ..' OR $input == 'cd' OR $input == 'home'){
        index();
        main();
    }
}
function scanmenu(){
    include 'main/config.php';
    include 'tools/scan/whois.php';
    include 'tools/scan/dnslookup.php';
    include 'tools/scan/hostsrc.php';
    include 'tools/scan/nmap.php';
    scan();
    echo "$okegreen\n ($cyan Hax0r$okegreen )$white- on -$okegreen($white ~/Menu/Scan$okegreen ) \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 1 OR $input == 01){
        whois($input);
    }
    elseif ($input == 2 OR $input == 02){
        dnslookup($input);
    }
    elseif ($input == 3 OR $input == 03){
        host($input);
    }
    elseif ($input == 4 OR $input == 04){
        nmap($input);
    }
    elseif ($input == 'cd ..' OR $input == 'cd' OR $input == 'home'){
        index();
        main();
    }
}
function endecodemenu(){
    include 'main/config.php';
    include 'tools/crypto/encode.php';
    endecode();
    echo "$okegreen\n ($cyan Hax0r$okegreen )$white- on -$okegreen($white ~/Menu/Crypto$okegreen ) \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 1 OR $input == 01){
        encode($input);
    }
    elseif ($input == 'cd ..' OR $input == 'cd' OR $input == 'home'){
        index();
        main();
    }
}
function generatormenu(){
    include 'main/config.php';
    include 'tools/generator/customcode.php';
    generator();
    echo "$okegreen\n ($cyan Hax0r$okegreen )$white- on -$okegreen($white ~/Menu/Generator$okegreen ) \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 1 OR $input == 01){
        custgen($input);
    }
    elseif ($input == 'cd ..' OR $input == 'cd' OR $input == 'home'){
        index();
        main();
    }
}
function main(){
include 'main/config.php';
echo "$okegreen\n ($cyan Hax0r$okegreen )$white- on -$okegreen($white ~/Menu$okegreen ) \n$red >$white ";
$input = trim(fgets(STDIN));
if ($input == 1 OR $input == 01){
    brutemenu();
}
elseif ($input == 2 OR $input == 02){
    scanmenu();
}
elseif ($input == 3 OR $input == 03){
    endecodemenu();
}
elseif ($input == 4 OR $input == 04){
    generatormenu();
}
elseif ($input == 'h' OR $input == '0h'){
    help($input);
}
elseif ($input == 'a' OR $input == '0a'){
    about($input);
}
}
main();
?>
