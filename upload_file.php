<?php
include "db_connection.php";
$conn = OpenCon();
session_start();
$nimcari = $_SESSION["cari"];
$dospeng1 = $_POST['dosen_penguji1'];
$dospeng2 = $_POST['dosen_penguji2'];
$jadwal = $_POST['jadwal'];
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";

// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

}
else{
  echo "File gagal di upload";
}



$lokasi_file = $_FILES['fupload1']['tmp_name'];
$nama_file   = $_FILES['fupload1']['name'];

// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";

// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

}
else{
  echo "File gagal di upload";
}

$lokasi_file = $_FILES['fupload2']['tmp_name'];
$nama_file   = $_FILES['fupload2']['name'];

// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";

// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

}
else{
  echo "File gagal di upload";
}

$lokasi_file = $_FILES['fupload3']['tmp_name'];
$nama_file   = $_FILES['fupload3']['name'];

// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

}
else{
  echo "File gagal di upload";
}
$lokasi_file = $_FILES['fupload4']['tmp_name'];
$nama_file   = $_FILES['fupload4']['name'];

// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

}
else{
  echo "File gagal di upload";
}

// Apabila file berhasil di upload

$query = "UPDATE user SET dosen_penguji1 = '$dospeng1', dosen_penguji2 = '$dospeng2', jadwal = '$jadwal' WHERE nim = '$nimcari'";
mysqli_query($conn,$query);
header ("location: data_mahasiswa.php");
CloseCon($conn);


?>
