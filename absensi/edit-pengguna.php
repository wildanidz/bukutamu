<?php
include 'header.php';

$id_user = $_GET['id_user'];
$sql = "SELECT * FROM user JOIN pengantin ON user.nip = guru.nip WHERE user.id_user=$id_user";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Edit Pengguna</h5>
            <small class="text-muted float-end">Pengguna/Edit Pengguna</small>
        </div>
        <div class="card-body">
            <form action="action-edit-pengguna.php" method="POST">
            <div class="row mb-3">
                <div class="col-sm-10">
                    <input type="hidden" name="id_user" class="form-control" id="basic-default-name" readonly placeholder="112233" value=<?= $data[0]['id_user']; ?> >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">NIP</label>
                <div class="col-sm-10">
                    <input type="text" name="nip" class="form-control" id="basic-default-name" readonly placeholder="112233" value=<?= $data[0]['nip']; ?> >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="basic-default-name" placeholder="username" value=<?= $data[0]['username']; ?> >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Password</label>
                <div class="col-sm-10">
                    <input type="text" name="password" class="form-control" id="basic-default-name" placeholder="********" value=<?= $data[0]['password']; ?> >
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