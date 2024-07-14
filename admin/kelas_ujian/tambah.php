<!DOCTYPE html>
<html>
<head>
	<title>MASTER TAMBAH DATA SISWA</title>
</head>
<body>
 
	<h2>MASTER DATA SISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<form method="post" action="tambah_aksi.php">
		<table border="1">
			<tr>
				<td>NIS SISWA</td>
				<td><input type="number" name="nis"></td>
			</tr>
			<tr>
				<td>NAMA SISWA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>KELAS</td>
				<td><input type="text" name="id_kelas" placeholder="Pilih Kelas"></td>
			</tr>

			<tr>
				<td>STATUS</td>
				<td><input type="text" name="status" placeholder="Masukan AKTIF/TIDAK"></td>
			</tr>
			<tr>
				<td>SUDAH SELESAI TEKAN :</td>
			<td><input type="submit" value="SIMPAN"></td></tr>
		</table>
	</form>
</body>
</html>