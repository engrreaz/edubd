<?php
include_once '../../dbase.php';
$act = $_POST['act'];

if ($act == 'upd') {
    $id = $_POST['id'];
    $pth = $_POST['pth'];
    $ten = $_POST['ten'];
    $tbn = $_POST['tbn'];
    $sten = $_POST['sten'];
    $stbn = $_POST['stbn'];
    $lnk = $_POST['lnk'];
    $st = $_POST['st'];
    if ($st == 'false') {
        $st = 0;
    } else {
        $st = 1;
    }

    if ($id != 0) {
        $vst = "update upload set titleen='$ten', titlebn='$tbn', subtitleen='$sten', subtitlebn='$stbn', link='$lnk', status='$st' where id='$id'";
        $conn->query($vst);
    } else {
        $vst = "INSERT into upload (id, uploadtype, category, filetype, location, filename, status, uploadtime, titleen, titlebn, subtitleen, subtitlebn, link) values(NUll, 'slider', '-', '', '$pth', '', 1, '$cur', '$ten', '$tbn', '$sten', '$stbn', '$lnk')";
        $conn->query($vst);
    }

    echo '<i class="bi bi-file-slides"></i>';
} else {

    // $file_pointer = fopen($pthk, 'a');
    // fclose($file_pointer);
    echo '<br>';
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $link = "https";
    } else {
        $link = "http";
    }


    // Here append the common URL characters.
    $link .= "://" . $_SERVER['HTTP_HOST'] . '/';




    $link = '../';
    $pthk = $link . $_POST['pth'];
    echo '<img src="' . $pthk . '" />';
    echo $pthk;

    if (file_exists($pthk)) {
        echo 'Yes';
    } else {
        echo 'No';
    }
    unlink($pthk);
    // $vst = "DELETE From upload  where id='$id'";
    //     $conn->query($vst);
}