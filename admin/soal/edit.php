<html>
<head>
<title>UBAH DATA SOAL CBT</title>
</head>
<body>
	<h2>UBAH DATA SOAL CBT</h2><br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA SOAL</h3>
	<?php
	include '../../koneksi.php';
	$id_soal = $_GET['id_soal'];
	$data = mysqli_query($koneksi,"select * from cbt_soal where id_soal='$id_soal'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi.php">
			<table>
				<tr>			
					<td>ID SOAL</td>
					<td>
						<input type="hidden" name="id_user" value="<?php echo $d['id_user']; ?>">
					</td>
				</tr>
				<tr>			
					<td>KODE UJIAN</td>
					<td>
						<input type="number" name="id_ujian" value="<?php echo $d['id_ujian']; ?>">
					</td>
				</tr>
				<tr>			
					<td>SOAL</td>
					<td>
						<input type="text" name="soal" value="<?php echo $d['soal']; ?>">
					</td>
				</tr>
				<tr>			
					<td>PILIHAN 1</td>
					<td>
						<input type="text" name="pilihan_1" value="<?php echo $d['pilihan_1']; ?>">
					</td>
				</tr>
				<tr>			
					<td>PILIHAN 2</td>
					<td>
						<input type="text" name="pilihan_2" value="<?php echo $d['pilihan_2']; ?>">
					</td>
				</tr>
				<tr>			
					<td>PILIHAN 3</td>
					<td>
						<input type="text" name="pilihan_3" value="<?php echo $d['pilihan_3']; ?>">
					</td>
				</tr>
				<tr>			
					<td>PILIHAN 4</td>
					<td>
						<input type="text" name="pilihan_4" value="<?php echo $d['pilihan_4']; ?>">
					</td>
				</tr>
				<tr>			
					<td>PILIHAN 5</td>
					<td>
						<input type="text" name="pilihan_5" value="<?php echo $d['pilihan_5']; ?>">
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