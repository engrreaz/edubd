<?php

// //DB SETUP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edubd";
$conn = new mysqli($servername, $username, $password, $dbname);

// // $db_connect = @mysql_connect('localhost', $username, $password) or die('Opps');
// // mysql_select_db($db_connect, $dbname);
// // mysql_query('SET CHARACTER SET utf8');
// // mysql_query("SET SESSION collation_connection ='utf8_general_ci'");

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$servername2 = "localhost";
$username2 = "root";
$password2 = "";
$dbname2 = "eimbox";
$eimbox = mysqli_connect($servername2, $username2, $password2, $dbname2);
if (!$eimbox) {
    die("Connection failed: " . mysqli_connect_error());
}
?>