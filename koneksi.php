<?php
$servername = "localhost";
$username = "root";
$password = "1";

// Create connection
$conn = mysql_connect($servername, $username, $password);
mysql_select_db("peminatan",$conn);
// Check connection
if (!$conn) {

    die("Connection failed: " . mysql_connect_error());
}
echo "Connected successfully";
?> 