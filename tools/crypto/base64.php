<?php

function enbase64(){
    include 'main/config.php';
    echo "$cyan Input Kata$red >$white ";
    $base = trim(fgets(STDIN));
    echo "$cyan Encode Md5$red :$white ",base64_encode($base);
    print "\n\n";
}

?>