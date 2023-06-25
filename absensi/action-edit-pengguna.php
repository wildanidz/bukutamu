<?php
include 'config.php';

$id_user = $_POST['id_user'];
$nip = $_POST['nip'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE user set id_user=$id_user,nip='$nip',username='$username',password='$password' WHERE id_user=$id_user";

$result = $db->query($sql);

if ($result === TRUE) {
    header("Location:view-pengguna.php?message=Data Pengantin berhasil ditambah!");
} else {
    header("Location:view-pengguna.php?message=Data Pengantin gagal ditambah!");
}