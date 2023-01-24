<?php
$host = "localhost";
$username = "root";
$password = "";
$dbName = "kds_proje";
// $port = "3308";
$conn = mysqli_connect($host, $username, $password, $dbName);

if (!$conn) {
    echo "Could not establish the DB link";
}

$conn->set_charset("utf8");
?>
