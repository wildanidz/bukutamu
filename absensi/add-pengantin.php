<?php include 'header.php';?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Tambah Pengantin</h5>
            <small class="text-muted float-end">Data pengantin/Tambah pengantin</small>
        </div>
        <div class="card-body">
            <form action="action-add-pengantin.php" method="POST">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">NIP</label>
                <div class="col-sm-10">
                    <input type="number" name="nip" class="form-control" id="basic-default-name" placeholder="112233" />
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama CPW</label>
                <div class="col-sm-10">
                    <input type="text" name="namacpw" class="form-control" id="basic-default-name" placeholder="Febi" />
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama CPP</label>
                <div class="col-sm-10">
                    <input type="text" name="namacpp" class="form-control" id="basic-default-name" placeholder="Wildan" />
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" name="tanggal" class="form-control" id="basic-default-name" placeholder="28 Februari 2023" />
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Tempat</label>
                <div class="col-sm-10">
                    <input type="text" name="tempat" class="form-control" id="basic-default-name" placeholder="Gedung AHC" />
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">No Telp</label>
                <div class="col-sm-10">
                    <input type="number" name="telpon" class="form-control" id="basic-default-name" placeholder="08xx-xxxx-xxxx" />
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="basic-default-name" placeholder="wildan@gmail.com" />
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