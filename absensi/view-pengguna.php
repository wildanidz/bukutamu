<?php
include 'header.php';

$sql = "SELECT * FROM user JOIN pengantin ON user.nip = pengantin.nip";
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
            <h5 class="mb-0">Daftar Pengguna</h5>
            <small class="text-muted float-end">Pengguna/Daftar Pengguna</small>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>NIP</th>
                    <th>Password</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            <?php $no = 1;foreach ($data as $d) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><strong><?= $d['id_user']; ?></strong></td>
                    <td><?= $d['nip']; ?></td>
                    <td><?= $d['password']; ?></td>
                    <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="edit-pengguna.php?id_user=<?= $d['id_user']; ?>">
                                <i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="action-delete-pengguna.php?id_user=<?= $d['id_user']; ?>">
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