<?php
include "db_connection.php";
$conn = OpenCon();
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$angkatan = $_POST['angkatan'];

$query = "INSERT INTO user (username,pass, nama, nim, email,alamat, no_hp, angkatan, tipe_user) VALUES ('$username','$password','$nama','$nim'
,'$email','$alamat','$no_hp', '$angkatan',1)";
mysqli_query($conn,$query);

header ("location: index.php");
CloseCon($conn);
?>
