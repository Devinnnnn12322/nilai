<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$db = 'nilai';
$con = mysqli_connect($host, $userdb, $passdb, $db);

if (mysqli_connect_errno()) {
    echo "Connection Eror!! : " . mysqli_connect_error();
    exit();
}