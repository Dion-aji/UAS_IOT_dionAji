<?php 
include 'config.php';

$id_ikan = $_GET ['id_ikan'];
$tinggi_air = $_GET['tinggi_air'];
$nama_ikan = $_GET['nama_ikan'];

$sql = "INSERT INTO tb_tinggi_air (id_tinggi_air, id_ikan, tinggi_air, nama_ikan) VALUES (NULL,'$id_ikan', '$tinggi_air', '$nama_ikan')";

if (mysqli_query($conn, $sql)) {
  echo " | Data diperbarui....";
} else {
  echo " Gagal : " . $sql . "<br>" . mysqli_error($conn);
}