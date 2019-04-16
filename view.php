<?php
	include "koneksi.php";
	//mysql_connect("localhost","root","");
	mysql_select_db("peminatan");

		$nama = $_POST['nama'];
		
		$nis = $_POST['siswa'];
		$nilai1 = $_POST['1'];
		$nilai2 = $_POST['2'];
		$nilai3 = $_POST['3'];
		$nilai4 = $_POST['4'];
		$nilai5 = $_POST['5'];
		$nilai6 = $_POST['6'];

		$mapel1 = array(
			1 => $nilai1,
			2 => $nilai2,
			3 => $nilai3,
			4 => $nilai4,
			5 => $nilai5,
			6 => $nilai6
			);
		
		for($i=1;$i<=6;$i++){
			mysql_query("insert into nilai values(null, '$nis', '$i', '$mapel1[$i]')");
		}
	header("location:elements.php")
?>
