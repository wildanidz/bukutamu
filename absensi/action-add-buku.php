<?php
include 'config.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$waktu = $_POST['waktu'];
$statuss = $_POST['statuss'];
$keterangan = $_POST['keterangan'];

$sql = "INSERT INTO bukutamu(id_absen,nip,nama,alamat,waktu,statuss,keterangan) VALUES(NULL,'$nip','$nama','$alamat','$waktu','$statuss','$keterangan')";

$result = $db->query($sql);

if ($result === TRUE) {
    header("Location:view-buku.php?nip=$nip");
} else {
    header("Location:view-buku.php?nip=$nip;");
}
