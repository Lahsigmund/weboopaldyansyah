<html>
<head>
<title>UBAH DATA SISWA CBT</title>
</head>
<body>
	<h2>UBAH DATA SISWA CBT</h2><br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA SISWA</h3>
	<?php
	include '../../koneksi.php';
	$nis = $_GET['nis'];
	$data = mysqli_query($koneksi,"select * from cbt_siswa where nis='$nis'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi.php">
			<table>
				<tr>			
					<td>NIS</td>
					<td>
						<input type="number" name="nis" value="<?php echo $d['nis']; ?>">
					</td>
				</tr>
				<tr>			
					<td>NAMA</td>
					<td>
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>			
					<td>ID KELAS</td>
					<td>
						<input type="text" name="id_kelas" value="<?php echo $d['id_kelas']; ?>">
					</td>
				</tr>
				<tr>			
					<td>STATUS</td>
					<td>
						<input type="text" name="status" value="<?php echo $d['status']; ?>">
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