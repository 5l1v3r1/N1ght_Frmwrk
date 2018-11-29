<?php

function encode(){
    include 'main/config.php';
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

?>
