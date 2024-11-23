<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<?php include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">

<!-- col-8 untuk besar kecilin card -->

    <div class="col-8 m-auto">
    <div class="card">
  <div class="card-header">

    <h3 class="float-start">Form Data Karyawan</h3>

    

  </div>

  <div class="card-body">
  
  <form action="proses.php" method="POST">


  <!-- JANGAN LUPA TAMBAH NAME BIAR BISA MASUK KE PHPMYSQL -->

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Karyawan</label>
    <input type="text" name="nama_karyawan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jabatan</label>
    <input type="text" name="jabatan" class="form-control" id="exampleInputPassword1">
  </div>
  

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal masuk</label>
    <input type="date" name="tanggal_masuk" class="form-control" id="exampleInputPassword1">


    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gaji</label>
    <input type="text" name="gaji" class="form-control" id="exampleInputPassword1">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
  </div>

 <!-- jangan lupa bikin koneksi pake ../ -->
  
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/all.js"></script>

    
</body>
</html>