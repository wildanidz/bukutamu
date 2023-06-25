<?php
include 'header.php';

$sql = "SELECT * FROM pengantin";
$result = $db->query($sql);
$data = [];


while ($datas = $result->fetch_assoc()) {
    $data[] = $datas;
}

?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Tambah Buku Tamu</h5>
            <small class="text-muted float-end">Absensi/Tambah Buku Tamu</small>
        </div>
        <div class="card-body">
            <form action="action-add-buku.php" method="POST">
            <div class="row mb-3">
                <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Wedding</label>
                <div class="col-sm-10">
                    <select name="nip" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                        <option selected>Klik Untuk Memilih</option>
                        <?php foreach ($data as $d) : ?>
                        <option value="<?= $d['nip']; ?>"><?= $d['namacpp']; ?> & <?= $d['namacpw']; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="basic-default-name" placeholder="Wildan" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="basic-default-name" placeholder="Singaparna" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Waktu</label>
                <div class="col-sm-10">
                    <input type="time" name="waktu" class="form-control" id="basic-default-name" placeholder="19 Februari 2022" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select name="statuss" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                        <option selected>Klik Untuk Memilih</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Titip Amplop">Titip</option>

                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" name="keterangan" class="form-control" id="basic-default-name" placeholder="Sedang ada keperluan" />
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