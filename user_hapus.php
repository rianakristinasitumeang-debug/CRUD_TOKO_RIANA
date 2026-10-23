<?php 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'");

if ($query) {
    header("Location: user.php");
} else {
    echo "<script>alert('Gagal menghapus data'); window.location.href='user.php';</script>";
}
?>