<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "infosec";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die('Something went wrong'. mysqli_connect_error());
}

?>