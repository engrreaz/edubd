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

define("scemail", "saidur592rahman@yahoo.com");
define("scweb", "https://www.webaddress.edu.bd");
define("a", "");

if ($lang == "en") {
    require_once 'cdn/lang_en.php';
    define("scname", "Bhurbhuria Adarsha High School & College");
    define("scaddress", "Bhurbhuria, Bancharmpur, Brahmanbaria.");
    define("scfounder", "Founder : Alhaz Hz. Muhammad Sree Krishno");
    define("estd", "Estd. 1999");
    define("scmobile", "01309103187");
    define("scmpo", "230251487");
    define("SCCODE", "103187");
} else {
    require_once 'cdn/lang_bn.php';
    define("scname", "ভুরভুরিয়া আদর্শ উচ্চ বিদ্যালয় ও কলেজ");
    define("scaddress", "ভুরভুরিয়া, বাঞ্ছারামপুর, ব্রাহ্মণবাড়িয়া।");
    define("scfounder", "প্রতিষ্ঠাতা : আলহাজ্ব হযরত মোহাম্মদ শ্রীকৃঞ্চ");
    define("estd", "প্রতিষ্ঠাকাল : ১৯৯৯");
    define("scmobile", "১০৩০৯১০৩১৮৭");
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