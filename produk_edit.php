<?php 
include 'koneksi.php'; 

$id = $_GET['id'];
$queryData = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
$data = mysqli_fetch_array($queryData);

if (isset($_POST['update'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga       = $_POST['harga'];
    $stok        = $_POST['stok'];

    $query = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', harga='$harga', stok='$stok' WHERE id='$id'");
    
    if ($query) {
        header("Location: produk.php");
    } else {
        echo "<script>alert('Gagal mengupdate produk');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
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
        <h2>Edit Data Produk</h2>
        <form action="" method="POST" onsubmit="return validasiForm()">
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" value="<?= $data['nama_produk']; ?>">
            </div>
            <div class="form-group">
                <label>Harga (Rp)</label>
                <input type="number" name="harga" class="form-control" value="<?= $data['harga']; ?>">
            </div>
            <div class="form-group">
                <label>Jumlah Stok</label>
                <input type="number" name="stok" class="form-control" value="<?= $data['stok']; ?>">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="produk.php" class="btn btn-danger">Batal</a>
        </form>
    </div>
    <script src="assets/script.js"></script>
</body>
</html>