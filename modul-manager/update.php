<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nama_karyawan = $_POST['nama_karyawan'];
$jabatan = $_POST ['jabatan'];
$tanggal_masuk = $_POST ['tanggal_masuk'];
$gaji = $_POST ['gaji'];

#3. menulis query
$sunting = "UPDATE karyawan SET nama_karyawan='$nama_karyawan', jabatan='$jabatan' , tanggal_masuk='$tanggal_masuk' , gaji='$gaji' WHERE id_karyawan='$id_karyawan'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>