<!DOCTYPE html>
<html>
<head>
	<title>MASTER TAMBAH DATA UJIAN</title>
</head>
<body>
 
	<h2>MASTER DATA UJIAN</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<form method="post" action="tambah_aksi.php">
		<table border="1">
			<tr>
				<td>KODE UJIAN</td>
				<td><input type="number" name="id_ujian"></td>
			</tr>
			<tr>
				<td>JUDUL</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>NAMA MATA KUIAH</td>
				<td><input type="text" name="nama_mapel"></td>
			</tr>
			<tr>
				<td>TANGGAL</td>
				<td><input type="date" name="tanggal" ></td>
			</tr>
			<tr>
				<td>WAKTU</td>
				<td><input type="time" name="waktu"></td>
			</tr>
			<tr>
				<td>JUMLAH SOAL</td>
				<td><input type="number" name="jml_soal"></td>
			</tr>
			<tr>
				<td>id_user</td>
				<td><input type="number" name="id_user"></td>
			</tr>
			<tr>
				<td>SUDAH SELESAI TEKAN :</td>
			<td><input type="submit" value="SIMPAN"></td></tr>
		</table>
	</form>
</body>
</html>