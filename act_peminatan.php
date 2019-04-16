<?php
	mysql_connect("localhost","root","1");
	mysql_select_db("peminatan");
	
	$nis = $_POST['nis2'];
	$pil = $_POST['pilihan'];

	mysql_query("insert into peminatan(nis, pilihan) values('$nis', '$pil')");
	header("location:index.php");
?>
