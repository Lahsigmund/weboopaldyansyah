<?php 
include '../../koneksi.php';
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$status = $_POST['status'];
mysqli_query($koneksi,"update cbt_siswa set nama='$nama',id_kelas='$id_kelas',status='$status' where nis='$nis'");
header("location:index.php");
?>