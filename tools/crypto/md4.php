<?php

function enmd4(){
    include 'main/config.php';
    echo "$cyan Input Kata$red >$white ";
    $base = trim(fgets(STDIN));
    echo "$cyan Encode Md4$red :$white ",crypt('md4',$base);
    print "\n\n";
}

?>