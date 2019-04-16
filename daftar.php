<?php
	include "koneksi.php";
	//mysql_connect("localhost","root","");
	mysql_select_db("peminatan");
	
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$jurusan = $_POST['jurusan'];
		$agama = $_POST['agama'];
		$no_hp = $_POST['no_hp'];
		$nama_ortu = $_POST['nama_ortu'];
		$tlp_ortu = $_POST['tlp_ortu'];
		
		mysql_query("insert into siswa(nis, nama, kelas, jurusan, agama, no_hp, nama_ortu, tlp_ortu) values('$nis', '$nama', '$kelas', '$jurusan', '$agama', '$no_hp', '$nama_ortu', '$tlp_ortu')");
	
	header("location:linkpemi.html")
?>