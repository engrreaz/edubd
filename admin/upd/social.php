<?php
include_once '../../dbase.php';
$id = $_POST['id'];
$lnk = $_POST['lnks'];

$vst = "update txtnote set texten='$lnk' where id='$id'";
$conn->query($vst);
echo '<i class="bi bi-file-slides"></i>';