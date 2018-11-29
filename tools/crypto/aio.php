<?php

function enall(){
    include 'main/config.php';
    echo "$cyan Input Kata$red >$white ";
    $base = trim(fgets(STDIN));
    print "$okegreen █$white Length$okegreen █████$white Type$okegreen █████████████$white Encode$okegreen █████████████$white\n";
    foreach (hash_algos() as $v){
        $r = hash($v, $base, false);
        printf("    %3d         %-12s       %s\n\n", strlen($r), $v, $r);
    }
    print "\n\n";
}

?>