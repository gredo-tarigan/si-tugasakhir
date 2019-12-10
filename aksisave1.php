<?php
include "db_connection.php";
$conn = OpenCon();
session_start();
$namadosen = $_POST['namadosen'];
$judulta = $_POST['judulta'];
$nimcari = $_SESSION['nimcari'];
$query = "UPDATE user SET nik = '$namadosen', judulta='$judulta' WHERE  nim = '$nimcari'";
mysqli_query($conn,$query);
header ("location: kuota_dosen.php");
CloseCon($conn);
?>
