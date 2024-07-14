<html>
<head>
<title>UBAH DATA USER CBT</title>
</head>
<body>
	<h2>UBAH DATA USER CBT</h2><br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA USER</h3>
	<?php
	include '../../koneksi.php';
	$id_user = $_GET['id_user'];
	$data = mysqli_query($koneksi,"select * from cbt_user where id_user='$id_user'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi.php">
			<table>
				<tr>			
					<td>ID USER</td>
					<td>
						<input type="number" name="id_user" value="<?php echo $d['id_user']; ?>">
					</td>
				</tr>
				<tr>			
					<td>NAMA</td>
					<td>
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>			
					<td>USERNAME</td>
					<td>
						<input type="text" name="username" value="<?php echo $d['username']; ?>">
					</td>
				</tr>
				<tr>			
					<td>PASSWORD</td>
					<td>
						<input type="text" name="password" value="<?php echo $d['password']; ?>">
					</td>
				</tr>
				<tr>			
					<td>LEVEL</td>
					<td>
						<input type="text" name="level" value="<?php echo $d['level']; ?>">
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