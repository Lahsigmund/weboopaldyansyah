<!DOCTYPE html>
<html>
<head>
	<title>MASTER TAMBAH SOAL</title>
</head>
<body>
 
	<h2>MASTER DATA SOAL</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<form method="post" action="tambah_aksi.php">
		<table border="1">
			<tr>			
				<td>ID SOAL</td>
				<td><input  name="id_soal" value="<?php echo $d['id_soal'] ; ?>" type="hidden"></td>
			</tr>
			<tr>
				<td>ID UJIAN</td>
				<td><input type="text" name="id_ujian"></td>
			</tr>
			<tr>
				<td>SOAL</td>
				<td><input type="text" name="soal"></td>
			</tr>
			<tr>
				<td>PILIHAN 1</td>
				<td><input type="text" name="pilihan_1"></td>
			</tr>
			<tr>
				<td>PILIHAN 2</td>
				<td><input type="text" name="pilihan_2"></td>
			</tr>
			<tr>
				<td>PILIHAN 3</td>
				<td><input type="text" name="pilihan_3"></td>
			</tr>
			<tr>
				<td>PILIHAN 4</td>
				<td><input type="text" name="pilihan_4"></td>
			</tr>
			<tr>
				<td>PILIHAN 5</td>
				<td><input type="text" name="pilihan_5"></td>
			</tr>
			<tr>
				<td>SUDAH SELESAI TEKAN :</td>
			<td><input type="submit" value="SIMPAN"></td></tr>
		</table>
	</form>
</body>
</html>