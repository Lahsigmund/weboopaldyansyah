<?php
include '../../koneksi.php';
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$status = $_POST['status'];

mysqli_query($koneksi,"insert into cbt_siswa(nis,nama,id_kelas,status) values('$nis','$nama','$id_kelas','$status')");
header("location:index.php");
?>