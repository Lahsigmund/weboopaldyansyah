<!DOCTYPE html>
<html>
<head>
	<title>DATA MASTER USER CBT</title>
</head>
<body>
	<h2>DATA MASTER USER CBT</h2>
	<br/>
	<a href="tambah.php">[+]TAMBAH DATA USER CBT</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID USER</th>
			<th>NAMA</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>LEVEL</th>
			<th>AKSI</th>

		</tr>
		<?php 
		include '../../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from cbt_user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td>01SIFM <?php echo $d['id_user']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['level']; ?></td>
				<td>
					<a href="edit.php?id_user=<?php echo $d['id_user']; ?>">UBAH</a>
					<a href="hapus.php?id_user=<?php echo $d['id_user']; ?>">HAPUS</a>
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