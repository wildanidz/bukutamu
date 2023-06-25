<?php
include 'config.php';

$id_absen = $_POST['id_absen'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$waktu = $_POST['waktu'];
$statuss = $_POST['statuss'];
$keterangan = $_POST['keterangan'];

$sql = "UPDATE bukutamu set id_absen=$id_absen,nip='$nip',nama='$nama',alamat='$alamat',waktu='$waktu',statuss='$statuss',keterangan='$keterangan' WHERE id_absen=$id_absen";

$result = $db->query($sql);

if ($result === TRUE) {
    header("Location:absen.php?message=Data absensi berhasil ditambah!");
} else {
    header("Location:absen.php?message=Data absensi gagal ditambah!");
}