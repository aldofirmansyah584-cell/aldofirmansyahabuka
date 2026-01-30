<?php
include 'fungsi.php';
$data = getMahasiswa();
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Data Mahasiswa</h3>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>
        <?php $no=1; while($m = mysqli_fetch_assoc($data)): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $m['nim'] ?></td>
            <td><?= $m['nama'] ?></td>
            <td><?= $m['prodi'] ?></td>
            <td>
                <a href="edit.php?id=<?= $m['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="hapus.php?id=<?= $m['id'] ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile ?>
    </table>
</div>
</body>
</html>