<!DOCTYPE html>
<html>
<head>
	<title>DATA MASTER SOAL CBT</title>
</head>
<body>
	<h2>DATA MASTER SOAL CBT</h2>
	<br/>
	<a href="tambah.php">[+]TAMBAH DATA SOAL CBT</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID SOAL</th>
			<th>ID UJIAN</th>
			<th>SOAL</th>
			<th>PILIH SOAL 1</th>
			<th>PILIH SOAL 2</th>
			<th>PILIH SOAL 3</th>
			<th>PILIH SOAL 4</th>
			<th>PILIH SOAL 5</th>
			<th>AKSI</th>

		</tr>
		<?php 
		include '../../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from cbt_soal");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_soal']; ?></td>
				<td><?php echo $d['id_ujian']; ?></td>
				<td><?php echo $d['soal']; ?></td>
				<td><?php echo $d['pilihan_1']; ?></td>
				<td><?php echo $d['pilihan_2']; ?></td>
				<td><?php echo $d['pilihan_3']; ?></td>
				<td><?php echo $d['pilihan_4']; ?></td>
				<td><?php echo $d['pilihan_5']; ?></td>
				<td>
					<a href="edit.php?id_soal=<?php echo $d['id_soal']; ?>">UBAH</a>
					<a href="hapus.php?id_soal=<?php echo $d['id_soal']; ?>">HAPUS</a>
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