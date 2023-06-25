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
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Daftar Event</h5>
            <small class="text-muted float-end">Daftar Event</small>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nip</th>
                    <th>Nama Event</th>
                    <th>Tanggal</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            <?php $no = 1;foreach ($data as $d) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><strong><?= $d['nip']; ?></strong></td>
                    <td><?= $d['namacpw']; ?> & <?= $d['namacpw']; ?></td>
                    <td><?= $d['tanggal']; ?></td>
                    <td><a href="view-buku.php?nip=<?= $d['nip']; ?>">Lihat</a?</td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->

<?php include 'footer.php';?>