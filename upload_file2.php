<?php
include "db_connection.php";
$conn = OpenCon();
session_start();
$nimcari = $_SESSION["cari"];
$dospeng3 = $_POST['dosen_penguji3'];
$dospeng4 = $_POST['dosen_penguji4'];
$jadwal2 = $_POST['jadwal2'];
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload4']['tmp_name'];
$nama_file   = $_FILES['fupload4']['name'];
// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";

// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

}
else{
  echo "File gagal di upload";
}



$lokasi_file = $_FILES['fupload5']['tmp_name'];
$nama_file   = $_FILES['fupload5']['name'];

// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";

// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

}
else{
  echo "File gagal di upload";
}

$lokasi_file = $_FILES['fupload6']['tmp_name'];
$nama_file   = $_FILES['fupload6']['name'];

// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";

// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

}
else{
  echo "File gagal di upload";
}

$lokasi_file = $_FILES['fupload7']['tmp_name'];
$nama_file   = $_FILES['fupload7']['name'];

// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

}
else{
  echo "File gagal di upload";
}
$lokasi_file = $_FILES['fupload8']['tmp_name'];
$nama_file   = $_FILES['fupload8']['name'];

// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

}
else{
  echo "File gagal di upload";
}

// Apabila file berhasil di upload

$query = "UPDATE user SET dosen_penguji3 = '$dospeng3', dosen_penguji4 = '$dospeng4', jadwal2 = '$jadwal2' WHERE nim = '$nimcari'";
mysqli_query($conn,$query);
header ("location: data_mahasiswa.php");
CloseCon($conn);


?>
