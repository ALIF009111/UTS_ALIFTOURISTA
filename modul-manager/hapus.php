<?php
include("../koneksi.php");



$id= $_GET['xyz'];


// jangan lupa ganti variable

$hapus ="DELETE FROM WHERE id='$id'";


$proses = mysqli_query($koneksi,$hapus);



?>
<script>
    document.location="index.php";
</script>