<?php
$dbhost = "127.0.0.1";
$root = "root";
$rootPass = "";
$db = "hms";
$folder="/hospital/";
$host="http://".$_SERVER['SERVER_NAME'].$folder;

// Create connection
$conn = mysqli_connect($dbhost, $root, $rootPass,$db);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}//else echo("connected");



?>