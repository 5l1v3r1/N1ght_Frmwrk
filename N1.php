<?php

include 'main/config.php';
include 'main/main.php';
@system("mkdir result");
index();
function scanmenu(){
    include 'main/config.php';
    include 'tools/scan/logfin.php';
    include 'tools/scan/dirscan.php';
    include 'tools/scan/shellscan.php';
    include 'tools/scan/subdoscan.php';
    scan();
    echo "$okegreen\n ($cyan Hax0r$okegreen )$white- on -$okegreen($white ~/Menu/Scan$okegreen ) \n$red >$white ";
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
function ipmenu(){
    include 'main/config.php';
    include 'tools/iptools/mtr.php';
    include 'tools/iptools/testping.php';
    include 'tools/iptools/dnslookup.php';
    include 'tools/iptools/reversedns.php';
    include 'tools/iptools/whois.php';
    include 'tools/iptools/hostsrc.php';
    include 'tools/iptools/reverseip.php';
    include 'tools/iptools/headers.php';
    include 'tools/iptools/page.php';
    iptools();
    echo "$okegreen\n ($cyan Hax0r$okegreen )$white- on -$okegreen($white ~/Menu/IPTools$okegreen ) \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 1 OR $input == 01){
        mtr($input);
    }
    elseif ($input == 2 OR $input == 02){
        testping($input);
    }
    elseif ($input == 3 OR $input == 03){
        dnslookup($input);
    }
    elseif ($input == 4 OR $input == 04){
        reversedns($input);
    }
    elseif ($input == 5 OR $input == 05){
        whois($input);
    }
    elseif ($input == 6 OR $input == 06){
        host($input);
    }
    elseif ($input == 7 OR $input == 07){
        reverseip($input);
    }
    elseif ($input == 8 OR $input == '08'){
        httphead($input);
    }
    elseif ($input == 9 OR $input == '09'){
        pagelink($input);
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
    brute();
}
elseif ($input == 2 OR $input == 02){
    scanmenu();
}
elseif ($input == 3 OR $input == 03){
    endecodemenu();
}
elseif ($input == 4 OR $input == 04){
    ipmenu();
}
elseif ($input == 5 OR $input == 05){
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
