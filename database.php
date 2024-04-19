<?php

$hostName = "sql210.infinityfree.com";
$dbUser = "if0_36377506";
$dbPassword = "zvCgdqU8m3";
$dbName = "if0_36377506_login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}
?>