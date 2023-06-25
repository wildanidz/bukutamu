<?php
include 'config.php';

$nip = $_POST['nip'];
$namacpp = $_POST['namacpp'];
$namacpw = $_POST['namacpw'];
$tanggal = $_POST['tanggal'];
$tempat = $_POST['tempat'];
$telpon = $_POST['telpon'];
$email = $_POST['email'];

$sql = "UPDATE guru set nip=$nip,namacpp='$namacpp',namacpw='$namacpw',tanggal='$tanggal',tempat='$tempat',telpon='$telpon',email='$email' WHERE nip=$nip";

$result = $db->query($sql);

if ($result === TRUE) {
    header("Location:view-pengantin.php?message=Data pengantin berhasil ditambah!");
} else {
    header("Location:view-pengantin.php?message=Data pengantin gagal ditambah!");
}