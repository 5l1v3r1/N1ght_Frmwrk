<?php
include 'config.php';
include 'tools/crypto/encode.php';
include 'tools/crypto/md4.php';
include 'tools/crypto/md5.php';
include 'tools/crypto/sha1.php';
include 'tools/crypto/base64.php';
include 'tools/crypto/aio.php';
include 'tools/generator/customcode.php';
include 'tools/iptools/dnslookup.php';
include 'tools/iptools/hostsrc.php';
include 'tools/iptools/nmap.php';
include 'tools/iptools/reversedns.php';
include 'tools/iptools/testping.php';
include 'tools/iptools/headers.php';
include 'tools/iptools/mtr.php';
include 'tools/iptools/page.php';
include 'tools/iptools/reverseip.php';
include 'tools/iptools/whois.php';
include 'tools/iptools/ping.php';
include 'tools/scan/dirscan.php';
include 'tools/scan/logfin.php';
include 'tools/scan/shellscan.php';
include 'tools/scan/subdoscan.php';
include 'tools/spam/phd.php';
include 'tools/spam/jdid.php';
include 'tools/spam/telkomsel.php';

function betaprogram(){
    include 'config.php';
    print "\n";
    print "$yellow COMINGSOON!! \n\n";
}
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
    print "$white This framework uses the command to run several tools in it\n\n";
    print "$white Commands that can be used, including :\n\n";
    print "$okegreen\n████████████████████$white     Basics$okegreen     ████████████████████\n\n";
    print "$cyan menu$white     OR$cyan   -m$red  :$white Show Main Menu\n";
    print "$cyan help$white     OR$cyan   -h$red  :$white Show Help\n";
    print "$cyan about$white    OR$cyan   -a$red  :$white Show About\n\n";
    menu();
    brute();
    scan();
    endecode();
    iptools();
    generator();
    print "\n";
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
    print "$cyan       / /     \(  )/    ----- $red    N1ght.Frmwrk$yellow V.6.bt\n";
    print "$cyan      //////   ' \/ `   ---    $cyan    By$white N1ght.Hax0r    \n";
    print "$cyan     //// / // :    : ---                                \n";
    print "$cyan    // /   /  /`    '--                                  \n";
    print "$cyan   //          //..\\\                                   \n";
    print "$red ════════════$cyan UU$red ══$cyan UU$red ═════════════════════════════════\n";
    print "$cyan              '//||\\\`   $white https://github.com/N1ght420   \n";
    print "$cyan                ''``                                     \n";
}
function menu(){
    include 'config.php';
    print "$okegreen\n████████████████████$white       Menu$okegreen      ████████████████████\n\n";
    print "$cyan iptool$white   OR$cyan   -i$red  :$white IP Tools\n";
    print "$cyan brute$white    OR$cyan   -b$red  :$white BruteForce\n";
    print "$cyan scan$white     OR$cyan   -sc$red :$white Scanner\n";
    print "$cyan crypto$white   OR$cyan   -c$red  :$white Encode & Decode\n";
    print "$cyan gen$white      OR$cyan   -g$red  :$white Generator\n";
    print "$cyan spam$white     OR$cyan   -sp$red :$white Spammer\n\n";
}
function brute(){
    include 'config.php';
    print "$okegreen\n████████████████████$white    BruteForce$okegreen   ████████████████████\n\n";
    print "$yellow COMINGSOON!! \n\n";
}
function scan(){
    include 'config.php';
    print "$okegreen\n████████████████████$white     Scanner$okegreen     ████████████████████\n\n";
    print "$cyan adlog$red       :$white Admin Login Finder\n";
    print "$cyan dirscan$red     :$white Directory Scanner\n";
    print "$cyan shellscan$red   :$white Shell Finder\n";
    print "$cyan subscan$red     :$white Subdomain Scanner\n\n";
}
function endecode(){
    include 'config.php';
    print "$okegreen\n████████████████████$white Encode & Decode$okegreen ████████████████████\n\n";
    print "$cyan encode$red      :$white Encode\n\n";
}
function iptools(){
    include 'config.php';
    print "$okegreen\n████████████████████$white    IP  Tools$okegreen    ████████████████████\n\n";
    print "$cyan mtr$red         :$white MTR Traceroute\n";
    print "$cyan nping$red       :$white Test Ping\n";
    print "$cyan dnslookup$red   :$white DNS Lookup\n";
    print "$cyan revdns$red      :$white Reverse DNS\n";
    print "$cyan whois$red       :$white Whois\n";
    print "$cyan hostsrc$red     :$white Host Search\n";
    print "$cyan revip$red       :$white Reverse IP\n";
    print "$cyan httphead$red    :$white HTTP Headers\n";
    print "$cyan pagelink$red    :$white Page Links\n";
    print "$cyan nmap$red        :$white Nmap Port Scan\n\n";
}
function generator(){
    include 'config.php';
    print "$okegreen\n████████████████████$white    Generator$okegreen    ████████████████████\n\n";
    print "$cyan custgen$red     :$white Custom Code Generator\n\n";
}
function spam(){
    include 'config.php';
    print "$okegreen\n████████████████████$white     Spammer$okegreen     ████████████████████\n\n";
    print "$cyan smsphd$red      :$white SMS Pizza Hut Delivery\n";
    print "$cyan smstp$red       :$white SMS Tokopedia\n";
    print "$cyan calltp$red      :$white Call Tokopedia\n";
    print "$cyan smsjd$red       :$white SMS JD.ID\n";
    print "$cyan smsts$red       :$white SMS Telkomsel\n\n";
}

?>
