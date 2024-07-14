<!DOCTYPE html>
<html>
<head>
	<title>DATA MASTER KELAS CBT</title>
</head>
<body>
	<h2>DATA MASTER KELAS CBT</h2>
	<br/>
	<a href="tambah.php">[+]TAMBAH DATA KELAS CBT</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>KODE KELAS</th>
			<th>NAMA</th>
			<th>AKSI</th>
		</tr>
		<?php 
		include '../../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from cbt_kelas");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_kelas']; ?></td>
				<td><?php echo $d['kelas']; ?></td>
				<td>
					<a href="edit.php?id_kelas=<?php echo $d['id_kelas']; ?>">UBAH</a>
					<a href="hapus.php?id_kelas=<?php echo $d['id_kelas']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br/>
 	<a href="../index.php">BACK MASTER MENU</a><br>
	<a href="../../logout.php">LOGOUT</a>
</body>
</html>