<html>
<head>
	<title>APLIKASI COMPUTER BASED TEST</title>
</head>
<link rel="stylesheet" href="../style.css">
<body>
	<div class="container">
	<h2>Halaman Admin CBT</h2><br/>
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login.php?pesan=belum_login");
	}
	?>
	<h4>Selamat datang di CBT, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
	<a href="user"><button>DATA USER</button></a>||
	<a href="kelas"><button>DATA KELAS</button></a>||
	<a href="siswa"><button>DATA SISWA</button></a>||
	<a href="ujian"><button>DATA UJIAN</button></a>||
	<a href="soal"><button>DATA SOAL</button></a>||
	<a href="kelas_ujian"><button>DATA KELAS UJIAN</button></a>||
	<a href="nilai"><button>DATA NILAI</button></a>||
	<br/>
	<br/>
	<a href="../logout.php">LOGOUT</a>
 </div>

</body>
</html>