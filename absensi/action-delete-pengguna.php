<?php
include 'config.php';
$id_user = $_GET['id_user'];
$sql = "DELETE FROM user WHERE id_user=$id_user ";

$result = $db->query($sql);

if ($result == TRUE) {
    header("Location:view-pengguna.php?message=Data user berhasil dihapus!");
} else {
    header("Location:view-pengguna.php?message=Data user tidak berhasil dihapus!");
}
