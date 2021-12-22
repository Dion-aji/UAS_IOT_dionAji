<?php
//Dion Aji cahyono | Ti D

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_minapadi";

// membuat koneksi 
$conn = mysqli_connect($servername, $username, $password, $database);

// mengecek koneksi
if (!$conn) {
  die("Gagal terhubung ke MYSQL: " . mysqli_connect_error());
}
echo "Oke";
?>