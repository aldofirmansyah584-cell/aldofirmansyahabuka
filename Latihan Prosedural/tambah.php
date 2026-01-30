<?php
include 'fungsi.php';

if (isset($_POST['simpan'])) {
    tambahMahasiswa($_POST['nim'], $_POST['nama'], $_POST['prodi']);
    header("Location: index.php");
}
?>

Tambah.php
<!doctype html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Tambah Mahasiswa</h3>
    <form method="post">
        <input name="nim" class="form-control mb-2" placeholder="NIM">
        <input name="nama" class="form-control mb-2" placeholder="Nama">
        <input name="prodi" class="form-control mb-2" placeholder="Prodi">
        <button name="simpan" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>