<?php
include 'config.php';
function help(){
    include 'config.php';
    @system("clear");
    print "\n";
    print "$red       __   __ \n";
    print "$red      /  \./  \/\_ \n";
    print "$red   __{^\_ _}_   )  }$okegreen/^\ $purple   N1ght.Frmwrk$cyan Project      \n";
    print "$red  /  /\_/^\._}_/  /$okegreen/  / \n";
    print "$red (  (__{(@)}\__}./$okegreen/_/__A____A_____A________A_____A___\n";
    print "$red  \__/{/(_)\_}  )\\$okegreen\\ \\\---v-----V-----V-v----Y----v----\n";
    print "$red   (   (__)_)_/  )\ $okegreen\> \n";
    print "$red    \__/     \__/\/$okegreen\/$white            How To Use\n";
    print "$red       \__,--' \n\n";
    print "$white Just select the number of the tool\n";
    print "$white you want to use, and enjoy\n\n";
}
function about(){
    include 'config.php';
    @system("clear");
    print "\n";
    print "$red       __   __ \n";
    print "$red      /  \./  \/\_ \n";
    print "$red   __{^\_ _}_   )  }$okegreen/^\ $purple   N1ght.Frmwrk$cyan Project      \n";
    print "$red  /  /\_/^\._}_/  /$okegreen/  / \n";
    print "$red (  (__{(@)}\__}./$okegreen/_/__A____A_____A________A_____A___\n";
    print "$red  \__/{/(_)\_}  )\\$okegreen\\ \\\---v-----V-----V-v----Y----v----\n";
    print "$red   (   (__)_)_/  )\ $okegreen\> \n";
    print "$red    \__/     \__/\/$okegreen\/$white      About Me and My Tool\n";
    print "$red       \__,--' \n\n";
    print "$cyan Name$red       :$white Rakka Pratama Putra\n";
    print "$cyan Birth$red      :$white 16 August 2003\n";
    print "$cyan Country$red    :$white ID\n";
    print "$cyan Fav. Color$red :$white White\n\n";
    print "$okegreen =======================$white About$okegreen =======================\n\n";
    print "$white I made this framework initially just for fun\n";
    print "$white but finally I developed this framework by adding\n";
    print "$white some tools for penetration for hackers out there.\n";
    print "$white Maybe now I can only add a few tools in this framework,\n";
    print "$white and I will continue to update them\n\n";
}
function index(){
    include 'config.php';
    @system("clear");
    print "\n";
    print "$red ═══════════════════════════════════════════════════════\n";
    print "$cyan         .---.        .-----------                      \n";
    print "$cyan        /     \  __  /    ------                        \n";
    print "$cyan       / /     \(  )/    ----- $red    N1ght.Frmwrk$yellow V.4.0\n";
    print "$cyan      //////   ' \/ `   ---    $cyan    By$white N1ght.Hax0r    \n";
    print "$cyan     //// / // :    : ---                                \n";
    print "$cyan    // /   /  /`    '--                                  \n";
    print "$cyan   //          //..\\\                                   \n";
    print "$red ════════════$cyan UU$red ══$cyan UU$red ═════════════════════════════════\n";
    print "$cyan              '//||\\\`   $white https://github.com/N1ght420   \n";
    print "$cyan                ''``                                     \n";
    print "$okegreen\n████████████████████$white  N1ght_Frmwrk$okegreen  ████████████████████\n\n";
    print "$cyan 01$red :$white BruteForce\n";
    print "$cyan 02$red :$white Scanner\n";
    print "$cyan 03$red :$white Encode & Decode\n";
    print "$cyan 04$red :$white IP Tools\n";
    print "$cyan 05$red :$white Generator\n\n";
    print "$cyan 0h$red :$white Show help\n";
    print "$cyan 0a$red :$white Show about this tool\n";
}
function brute(){
    include 'config.php';
    print "$okegreen\n████████████████████$white   BruteForce$okegreen   ████████████████████\n\n";
    print "$yellow COMINGSOON!! \n";
}
function scan(){
    include 'config.php';
    print "$okegreen\n████████████████████$white    Scanner$okegreen     ████████████████████\n\n";
    print "$cyan 01$red :$white Admin Login Finder\n";
    print "$cyan 02$red :$white Directory Scanner\n";
    print "$cyan 03$red :$white Shell Finder\n";
    print "$cyan 04$red :$white Subdomain Scanner\n";
}
function endecode(){
    include 'config.php';
    print "$okegreen\n████████████████████$white Encode & Decode$okegreen ████████████████████\n\n";
    print "$cyan 01$red :$white Encode\n";
}
function iptools(){
    include 'config.php';
    print "$okegreen\n████████████████████$white    IP  Tools$okegreen    ████████████████████\n\n";
    print "$cyan 01$red :$white MTR Traceroute\n";
    print "$cyan 02$red :$white Test Ping\n";
    print "$cyan 03$red :$white DNS Lookup\n";
    print "$cyan 04$red :$white Reverse DNS\n";
    print "$cyan 05$red :$white Whois\n";
    print "$cyan 06$red :$white Host Search\n";
    print "$cyan 07$red :$white Reverse IP\n";
    print "$cyan 08$red :$white HTTP Headers\n";
    print "$cyan 09$red :$white Page Links\n";
}
function generator(){
    include 'config.php';
    print "$okegreen\n████████████████████$white    Generator$okegreen    ████████████████████\n\n";
    print "$cyan 01$red :$white Custom Code Generator\n";
}

?>
