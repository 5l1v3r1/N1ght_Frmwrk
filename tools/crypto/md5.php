<?php

function enmd5(){
    include 'main/config.php';
    echo "$cyan Input Kata$red >$white ";
    $base = trim(fgets(STDIN,256));
    echo "$cyan Encode Md5$red :$white ",md5($base);
    print "\n\n";
}

?>