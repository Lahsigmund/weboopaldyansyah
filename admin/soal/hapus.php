<?php
include '../../koneksi.php';
$id_soal = $_GET['id_soal'];
mysqli_query($koneksi,"delete from cbt_soal where id_soal='$id_soal'");
header("location:index.php");
 
?>