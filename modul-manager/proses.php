<?php
include("../koneksi.php");



$nama_karyawan = $_POST['nama_karyawan'];
$jabatan = $_POST ['jabatan'];
$tanggal_masuk = $_POST ['tanggal_masuk'];
$gaji = $_POST ['gaji'];




$simpan ="INSERT INTO karyawan (nama_karyawan,jabatan,tanggal_masuk,gaji) 
VALUES ('$nama_karyawan','$jabatan','$tanggal_masuk','$gaji')";


$proses = mysqli_query($koneksi,$simpan);



?>
<script>
    document.location="index.php";
</script>