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
        
        $sql = "INSERT INTO input (kode,nama,harga,satuan,kategori,gambar,stok) VALUES ('$kode','$nama','$harga','$satuan','$kategori','$gambar','$stok')";
        $query = mysqli_query($connect, $sql);
        if ($query){
            header('Location: tampil.php');
        }else{
            header('location: simpan.php?status=gagal');
        }
    }
?>