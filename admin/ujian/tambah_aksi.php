<?php
include '../../koneksi.php';
$id_ujian = $_POST['id_ujian'];
$judul = $_POST['judul'];
$nama_mapel = $_POST['nama_mapel'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$jml_soal = $_POST['jml_soal'];
$id_user = $_POST['id_user'];

mysqli_query($koneksi,"insert into cbt_ujian(id_ujian,judul,nama_mapel,tanggal,waktu,jml_soal,id_user) values('$id_ujian','$judul','$nama_mapel','$tanggal','$waktu','$jml_soal','$id_user')");
header("location:index.php");
?>