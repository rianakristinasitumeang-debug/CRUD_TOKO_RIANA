<?php 
include 'koneksi.php'; 

if (isset($_POST['submit'])) {
    $nama     = $_POST['nama'];
    $username = $_POST['username'];
    $email    = $_POST['email'];

    $query = mysqli_query($koneksi, "INSERT INTO user (nama, username, email) VALUES ('$nama', '$username', '$email')");
    
    if ($query) {
        header("Location: user.php");
    } else {
        echo "<script>alert('Gagal menambah data');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah User</title>
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
        <h2>Tambah User Baru</h2>
        <form action="" method="POST" onsubmit="return validasiForm()">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <a href="user.php" class="btn btn-danger">Batal</a>
        </form>
    </div>
    <script src="assets/script.js"></script>
</body>
</html>