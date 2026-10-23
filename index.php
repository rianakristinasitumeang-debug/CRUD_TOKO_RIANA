<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem CRUD Toko</title>
    <!-- Menghubungkan ke Bootstrap 5 CDN -->
    <link href="https://jsdelivr.net" rel="stylesheet">
    <style>
        /* Mengubah warna header tabel menjadi hijau sesuai gambar */
        .table-custom-green th {
            background-color: #4CAF50 !important;
            color: white !important;
        }
    </style>
</head>
<body class="bg-light">

<div class="container my-5 p-5 bg-white rounded shadow-sm" style="max-width: 900px;">
    
    <!-- Judul Utama -->
    <h2 class="fw-bold mb-4">Manajemen CRUD Sederhana</h2>

    <!-- SECTION: DATA USER -->
    <div class="mb-5">
        <h4 class="fw-bold mb-3">Data User</h4>
        <a href="tambah_user.php" class="btn btn-primary mb-3 rounded-0">Tambah User</a>
        
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-custom-green">
                <tr>
                    <th scope="col" style="width: 8%;">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col" style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh Data Statis (Silakan ganti dengan loop PHP fetch dari tabel 'user') -->
                <tr>
                    <td>1</td>
                    <td>Riana Kristina</td>
                    <tdrianakristina@gmail.com</td>
                    <td>Admin</td>
                    <td>
                        <a href="edit_user.php?id=1" class="text-decoration-none">Edit</a> | 
                        <a href="hapus_user.php?id=1" class="text-decoration-none text-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- SECTION: DATA PRODUK -->
    <div>
        <h4 class="fw-bold mb-3">Data Produk</h4>
        <a href="tambah_produk.php" class="btn btn-primary mb-3 rounded-0">Tambah Produk</a>
        
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-custom-green">
                <tr>
                    <th scope="col" style="width: 8%;">ID</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col" style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh Data Statis (Silakan ganti dengan loop PHP fetch dari tabel 'produk') -->
                <tr>
                    <td>1</td>
                    <td>Tablet Huawei</td>
                    <td>Rp 10,500,000</td>
                    <td>10</td>
                    <td>
                        <a href="edit_produk.php?id=1" class="text-decoration-none">Edit</a> | 
                        <a href="hapus_produk.php?id=1" class="text-decoration-none text-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://jsdelivr.net"></script>
</body>
</html>