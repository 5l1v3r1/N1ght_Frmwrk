<?php

function ensha1(){
    include 'main/config.php';
    echo "$cyan Input Kata$red >$white ";
    $base = trim(fgets(STDIN));
    echo "$cyan Encode Sha1$red :$white ",sha1($base);
    print "\n\n";
}

?>