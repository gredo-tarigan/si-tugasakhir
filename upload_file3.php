<?php
include "db_connection.php";
$conn = OpenCon();
session_start();
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fuploadform']['tmp_name'];
$nama_file   = $_FILES['fuploadform']['name'];
// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";

//Baru ditambahkan *Gredo
$nimcari = $_SESSION["cari"];
$status_dolar = $_POST['status'];


$query = "UPDATE user SET status = '$status_dolar' WHERE nim = '$nimcari'";
mysqli_query($conn,$query);
header ("location: status_mahasiswa.php");
CloseCon($conn);


?>