<html>
<head>
<title>UBAH DATA KELAS CBT</title>
</head>
<body>
	<h2>UBAH DATA KELAS CBT</h2><br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA KELAS</h3>
	<?php
	include '../../koneksi.php';
	$id_kelas = $_GET['id_kelas'];
	$data = mysqli_query($koneksi,"select * from cbt_kelas where id_kelas='$id_kelas'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi.php">
			<table>
				<tr>			
					<td>KODE KELAS</td>
					<td>
						<input type="number" name="id_kelas" value="<?php echo $d['id_kelas']; ?>">
					</td>
				</tr>
				<tr>			
					<td>KELAS</td>
					<td>
						<input type="text" name="kelas" value="<?php echo $d['kelas']; ?>">
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