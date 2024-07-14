<?php
include '../../koneksi.php';
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
mysqli_query($koneksi,"insert into cbt_user(id_user,nama,username,password,level) values('$id_user','$nama','$username','$password','$level')");
header("location:index.php");
?>