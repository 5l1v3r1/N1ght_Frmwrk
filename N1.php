<?php

include 'main/config.php';
include 'main/main.php';

indexold();

/////////////////////////////////////////////////     Brute Menu     /////////////////////////////////////////////////
function brutemenu(){
    include 'main/config.php';
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
/////////////////////////////////////////////////     Brute Menu     /////////////////////////////////////////////////
/////////////////////////////////////////////////    Scanner Menu    /////////////////////////////////////////////////
function scanmenu(){
    include 'main/config.php';
    scan();
    echo "$okegreen\n ($cyan Hax0r$okegreen )$white- on -$okegreen($white ~/Menu/Scanner$okegreen ) \n$red >$white ";
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
/////////////////////////////////////////////////    Scanner Menu    /////////////////////////////////////////////////
/////////////////////////////////////////////////   Endecode  Menu   /////////////////////////////////////////////////
function endecodemenu(){
    include 'main/config.php';
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
/////////////////////////////////////////////////   Endecode  Menu   /////////////////////////////////////////////////
/////////////////////////////////////////////////   Generator Menu   /////////////////////////////////////////////////
function generatormenu(){
    include 'main/config.php';
    generator();
    echo "$okegreen\n ($cyan Hax0r$okegreen )$white- on -$okegreen($white ~/Menu/Generator$okegreen ) \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 1 OR $input == 01){
        bukalapak($input);
    }
    elseif ($input == 2 OR $input == 02){
        gojek($input);
    }
    elseif ($input == 3 OR $input == 03){
        frestea($input);
    }
    elseif ($input == 4 OR $input == 04){
        tokped($input);
    }
    elseif ($input == 0 OR $input == 00){
        custgen($input);
    }
    elseif ($input == 'cd ..' OR $input == 'cd' OR $input == 'home'){
        index();
        main();
    }
}
/////////////////////////////////////////////////   Generator Menu   /////////////////////////////////////////////////
function main(){
include 'main/config.php';
echo "$okegreen\n ($cyan Hax0r$okegreen )$white- on -$okegreen($white ~/Menu$okegreen ) \n$red >$white ";
$input = trim(fgets(STDIN));
/////////////////////////////////////////////////     Brute Menu     /////////////////////////////////////////////////
if ($input == 1 OR $input == 01){
    brutemenu();
}
/////////////////////////////////////////////////     Brute Menu     /////////////////////////////////////////////////
/////////////////////////////////////////////////    Scanner Menu    /////////////////////////////////////////////////
elseif ($input == 2 OR $input == 02){
    scanmenu();
}
/////////////////////////////////////////////////    Scanner Menu    /////////////////////////////////////////////////
/////////////////////////////////////////////////   Endecode  Menu   /////////////////////////////////////////////////
elseif ($input == 3 OR $input == 03){
    endecodemenu();
}
/////////////////////////////////////////////////   Endecode  Menu   /////////////////////////////////////////////////
/////////////////////////////////////////////////   Generator Menu   /////////////////////////////////////////////////
elseif ($input == 4 OR $input == 04){
    generatormenu();
}
/////////////////////////////////////////////////   Generator Menu   /////////////////////////////////////////////////
/////////////////////////////////////////////////    Miscellanous    /////////////////////////////////////////////////
elseif ($input == 'h' OR $input == '0h'){
    help($input);
}
elseif ($input == 'a' OR $input == '0a'){
    about($input);
}
/////////////////////////////////////////////////    Miscellanous    /////////////////////////////////////////////////
}
main();
?>
