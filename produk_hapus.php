<?php 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM produk WHERE id='$id'");

if ($query) {
    header("Location: produk.php");
} else {
    echo "<script>alert('Gagal menghapus produk'); window.location.href='produk.php';</script>";
}
?>