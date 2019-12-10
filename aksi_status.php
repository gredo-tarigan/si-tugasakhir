<?php
include "db_connection.php";
$conn = OpenCon();
session_start();
$cari2 = $_GET['cari2'];
$status = $_POST['status_mahasiswa'];
// Baca lokasi file sementar dan nama file dari form (fupload
// Apabila file berhasil di upload
$query = "UPDATE user SET status = '$status' WHERE nim = '$cari2'";
mysqli_query($conn,$query);
header ("location: status_mahasiswa.php");
CloseCon($conn);


?>
