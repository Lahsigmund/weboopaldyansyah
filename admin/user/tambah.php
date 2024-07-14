<!DOCTYPE html>
<html>
<head>
	<title>MASTER TAMBAH DATA USER</title>
</head>
<body>
 
	<h2>MASTER DATA USER</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<form method="post" action="tambah_aksi.php">
		<table border="1">
			<tr>			
				<td>ID USER</td>
				<td><input  name="id_user" value="<?php echo $d['id_user'] ; ?>" type="hidden"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>USERNAME</td>
				<td><input type="text" name="username"></td>
			</tr>

			<tr>
				<td>PASSWORD</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>LEVEL</td>
				<td><input type="text" name="level" placeholder="Masukkan Level"></td>
			</tr>
			<tr>
				<td>SUDAH SELESAI TEKAN :</td>
			<td><input type="submit" value="SIMPAN"></td></tr>
		</table>
	</form>
</body>
</html>