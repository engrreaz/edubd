<?php

// //DB SETUP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edubd";
$conn = new mysqli($servername, $username, $password, $dbname);

$servername2 = "localhost";
$username2 = "root";
$password2 = "";
$dbname2 = "eimbox";
$eimbox = mysqli_connect($servername2, $username2, $password2, $dbname2);
if (!$eimbox) {
    die("Connection failed: " . mysqli_connect_error());
}

?>