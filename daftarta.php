<?php
include "db_connection.php";
$conn = OpenCon();
session_start();
$judulta = $_POST['judulta'];
$nik = $_POST['nik'];
$nama = $_SESSION["user"];

// Baca lokasi file sementar dan nama file dari form (fupload
// Apabila file berhasil di upload
$query = "UPDATE user SET judulta = '$judulta', nik = '$nik' WHERE username = '$nama'";
mysqli_query($conn,$query);
header ("location: daftar_ta.php");
CloseCon($conn);


?>
