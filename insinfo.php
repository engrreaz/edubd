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
} else {
    require_once 'cdn/lang_bn.php';
    define("scname", "ভুরভুরিয়া আদর্শ উচ্চ বিদ্যালয় ও কলেজ");
    define("scaddress", "ভুরভুরিয়া, বাঞ্ছারামপুর, ব্রাহ্মণবাড়িয়া।");
    define("scfounder", "প্রতিষ্ঠাতা : ....................");
    define("estd", "প্রতিষ্ঠাকাল : ১৯৯৯");
    define("scmobile", "১০৩০৯১০৩১৮৭");
    define("scmpo", "২৯৪৬৪৮৪");
    define("SCCODE", "১০৩১৮৭");
}


?>