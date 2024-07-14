<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Aplikasi Computer Based Test</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
	<div class="container" >
	<h2>Login</h2>
	<br/>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "LOGIN APK COMPUTER BASED TEST GAGAL!!!PERIKSA USERNAME DAN PASSWORD";
		}else if($_GET['pesan'] == "logout"){
			echo "ANDA BERHASIL LOGOUT APK COMPUTER TEST";
		}else if($_GET['pesan'] == "belum_login"){
			echo "ANDA LOGIN BARU DAPAT AKSES";
		}
	}
	?>
	<br/><br/>
	<form method="post" action="cek_login.php" >
		
		<table border="1">
			<td>Login</td>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</div>
</body>
</html>