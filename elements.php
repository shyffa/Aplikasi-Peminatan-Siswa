
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
		<script src="../js/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		
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
						<h2>Informasi, Berita dan Pengumuman</h2>
						<p>Seputar SMKN1 Katapang & Teknik Komputer dan Informatika</p>
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
	
	/*
			$a = mysql_query("select * from peminatan where nis='$r[nis]'");
			$diterima = mysql_fetch_array($a);
			echo "<p>Anda Diterima Di  Jurusan : <b>$diterima[pilihan]</b></p>";
	*/
	
	?>
	<?php
		if(isset($_POST['pilih_siswa'])){

			$nis = $_POST['siswa'];
			$kueri = mysql_query("select s.nis, s.nama, m.mapel, n.nilai from siswa s, mapel m, nilai n where s.nis = '$nis' and m.kode_mapel = n.kode_mapel");
			$r2 = mysql_fetch_array($kueri);
			echo "<p>NIS: ".$r2[0]."</p>";
			echo "<p>Nama: ".$r2[1]."</p>";
		
			echo "<table>";
			echo "<caption>Nilai</caption>";
			echo "<tr>";
				echo "<th>";
					echo "Mata Pelajaran";
				echo "</th>";
				echo "<th>";
					echo "Nilai";
				echo "</th>";
			echo "</tr>";
			while ($row = mysql_fetch_array($kueri)) {
				echo "<tr>";
					echo "<td>";
						echo $row[2];
					echo "</td>";
					echo "<td>";
						echo $row[3];
					echo "</td>";
				echo "</tr>";
			}
			echo "</tr>";
			echo "<table>";
	echo "<center>";
	echo "<p>Masukkan Paket Keahlian yang anda minati</p>";
	echo "<form name='pilih_paket' method='POST' action='act_peminatan.php'>";
	echo "<input type='header' name='nis2' value=$nis hidden>";
	echo "<p><select name='pilihan'>";
		echo "<option value='Teknik Komputer dan Jaringan'>Teknik Komputer dan Jaringan</option>";
		echo "<option value='Rekayasa Perangkat Lunak'>Rekayasa Perangkat Lunak</option>";
		echo "<option value='Multimedia'>Multimedia</option>";
	echo "</select></p>";
	echo "<input type='submit' class='button' name='submit' value='submit'>";
	echo "<input type='reset' class='button button2' name='reset' value='reset'></center>";
	echo "</form>";
	echo "</center>";


	}
	?>
</body>
</html>
