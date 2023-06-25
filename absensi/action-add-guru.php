<?php
include 'config.php';

$nip = $_POST['nip'];
$namacpp = $_POST['namacpp'];
$namacpw = $_POST['namacpw'];
$tanggal = $_POST['tanggal'];
$tempat = $_POST['tempat'];
$telpon = $_POST['telpon'];
$email = $_POST['email'];

$sql = "INSERT INTO pengantin(nip,namacpp,namacpw,tanggal,tempat,telpon,email) VALUES($nip,'$namacpp','$namacpw','$tanggal','$tempat','$telpon','$email')";

$result = $db->query($sql);

if ($result === TRUE) {
    header("Location:view-pengantin.php?message=Data guru berhasil ditambah!");
} else {
    header("Location:view-pengantin.php?message=Data guru gagal ditambah!");
}
