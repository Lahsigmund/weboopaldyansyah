<?php
include '../../koneksi.php';
$id_soal = $_POST['id_soal'];
$id_ujian = $_POST['id_ujian'];
$soal = $_POST['soal'];
$pilihan_1=$_POST['pilihan_1'];
$pilihan_2=$_POST['pilihan_2'];
$pilihan_3=$_POST['pilihan_3'];
$pilihan_4=$_POST['pilihan_4'];
$pilihan_5=$_POST['pilihan_5'];
mysqli_query($koneksi,"insert into cbt_soal(id_soal,id_ujian,soal,pilihan_1,pilihan_2,pilihan_3,pilihan_4,pilihan_5) values('$id_soal','$id_ujian','$soal','$pilihan_1','$pilihan_2','$pilihan_3','$pilihan_4','$pilihan_5')");
header("location:index.php");
?>