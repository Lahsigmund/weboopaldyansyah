<html>
<head>
<title>UBAH DATA UJIAN CBT</title>
</head>
<body>
	<h2>UBAH DATA UJIAN CBT</h2><br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA UJIAN</h3>
	<?php
	include '../../koneksi.php';
	$id_ujian = $_GET['id_ujian'];
	$data = mysqli_query($koneksi,"select * from cbt_ujian where id_ujian='$id_ujian'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi.php">
			<table>
				<tr>			
					<td>KODE UJIAN</td>
					<td>
						<input type="number" name="id_ujian" value="<?php echo $d['id_ujian']; ?>">
					</td>
				</tr>
				<tr>			
					<td>JUDUL</td>
					<td>
						<input type="text" name="judul" value="<?php echo $d['judul']; ?>">
					</td>
				</tr>
				<tr>			
					<td>NAMA MATA PELAJARAN</td>
					<td>
						<input type="text" name="nama_mapel" value="<?php echo $d['nama_mapel']; ?>">
					</td>
				</tr>
				<tr>			
				<td>TANGGAL</td>
					<td>
						<input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>">
					</td>
				</tr>
				<tr>			
				<td>WAKTU</td>
					<td>
						<input type="time" name="waktu" value="<?php echo $d['waktu']; ?>">
					</td>
				</tr>
				<tr>			
				<td>JUMLAH SOAL</td>
					<td>
						<input type="text" name="jml_soal" value="<?php echo $d['jml_soal']; ?>">
					</td>
				</tr>
				<tr>			
				<td>ID USER</td>
					<td>
						<input type="text" name="id_user" value="<?php echo $d['id_user']; ?>">
					</td>
				</tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>