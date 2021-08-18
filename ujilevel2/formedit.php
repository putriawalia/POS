<?php
include 'koneksi.php';
    $kode = $_GET['kode'];
    $sql    = "SELECT * FROM input WHERE kode='$kode'";
    $query  = mysqli_query($connect, $sql);
    $pel = mysqli_fetch_assoc($query);

if ( mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .container {
        width: 450px;
        height: 700ps;
        margin-top: 100px;
        border-style: solid;   
      }
    </style>
  </head>
  <body>
  
  <div class="container">
  <center><h3>Form Edit Data</h3></center>
  <form action="edit.php" method="POST">
  <input type="hidden" name="kode" value="<?php echo $pel['kode']?>"/>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-5 col-form-label">Nama Produk</label>
          <div class="col-sm-7">
          <input type="text" name="nama" value="<?php echo $pel['nama']?>">
          </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-5 col-form-label">Harga Produk</label>
          <div class="col-sm-7">
          <input type="text" name="harga" value="<?php echo $pel['harga']?>">
          </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-5 col-form-label">Satuan</label>
          <div class="col-sm-7">
          <select type="text" name="satuan" value="<?php echo $pel['satuan']?>">
          <option selected>Botol</option>
          <option>gelas</option>
          <option>Mangkuk</option>
          </select>
          </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-5 col-form-label">Kategori</label>
          <div class="col-sm-7">
          <select type="text" name="kategori" value="<?php echo $pel['kategori']?>">
          <option selected>Minuman Dingin</option>
          <option>Minuman Hangat</option>
          <option>Makanan</option>
          </select>
          </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-5 col-form-label">URL Gambar</label>
          <div class="col-sm-7">
            <input type="url" name="gambar" value="<?php echo $pel['gambar']?>">
          </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-5 col-form-label">Stok Awal</label>
          <div class="col-sm-7">
            <input type="number" name="stok" value="<?php echo $pel['stok']?>">
          </div>
      </div><br>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-dark" name="simpan">Simpan</button>
      </div>
      <br>
        
  </div>
        
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
