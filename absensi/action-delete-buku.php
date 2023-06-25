<?php
include 'config.php';
$id_absen = $_GET['id_absen'];
$sql = "DELETE FROM bukutamu WHERE id_absen=$id_absen ";

$result = $db->query($sql);

if ($result == TRUE) {
    header("Location:view-buku.php?buku.php");
} else {
    header("Location:view-buku.php?buku.php");
}
