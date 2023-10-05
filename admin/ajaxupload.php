<?php
include_once '../dbase.php';
$cur = date('Y-m-d H:i:s');
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt'); // valid extensions
$path = 'uploads/'; // upload directory

if (!empty($_POST['name']) || !empty($_POST['email']) || $_FILES['image']) {
    $utype = $_POST['utype'];
    if ($utype == 'slider') {
        $path = '../resources/slider/';
    }
    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

    // can upload same image using rand function
    $final_image = rand(1000, 1000000) . $img;

    // check's valid format
    if (in_array($ext, $valid_extensions)) {
        $path = $path . strtolower($final_image);

        if (move_uploaded_file($tmp, $path)) {
            echo "<img src='$path' style='width:200px;' />";
            $name = $_POST['name'];
            $email = $_POST['email'];


            if ($utype == 'slider') {
                $paths = 'resources/slider/' . strtolower($final_image);
                $vst = "INSERT into upload (id, uploadtype, category, filetype, location, filename, status, uploadtime, titleen, titlebn, subtitleen, subtitlebn, link) values(NUll, 'slider', '-', '$ext', '$paths', '$final_image', 1, '$cur', '', '', '', '', '')";
                $conn->query($vst);

                echo '<script>sliding_area();</script>';
            }



            //insert form data in the database
            // $insert = $db->query("INSERT uploading (name,email,file_name) VALUES ('" . $name . "','" . $email . "','" . $path . "')");

            //echo $insert?'ok':'err';
        }
    } else {
        echo 'invalid';
    }
}
?>