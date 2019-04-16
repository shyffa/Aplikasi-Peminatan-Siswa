<?php
	mysql_connect("localhost","root","");
	mysql_select_db("peminatan");
	
	$q = mysql_query("select * from siswa");
	while($r = mysql_fetch_array($q)){
		echo $r[1]."<br>";
		$no_hp = $_POST['nis'];
		$nama_ortu = $_POST['kode_mapel'];
		$tlp_ortu = $_POST['nilai'];
		
		mysql_query("insert into siswa(nis, kode_mapel, nilai) values('$nis', '$kode_mapel', '$nilai')");
	
	header("location:elements.html")
	}
?>