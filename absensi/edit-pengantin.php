<?php
include 'header.php';

$nip = $_GET['nip'];
$sql = "SELECT * FROM pengantin WHERE nip=$nip";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Edit Pengantin</h5>
            <small class="text-muted float-end">Data Pengantin/Edit Pengantin</small>
        </div>
        <div class="card-body">
            <form action="action-edit-pengantin.php" method="POST">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">NIP</label>
                <div class="col-sm-10">
                    <input type="number" name="nip" class="form-control" id="basic-default-name" placeholder="112233" value=<?= $data[0]['nip']; ?> >
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama CPP</label>
                <div class="col-sm-10">
                    <input type="text" name="namacpp" class="form-control" id="basic-default-name" placeholder="Wildan" value=<?= $data[0]['nama']; ?> >
                </div>
            </div>
            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama CPW</label>
                <div class="col-sm-10">
                    <input type="text" name="namacpw" class="form-control" id="basic-default-name" placeholder="Febi" value=<?= $data[0]['namacpw']; ?> >
                </div>
            </div>
            <label class="col-sm-2 col-form-label" for="basic-default-name">tanggal</label>
                <div class="col-sm-10">
                    <input type="date" name="tanggal" class="form-control" id="basic-default-name" placeholder="28 Februari 2023" value=<?= $data[0]['tanggal']; ?> >
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">tempat</label>
                <div class="col-sm-10">
                    <input type="text" name="tempat" class="form-control" id="basic-default-name" placeholder="Graha Asia" value=<?= $data[0]['tempat']; ?> >
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">No Telp</label>
                <div class="col-sm-10">
                    <input type="number" name="telpon" class="form-control" id="basic-default-name" placeholder="08xx-xxxx-xxxx" value=<?= $data[0]['telpon']; ?> >
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="basic-default-name" placeholder="wildan@gmail.com" value=<?= $data[0]['email']; ?>>
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