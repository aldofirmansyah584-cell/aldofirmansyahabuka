<?php
include 'fungsi.php';

if (isset($_POST['simpan'])) {
    tambahMahasiswa($_POST['nim'], $_POST['nama'], $_POST['prodi']);
    header("Location: index.php");
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa - Sistem Informasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background: linear-gradient(90deg, #4e73df, #224abe);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: white !important;
        }

        .container-form {
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .card-header {
            background: linear-gradient(90deg, #4e73df, #224abe);
            color: white;
            border-radius: 12px 12px 0 0 !important;
            border: none;
            padding: 1.5rem;
        }

        .card-header h4 {
            margin: 0;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        .form-control {
            border: 2px solid #e3e6f0;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #4e73df;
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .form-control::placeholder {
            color: #999;
        }

        .btn-group-action {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn-simpan {
            background: linear-gradient(90deg, #1cc88a, #13a870);
            border: none;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s;
            flex: 1;
        }

        .btn-simpan:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(28, 200, 138, 0.4);
            color: white;
        }

        .btn-kembali {
            background-color: #6c757d;
            border: none;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-kembali:hover {
            background-color: #5a6268;
            color: white;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-dark">
    <div class="container-fluid">
        <span class="navbar-brand">
            <i class="bi bi-book"></i> Sistem Informasi Mahasiswa
        </span>
    </div>
</nav>

<div class="container container-form" style="max-width: 500px;">
    <div class="card">
        <div class="card-header">
            <h4><i class="bi bi-plus-circle"></i> Tambah Data Mahasiswa</h4>
        </div>
        <div class="card-body p-4">
            <form method="post">
                <div class="form-group">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukkan NIM" required>
                </div>

                <div class="form-group">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="form-group">
                    <label for="prodi" class="form-label">Program Studi</label>
                    <input type="text" id="prodi" name="prodi" class="form-control" placeholder="Masukkan program studi" required>
                </div>

                <div class="btn-group-action">
                    <button type="submit" name="simpan" class="btn btn-simpan">
                        <i class="bi bi-check-circle"></i> Simpan
                    </button>
                    <a href="index.php" class="btn btn-kembali">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>