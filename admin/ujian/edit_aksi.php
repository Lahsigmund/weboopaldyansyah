<?php 
include '../../koneksi.php';
$id_ujian = $_POST['id_ujian'];
$judul = $_POST['judul'];
$nama_mapel = $_POST['nama_mapel'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$jml_soal = $_POST['jml_soal'];
$id_user = $_POST['id_user'];
mysqli_query($koneksi,"update cbt_ujian set judul='$judul',nama_mapel='$nama_mapel',tanggal='$tanggal',waktu='$waktu',jml_soal='$jml_soal',id_user='$id_user' where id_ujian='$id_ujian'");
header("location:index.php");
?>