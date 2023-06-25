<?php
include 'header.php';

$id_absen = $_GET['id_absen'];
$sql = "SELECT * FROM bukutamu JOIN pengantin ON bukutamu.nip = pengantin.nip WHERE bukutamu.id_absen=$id_absen";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Edit Buku Tamu</h5>
            <small class="text-muted float-end">Buku Tamu/Edit Buku Tamu</small>
        </div>
        <div class="card-body">
            <form action="action-add-buku.php" method="POST">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">NIP</label>
                <div class="col-sm-10">
                    <input type="text" name="nip" class="form-control" id="basic-default-name" readonly placeholder="112233" value=<?= $data[0]['nip']; ?> >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                <div class="col-sm-10">
                    <input type="date" name="nama" class="form-control" id="basic-default-name" placeholder="Wildan" value=<?= $data[0]['nama']; ?> >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat</label>
                <div class="col-sm-10">
                    <input type="time" name="alamat" class="form-control" id="basic-default-name" placeholder="Singaparna" value=<?= $data[0]['alamat']; ?> >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">waktu</label>
                <div class="col-sm-10">
                    <input type="time" name="waktu" class="form-control" id="basic-default-name" placeholder="28 Februari 2020" value=<?= $data[0]['waktu']; ?> >
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select name="statuss" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                        <option value=<?= $data[0]['statuss']; ?>  selected><?= $data[0]['statuss']; ?> </option>
                        <option value="Hadir">Hadir</option>
                        <option value="Titip Amplop">Titip Amplop</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" name="keterangan" class="form-control" id="basic-default-name" placeholder="Sedang ada keperluan" value=<?= $data[0]['keterangan']; ?> >
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php';?>