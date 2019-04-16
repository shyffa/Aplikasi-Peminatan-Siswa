
<!DOCTYPE html>

<?php
	mysql_connect("localhost","root","1");
	mysql_select_db("peminatan");

	
?>


<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Elements - Transit by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="tkj.php">TKJ</a></li>
						<li><a href="linkpemi.php">Peminatan</a></li>
						<li><a href="elements.php">Informasi</a></li>
						<li><a href="galeri.php">Galeri</a><li>
						<li><a href="hasil.php">Hasil Penerimaan</a></li>
						<li><a href="login.php" class="button special">Sign In</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
		
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>HASIL PENERIMAAN PEMINATAN </h2>
						<p>Teknik Komputer dan Informatika</p>
					</header>
<form class="w3-container" name="peminatan" method="POST" action="">

<center><select name="siswa">
	<option value="">=====Pilih Nama Siswa=====</option>
	<?php
	$q = mysql_query("select * from siswa");
	while ($r = mysql_fetch_array($q)){
		echo "<option value = ".$r['nis'].">".$r['nama']."</option>";
	
	}
	?>
	</select>
	&nbsp; <input type="submit" name="pilih_siswa" value="Pilih">
	</center>
	</form>
	<?php
	
	
	
	
	?>
	<?php
		if(isset($_POST['pilih_siswa'])){

			$nis = $_POST['siswa'];
			$kueri = mysql_query("select s.nis, s.nama, m.mapel, n.nilai from siswa s, mapel m, nilai n where s.nis = '$nis' and m.kode_mapel = n.kode_mapel");
			$r2 = mysql_fetch_array($kueri);
			echo "<p>NIS: ".$r2[0]."</p>";
			echo "<p>Nama: ".$r2[1]."</p>";
			$kueri2 = mysql_query("select * from peminatan where nis = '$nis'");
			$r3 = mysql_fetch_array($kueri2);
			echo "<p>Anda Diterima Di  Jurusan : <b>$r3[2]</b></p>";

	}
	?>
</body>
</html>
