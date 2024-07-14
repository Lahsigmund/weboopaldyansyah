<?php
include '../../koneksi.php';
$nis = $_GET['nis'];
mysqli_query($koneksi,"delete from cbt_siswa where nis='$nis'");
header("location:index.php");
?>