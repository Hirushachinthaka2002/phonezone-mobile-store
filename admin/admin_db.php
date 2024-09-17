<?php
$serverName = "localhost";
$dbUsername = "hiru2002";
$dbPassword = "!bofx-umkaeVH!gt";
$dbName = "phonezone_login";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn){
    die("Connection failed : " .mysqli_connect_error());
}

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>