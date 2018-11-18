<?php

function encode(){
    include 'main/config.php';
    print "$okegreen\n█████████████████$white    Encode Tools$okegreen    █████████████████\n\n";
    print "$cyan 01$red :$white Encode Md4\n";
    print "$cyan 02$red :$white Encode Md5\n";
    print "$cyan 03$red :$white Encode Sha1\n";
    print "$cyan 04$red :$white Encode Base64\n";
    print "$cyan 05$red :$white Encode All Type\n\n";
    echo "$okegreen\n ($cyan Hax0r$okegreen )$white- on -$okegreen($white ~/Menu/Crypto/Encode$okegreen ) \n$red >$white ";
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
    elseif ($menu == 'cd ..'){
        endecodemenu();
    }
    elseif ($menu == 'cd' OR $menu == 'home'){
        index();
        main();
    }
}

?>