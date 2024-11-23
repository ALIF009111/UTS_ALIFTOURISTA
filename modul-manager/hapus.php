<?php
include("../koneksi.php");



$id_karyawan = $_GET['xyz'];


// jangan lupa ganti variable

$hapus ="DELETE FROM WHERE id_karyawan='$id_karyawan'";


$proses = mysqli_query($koneksi,$hapus);



?>
<script>
    document.location="index.php";
</script>