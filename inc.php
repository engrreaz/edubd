<?php
session_start();
if (!isset($_COOKIE["LANG"])) {
    setcookie("LANG", "en", time() + (86400 * 365), "/"); // 86400 = 1 day
}
$prevlang = $_COOKIE["LANG"];

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    setcookie("LANG", "$lang", time() + (86400 * 365), "/"); // 86400 = 1 day

    if ($prevlang != $lang) {
        header('Location: ' . $_SERVER['REQUEST_URI']);
    }
}
$lang = $_COOKIE["LANG"];

$usr = 'Guest';
$sy = date('Y');
$tday = date('Y-m-d');
$cur = date('Y-m-d H:i:s');
$rootuser = 'bahs103187';
$sccode = "103187";


define("CDN", "http://localhost/edubd/cdn/");

// phpinfo();



define("API", "dsgyft6868rdyhdtur66789-ldyr");

define("scemail", "abc@email.com");
define("scweb", "https://www.webaddress.edu.bd");
define("a", "");

if ($lang == "en") {
    require_once 'cdn/lang_en.php';
    define("scname", "**** esse654se ffsfsff sfsefsfsfsfs sfs s");
    define("scaddress", "Honululu, Miami, USA");
    define("scfounder", "Founder : Alhaz Hz. Muhammad Sree Krishno");
    define("scmobile", "01988123456");
    define("scmpo", "230251487");
    define("SCCODE", "103187");
} else {
    require_once 'cdn/lang_bn.php';
    define("scname", "মার্কামারা বিশ্ববিদ্যালয়");
    define("scaddress", "হনুলুলু, মিয়ামী বিচ, চট্টগ্রাম");
    define("scfounder", "প্রতিষ্ঠাতা : আলহাজ্ব হযরত মোহাম্মদ শ্রীকৃঞ্চ");
    define("scmobile", "০১৯৮৭৬৫৩৪৫৭৬");
    define("scmpo", "২৯৪৬৪৮৪");
    define("SCCODE", "১০৩১৮৭");
}


include_once('dbase.php');

$uri = $_SERVER['REQUEST_URI'];
$ip = $_SERVER['REMOTE_ADDR'];

$vst = "INSERT INTO visitor VALUES (NULL, '$uri','$ip','$tday','$cur')";
$conn->query($vst);


// USER Information
$usr = $usr;
$usrname = 'Name';
$usrpic = 'assets/images/user.png';



if (strpos($_SERVER['REQUEST_URI'], 'admin')) {

    include 'header.php';
    ?>

    <body onclick="load();">

        <?php
        include '../cdn/home_top.php';
        include '../cdn/nav.php';


} else {
    include 'cdn/header.php';


    ?>


        <body onclick="load();">

            <?php
            include 'cdn/home_top.php';
            include 'cdn/nav.php';
}