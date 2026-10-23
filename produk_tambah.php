<?php 
include 'koneksi.php'; 

if (isset($_POST['submit'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga       = $_POST['harga'];
    $stok        = $_POST['stok'];

    $query = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama_produk', '$harga', '$stok')");
    
    if ($query) {
        header("Location: produk.php");
    } else {
        echo "<script>alert('Gagal menambah produk');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
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
        <h2>Tambah Produk Baru</h2>
        <form action="" method="POST" onsubmit="return validasiForm()">
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control">
            </div>
            <div class="form-group">
                <label>Harga (Rp)</label>
                <input type="number" name="harga" class="form-control">
            </div>
            <div class="form-group">
                <label>Jumlah Stok</label>
                <input type="number" name="stok" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <a href="produk.php" class="btn btn-danger">Batal</a>
        </form>
    </div>
    <script src="assets/script.js"></script>
</body>
</html>