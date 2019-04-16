<!DOCTYPE html>
<html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dasis</title>
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
						<li><a href="hasil.php">Hasil Penerimaan</a></li>
                        <li><a href="login/index.php" class="button special">Sign In</a></li>
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
<center><h2>Data Siswa</h2></center>
</div>

<form class="w3-container" name="daftar" method="POST" action="act_daftar.php">

<p>
<label>Nis</label>
<input class="w3-input" type="text" name="nis"></p>

<p>
<label>Nama</label>
<input class="w3-input" type="text" name="nama"></p>

<p>
<label>Kelas</label>
<input class="w3-input" type="text" name="kelas"></p>

<p>
<label>Jurusan</label>
<input class="w3-input" type="text" name="jurusan"></p>

<p>
<label>Agama</label>
<input class="w3-input" type="text" name="agama"></p>

<p>
<label>No. Hp</label>
<input class="w3-input" type="text" name="no_hp"></p>

<p>
<label>Nama Orang Tua</label>
<input class="w3-input" type="text" name="nama_ortu"></p>

<p>
<label>No. Tlp</label>
<input class="w3-input" type="text" name="tlp_ortu"></p>


<input type="submit" class="button" name="submit" value="daftar">
<input type="reset" class="button" name="reset" value="reset">
</form>
</div>
            </section>

</body>
</html> 
