<?php
include 'header.php';

$nip = $_GET['nip'];
$sql = "SELECT * FROM bukutamu JOIN pengantin ON bukutamu.nip = pengantin.nip WHERE pengantin.nip=$nip";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location:../index.php?message=Anda telah Logout");
}
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Daftar Buku Tamu</h5>
            <small class="text-muted float-end">Buku Tamu/Daftar Buku Tamu</small>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Waktu</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            <?php $no = 1;foreach ($data as $d) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['alamat']; ?></td>
                    <td><?= $d['waktu']; ?></td>
                    <td><?= $d['statuss']; ?></td>
                    <td><?= $d['keterangan']; ?></td>
                    <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="edit-buku.php?id_absen=<?= $d['id_absen']; ?>">
                                <i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <a class="dropdown-item" href="action-delete-buku.php?id_absen=<?= $d['id_absen']; ?>">
                                <i class="bx bx-trash me-1"></i> Delete</a>
                        </div>
                    </div>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->

<?php include 'footer.php';?>