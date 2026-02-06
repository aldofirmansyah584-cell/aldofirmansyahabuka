<?php
include 'fungsi.php';
$data = getMahasiswa();
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - Sistem Informasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #858796;
            --success-color: #1cc88a;
            --info-color: #36b9cc;
            --warning-color: #f6c23e;
            --danger-color: #e74c3c;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background: linear-gradient(90deg, var(--primary-color), #224abe);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .container-main {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .card-header {
            background: linear-gradient(90deg, var(--primary-color), #224abe);
            color: white;
            border-radius: 12px 12px 0 0 !important;
            border: none;
            padding: 1.5rem;
        }

        .card-header h4 {
            margin: 0;
            font-weight: 600;
        }

        .btn-add {
            background: linear-gradient(90deg, var(--success-color), #17a2b8);
            border: none;
            border-radius: 8px;
            padding: 0.6rem 1.5rem;
            color: white;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(28, 200, 138, 0.4);
            color: white;
        }

        .table {
            color: #333;
        }

        .table thead {
            background-color: #f8f9fa;
            border-bottom: 2px solid var(--primary-color);
        }

        .table thead th {
            color: var(--primary-color);
            font-weight: 600;
            border: none;
            padding: 1rem;
        }

        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            border-color: #e3e6f0;
        }

        .table tbody tr {
            transition: background-color 0.2s;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .btn-sm {
            border-radius: 6px;
            padding: 0.4rem 0.8rem;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn-edit {
            background-color: #ffc107;
            border: none;
            color: #333;
        }

        .btn-edit:hover {
            background-color: #ffb300;
            color: #333;
            transform: translateY(-2px);
        }

        .btn-delete {
            background-color: #dc3545;
            border: none;
            color: white;
        }

        .btn-delete:hover {
            background-color: #c82333;
            color: white;
            transform: translateY(-2px);
        }

        .table-empty {
            text-align: center;
            padding: 3rem 1rem;
            color: #999;
        }

        .badge-nim {
            background-color: var(--info-color);
            color: white;
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            font-weight: 500;
        }

        .badge-prodi {
            background-color: #e7f3ff;
            color: var(--primary-color);
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            font-weight: 500;
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

<div class="container container-main">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h4><i class="bi bi-list-ul"></i> Data Mahasiswa</h4>
                <a href="tambah.php" class="btn btn-add">
                    <i class="bi bi-plus-circle"></i> Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            <?php if (mysqli_num_rows($data) > 0) { ?>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th style="width: 20%">NIM</th>
                            <th style="width: 25%">Nama</th>
                            <th style="width: 25%">Prodi</th>
                            <th style="width: 25%; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; while($m = mysqli_fetch_assoc($data)): ?>
                        <tr>
                            <td><strong><?= $no++ ?></strong></td>
                            <td><span class="badge-nim"><?= $m['nim'] ?></span></td>
                            <td><?= $m['nama'] ?></td>
                            <td><span class="badge-prodi"><?= $m['prodi'] ?></span></td>
                            <td style="text-align: center;">
                                <a href="edit.php?id=<?= $m['id'] ?>" class="btn btn-edit btn-sm" title="Edit">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <a href="hapus.php?id=<?= $m['id'] ?>"
                                   class="btn btn-delete btn-sm" title="Hapus"
                                   onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="bi bi-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </div>
            <?php } else { ?>
            <div class="table-empty">
                <i class="bi bi-inbox" style="font-size: 3rem; color: #ddd;"></i>
                <p style="margin-top: 1rem; font-size: 1.1rem;">Belum ada data mahasiswa</p>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>