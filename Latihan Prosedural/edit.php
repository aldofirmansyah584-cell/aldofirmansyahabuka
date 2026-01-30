<?php
include 'fungsi.php';

$id   = $_GET['id'];
$data = getMahasiswaById($id);

if (isset($_POST['update'])) {
    updateMahasiswa($id, $_POST['nim'], $_POST['nama'], $_POST['prodi']);
    header("Location: index.php");
}
?>
<!doctype html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Edit Mahasiswa</h3>
    <form method="post">
        <input name="nim" value="<?= $data['nim'] ?>" class="form-control mb-2">
        <input name="nama" value="<?= $data['nama'] ?>" class="form-control mb-2">
        <input name="prodi" value="<?= $data['prodi'] ?>" class="form-control mb-2">
        <button name="update" class="btn btn-warning">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>