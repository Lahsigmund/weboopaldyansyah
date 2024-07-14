<?php
include '../../koneksi.php';
$id_ujian = $_GET['id_ujian'];
mysqli_query($koneksi,"delete from cbt_ujian where id_ujian='$id_ujian'");
header("location:index.php");
?>