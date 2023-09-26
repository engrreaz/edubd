<?php
$rootuser = 'bahs103187';
$sccode = "103187";


define("CDN", "http://localhost/edubd/cdn/");

// phpinfo();

define("API", "dsgyft6868rdyhdtur66789-ldyr");

define("scemail", "saidur592rahman@yahoo.com");
define("scweb", "https://www.bahsac.edu.bd");
define("a", "");

if ($lang == "en") {
    require_once 'cdn/lang_en.php';
    define("scname", "Bhurbhuria Adarsha High School & College");
    define("scaddress", "Bhurbhuria, Bancharmpur, Brahmanbaria.");
    define("scfounder", "Founder : ......................");
    define("estd", "Estd. 1999");
    define("scmobile", "01309103187");
    define("scmpo", "230251487");
    define("SCCODE", "103187");
    $stipend = '000';
    $examcentercode = '0';
    $boardcode = '0';
    $htp = 'Md. Saidur Rahman<br><small>Principal</small>';
    $smcch = 'Md. Mosiur Rahman <small>, NDC</small>';
    $smctime = 'from 00-00-0000 to 00-00-0000';
} else {
    require_once 'cdn/lang_bn.php';
    define("scname", "ভুরভুরিয়া আদর্শ উচ্চ বিদ্যালয় ও কলেজ");
    define("scaddress", "ভুরভুরিয়া, বাঞ্ছারামপুর, ব্রাহ্মণবাড়িয়া।");
    define("scfounder", "প্রতিষ্ঠাতা : ....................");
    define("estd", "প্রতিষ্ঠাকাল : ১৯৯৯");
    define("scmobile", "১০৩০৯১০৩১৮৭");
    define("scmpo", "২৯৪৬৪৮৪");
    define("SCCODE", "১০৩১৮৭");
    $stipend = '০০০';
    $examcentercode = '০';
    $boardcode = '০';
    $htp = 'মো: সাইদুর রহমান<br><small>অধ্যক্ষ</small>';
    $smcch = 'মো: মশিউর রহমান <small>, এনডিসি</small>';
    $smctime = '০০-০০-২০-- থেকে ০০-০০-২০-- পর্যন্ত';
}

?>