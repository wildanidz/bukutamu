<?php
include 'config.php';

$nip = $_POST['nip'];
$username = $_POST['username'];
$password = $_POST['password'];

//enkripsi password
$sql = "INSERT INTO user(id_user,nip,username,password) VALUES(NULL,$nip,'$username','$password')";

$result = $db->query($sql);

if ($result === TRUE) {
    header("Location:view-pengguna.php?message=Data User berhasil ditambah!");
} else {
    header("Location:view-pengguna.php?message=Data user gagal ditambah!");
}