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
            <h5 class="mb-0">Tambah Profile</h5>
            <small class="text-muted float-end">Profile/Tambah Profile</small>
        </div>
        <div class="card-body">
            <form action="action-add-pengguna.php" method="POST">
            <div class="row mb-3">
                <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    <select name="nip" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                        <option selected>Klik Untuk Memilih</option>
                        <?php foreach ($data as $d) : ?>
                        <option value="<?= $d['nip']; ?>"><?= $d['nip']; ?>-<?= $d['nama']; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="basic-default-name" placeholder="wildanidz" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="basic-default-name" placeholder="112233" />
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