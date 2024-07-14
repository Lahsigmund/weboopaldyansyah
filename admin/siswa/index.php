<!DOCTYPE html>
<html>
<head>
	<title>DATA MASTER SISWA CBT</title>
</head>
<body>
	<h2>DATA MASTER SISWA CBT</h2>
	<br/>
	<a href="tambah.php">[+]TAMBAH DATA SISWA CBT</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>NIS SISWA</th>
			<th>NAMA SISWA</th>
			<th>KELAS</th>
			<th>STATUS</th>
			<th>AKSI</th>

		</tr>
		<?php 
		include '../../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from cbt_siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nis']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['id_kelas']; ?></td>
				<td><?php echo $d['status']; ?></td>
				<td>
					<a href="edit.php?nis=<?php echo $d['nis']; ?>">UBAH</a>
					<a href="hapus.php?nis=<?php echo $d['nis']; ?>">HAPUS</a>
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