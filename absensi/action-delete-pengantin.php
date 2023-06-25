<?php
include 'config.php';
$nip = $_GET['nip'];
$sql = "DELETE FROM pengantin WHERE nip=$nip ";

$result = $db->query($sql);

if ($result == TRUE) {
    header("Location:view-guru.php?message=Data guru berhasil dihapus!");
} else {
    header("Location:view-guru.php?message=Data guru tidak berhasil dihapus!");
}
