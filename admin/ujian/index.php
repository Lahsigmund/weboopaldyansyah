<!DOCTYPE html>
<html>
<head>
	<title>DATA MASTER UJIAN CBT</title>
</head>
<body>
	<h2>DATA MASTER UJIAN CBT</h2>
	<br/>
	<a href="tambah.php">[+]TAMBAH DATA UJIAN CBT</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID UJIAN</th>
			<th>JUDUL</th>
			<th>MATA PELAJARAN</th>
			<th>TANGGAL</th>
			<th>WAKTU</th>
			<th>JUMLAH SOAL</th>
			<th>ID USER</th>
			<th>AKSI</th>

		</tr>
		<?php 
		include '../../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from cbt_ujian");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_ujian']; ?></td>
				<td><?php echo $d['judul']; ?></td>
				<td><?php echo $d['nama_mapel']; ?></td>
				<td><?php echo $d['tanggal']; ?></td>
				<td><?php echo $d['waktu']; ?></td>
				<td><?php echo $d['jml_soal']; ?></td>
				<td><?php echo $d['id_user']; ?></td>
				<td>
					<a href="edit.php?id_ujian=<?php echo $d['id_ujian']; ?>">UBAH</a>
					<a href="hapus.php?id_ujian=<?php echo $d['id_ujian']; ?>">HAPUS</a>
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