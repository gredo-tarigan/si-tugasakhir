<?php
include "db_connection.php";
$conn = OpenCon();
session_start();
$namadosen = $_POST['namadosen'];
$namadosen2 = $_POST['namadosen2'];
$judulta = $_POST['judulta'];
$nimcari = $_SESSION['nimcari'];
$query = "UPDATE user SET nik = '$namadosen', nik2 = '$namadosen2', judulta='$judulta' WHERE  nim = '$nimcari'";
mysqli_query($conn,$query);
header ("location: kuota_dosen.php");
CloseCon($conn);
?>
