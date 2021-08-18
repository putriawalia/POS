<?php
include 'koneksi.php';
if (isset($_GET['kode'])) {
    header('Location: tampil.php');
}
$kode = $_GET['kode']; 

$sql    = "DELETE FROM input WHERE kode='$kode'";
$query  = mysqli_query($connect, $sql);

if ($query) {
    header('Location: tampil.php');

}else {
    header('Location: hapus.php?status=gagal');
}
?>