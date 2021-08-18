<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Data Makanan</title>

    <style>
    .underlima {
        color: white;
        background-color: red;
      }
    .container {
        width: 450px;
        height: 700ps;
        margin-top: 100px;
        border-style: solid;   
      }
      .table{
        width: 600px;
      }
    </style>
</head>
<body>
    <div class="container">
    
      <center>
      <!-- <h4><a href="tampil.html">[+] Tambah Baru</a></h4>   -->
      <p class="ml-3 mt-3" class="label" style="font-size: 16px;">FORM INPUT MASTER dan Stock DATA BARANG</p></center>
      
      <form action="simpan.php" method="POST">

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-5 col-form-label">Kode Produk</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="kode" name="kode">
          </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-5 col-form-label">Nama Produk</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-5 col-form-label">Harga Produk</label>
          <div class="col-sm-7">
            <input type="number" class="form-control" id="harga" name="harga">
          </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-5 col-form-label">Satuan</label>
          <div class="col-sm-7">
          <select id="inputState" class="form-control" name="satuan">
          <option selected>Botol</option>
          <option>gelas</option>
          <option>Mangkuk</option>
          </select>
          </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-5 col-form-label">Kategori</label>
          <div class="col-sm-7">
          <select id="inputState" class="form-control" name="kategori">
          <option selected>Minuman Dingin</option>
          <option>Minuman Hangat</option>
          <option>Makanan</option>
          </select>
          </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-5 col-form-label">URL Gambar</label>
          <div class="col-sm-7">
            <input type="url" class="form-control" id="gambar" name="gambar">
          </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-5 col-form-label">Stok Awal</label>
          <div class="col-sm-7">
            <input type="number" class="form-control" id="stok" name="stok">
          </div>
      </div><br>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-dark" name="simpan">Simpan</button>
      </div>
      <br>

      
        </div>
        <br><br><br>
        <center>
        <table border="1" class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Kode Produk</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga Produk</th>
            <th scope="col">Satuan</th>
            <th scope="col">Kategori</th>   
            <th scope="col">URL Gambar</th>
            <th scope="col">Stok Awal</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
        </center>
    
    

    
        
        <?php
            $sql = "SELECT * FROM input";
            $query = mysqli_query($connect,$sql);

                while($pel = mysqli_fetch_array($query)){
                    echo"<tr>";
                    echo"<td>".$pel['kode']."</td>";
                    echo"<td>".$pel['nama']."</td>";
                    echo"<td>".$pel['harga']."</td>";
                    echo"<td>".$pel['satuan']."</td>";
                    echo"<td>".$pel['kategori']."</td>";
                    echo "<td><img src=".$pel['gambar']." width='105px' height='100px'></td>";
                    $stokcolor = $pel['stok'];
                    if ($stokcolor <= 5) {
                        echo "<td class='underlima'>" . $pel['stok'] . "</td>";
                  } else {
                        echo "<td>" . $pel['stok'] . "</td>";
                    };
                    
                    
                    echo"<td>";
                    echo "<a href='formedit.php?kode=".$pel['kode']."'>Edit</a> | ";
                    echo "<a href='hapus.php?kode=".$pel['kode']."'>Hapus</a>";
                    echo"</td>";
                    echo"</tr>";    
                }

        ?>
</body>
</html>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>