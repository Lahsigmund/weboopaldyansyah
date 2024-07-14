<?php
include '../../koneksi.php';
$id_user = $_GET['id_user'];
mysqli_query($koneksi,"delete from cbt_user where id_user='$id_user'");
header("location:index.php");
 
?>