<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="navbar">
        <a href="index.php" class="brand">CRUD TOKO</a>
        <div>
            <a href="user.php">Kelola User</a>
            <a href="produk.php">Kelola Produk</a>
        </div>
    </div>

    <div class="container">
        <h2>Daftar Produk</h2>
        <a href="produk_tambah.php" class="btn btn-success">+ Tambah Produk Baru</a>
        
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id DESC");
                while($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nama_produk']; ?></td>
                    <td>Rp <?= number_format($data['harga'], 0, ',', '.'); ?></td>
                    <td><?= $data['stok']; ?></td>
                    <td>
                        <a href="produk_edit.php?id=<?= $data['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="produk_hapus.php?id=<?= $data['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="assets/script.js"></script>
</body>
</html>