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
$doswal = $_POST['dosen_wali'];
//$status_dolar = $_POST['status'];


$query = "UPDATE user SET dosen_wali = '$doswal' WHERE nim = '$nimcari'";
mysqli_query($conn,$query);
header ("location: doswal_mahasiswa.php");
CloseCon($conn);

?>

