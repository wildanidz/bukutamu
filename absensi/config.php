<?php
error_reporting(0); //hidden error
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "proart";

$db = new mysqli($hostname, $username, $password, $db_name);

if ($db->connect_error) {
    echo "Koneksi Error, Periksa DB anda!";
}
