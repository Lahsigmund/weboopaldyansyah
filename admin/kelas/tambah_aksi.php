<?php
include '../../koneksi.php';
$id_kelas = $_POST['id_kelas'];
$kelas = $_POST['kelas'];
mysqli_query($koneksi,"insert into cbt_kelas(id_kelas,kelas) values('$id_kelas','$kelas')");
header("location:index.php");
?>