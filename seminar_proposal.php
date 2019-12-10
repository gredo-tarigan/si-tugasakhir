<!DOCTYPE html>
<?php
include 'db_connection.php';
$conn = OpenCon();

session_start();
if( !isset($_SESSION["user"])) {
	header("Location: index.php");
}

$nama = $_SESSION["user"];
$query = "SELECT * FROM user WHERE username='$nama'";
$query2 = "SELECT dosen_wali FROM user WHERE username='$nama'";

$result = $conn->query($query);
$row = $result->fetch_assoc();
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blank Page - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <style type="text/css">
            #kiri
            {
            width:50%;
            
            
            float:left;
            }
            #kanan
            {
            width:50%;
           
            
            float:right;
            }
    </style>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #214a80;height: 170px;">
        <div class="container-fluid"><img src="assets/img/Undip.png" style="height: 119px;width: 105px;">
            <div class="container">
                <div>
                    <h1 style="color: rgb(255,255,255);font-size: 60px;font-family: ABeeZee, sans-serif;">Selamat Datang di SITA!</h1>
                </div>
                <div>
                    <h1 style="font-size: 20px;color: rgb(255,255,255);margin-left: 20px;"><?php echo $row["nama"];?></h1>
                </div>
                <div>
                    <h1 style="font-size: 20px;color: rgb(255,255,255);margin-left: 20px;"><?php echo $row["nim"];?></h1>
                </div>
                <div>
                    <div id="kiri"><h1 style="font-size: 20px;color: rgb(255,255,255);margin-left: 20px;"><?php echo "Mahasiswa - "; echo $row["status"];?></h1></div>
                    <div id="kanan"><h1 style="font-size: 20px;color: rgb(255,255,255);margin-left: 20px;"><?php echo "Dosen Wali : "; echo $row["dosen_wali"]; /*koding kalo belum daftar doswal : masih gagal if(is_null($query2)){echo "Lapor ke TU Untuk Mendaftar Dosen Wali";} else{echo $row['dosen_wali'];}*/?></h1></div>
                </div>
            </div>
            <header></header>
            <header style="margin-top: 30px;margin-left: -34px;"></header><a class="btn btn-primary ml-auto" role="button" href="logout.php" style="background-color: #2980ef;">Log Out</a></div>
        </nav>
        <div id="wrapper">
            <nav class="navbar navbar-dark align-items-start" style="background-color: #1d7ef2;height: 830px;width: 250px;">
                <div class="container-fluid d-flex flex-column p-0">
                    <ul class="nav navbar-nav text-light" id="accordionSidebar">
                      <li class="nav-item" role="presentation" style="margin-top: 25px;"><a class="nav-link" href="daftar_ta.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Pendaftaran TA</span></a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" href="seminar_proposal.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Seminar Proposal</span></a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" href="sidang.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Sidang Skripsi</span></a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" href="donlod_berkas.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Download Berkas</span></a></li>
                  </ul>
              </div>
          </nav>
          <div class="d-flex flex-column" id="content-wrapper" style="width: 943px;background-color: rgb(255,255,255);">
            <div id="content">
                <div class="container-fluid" style="padding: 0px;padding-top: 35px;padding-right: 100px;padding-left: 100px;">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h2 class="text-center" style="padding-bottom: 0px;">Jadwal Seminar &nbsp;Proposal</h2>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</strong><strong style="padding-left: 25px;"><?php echo $row["nama"];?></strong></li>
                            <li class="list-group-item"><strong>NIM &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</strong><strong style="padding-left: 25px;"><?php echo $row["nim"];?></strong></li>
                            <li class="list-group-item"><strong>Judul Tugas Akhir &nbsp; &nbsp; &nbsp; &nbsp;:</strong><strong style="padding-left: 25px;"><?php echo $row["judulta"];?></strong></li>
                            <li class="list-group-item"><strong>Dosen Pembimbing &nbsp; &nbsp;:</strong><strong style="padding-left: 25px;"><?php echo $row["nik"];?></strong></li>
                            <li class="list-group-item"><strong>Dosen Penguji 1 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</strong><strong style="padding-left: 25px;"><?php echo $row["dosen_penguji1"];?></strong></li>
                            <li class="list-group-item"><strong>Dosen Penguji 2 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</strong><strong style="padding-left: 25px;"><?php echo $row["dosen_penguji2"];?></strong></li>
                            <li class="list-group-item"><strong>Tanggal Seminar &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</strong><strong style="padding-left: 25px;"><?php echo $row["jadwal"];?></strong></li>
                        </ul>
                    </div>
                    <div class="form-group" style="padding-left: 585px;padding-top: px;"><button class="btn btn-primary" type="submit" style="margin-left: 30px;width: 130px;">Tutup</button></div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
<?php
CloseCon($conn);

?>
