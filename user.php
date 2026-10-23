<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data User</title>
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
        <h2>Daftar Pengguna / User</h2>
        <a href="user_tambah.php" class="btn btn-success">+ Tambah User Baru</a>
        
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC");
                while($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['username']; ?></td>
                    <td><?= $data['email']; ?></td>
                    <td>
                        <a href="user_edit.php?id=<?= $data['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="user_hapus.php?id=<?= $data['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="assets/script.js"></script>
</body>
</html>