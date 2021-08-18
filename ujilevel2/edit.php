<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];
    $kategori = $_POST['kategori'];
    $gambar = $_POST['gambar'];
    $stok = $_POST['stok'];
     

    $sql = "UPDATE input SET nama='$nama', harga='$harga',satuan='$satuan', kategori='$kategori',gambar='$gambar', stok='$stok' WHERE kode='$kode'";
    $query =mysqli_query($connect,$sql);
    if ($query) {
    header('Location: tampil.php');
    }else{
    header('location: edit.php?status=gagal');
    }
}
?>