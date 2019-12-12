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
/*
$_SESSION["nikdosen"] = $row['nik'] && $row['nik2'];

$query1 = "SELECT * FROM user WHERE upper(nama) LIKE  upper('%".$_SESSION["nikdosen"]."%')";
$result1 = $conn->query($query1);
$row1 = $result1->fetch_assoc();
*/



?>


<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Untitled</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
  <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
  <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
  <link rel="stylesheet" href="assets/css/styles.css">
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
          <form action="daftarta.php" method="post">
            <h2 class="text-center">Pendaftaran Tugas Akhir</h2>
            <div class="form-group"><input class="form-control" name="judulta" type="text" placeholder="<?php if(!empty($row["judulta"])) {echo $row["judulta"]; } else {echo "Judul Tugas Akhir";}?>" <?php if(!empty($row["judulta"])) {echo "disabled";} ?>></div>
            <div class="form-group">
              <select class="form-control" name="nik" <?php if(!empty($row["nik"])) {echo "disabled";} ?>>
                <option value="" disabled selected><?php if(!empty($row["nik"])) { echo $row["nik"]; } else {echo "Nama Dosen Pembimbing 1";}?></option>
                <option value="Dr.Ir.RM. Haryo Santoso , MM">Dr.Ir.RM. Haryo Santoso , MM</option>
                <option value="Ir. Heru Prastawa, DEA">Ir. Heru Prastawa, DEA</option>
                <option value="Dr. Aries Susanty, ST, MT">Dr. Aries Susanty, ST, MT</option>
                <option value="Susatyo Nugroho WP, ST, MM">Susatyo Nugroho WP, ST, MM</option>
                <option value="Denny Nurkartamanda, ST, MT">Denny Nurkartamanda, ST, MT</option>
                <option value="Rani Rumita, ST, MT">Rani Rumita, ST, MT</option>
                <option value="Zainal Fanani R, ST">Zainal Fanani R, ST</option>
                <option value="Purnawan Adi W , ST, MT">Purnawan Adi W , ST, MT</option>
                <option value="Dr. Ratna Purwaningsih, ST, MT">Dr. Ratna Purwaningsih, ST, MT</option>
                <option value="Darminto Pujotomo, ST, MT">Darminto Pujotomo, ST, MT</option>
                <option value="Dr. rer. Occ. Arfan Bakhtiar, ST, MT">Dr. rer. Occ. Arfan Bakhtiar, ST, MT</option>
                <option value="Sriyanto, ST, MT">Sriyanto, ST, MT</option>
                <option value="Dr. Singgih Saptadi, ST, MT">Dr. Singgih Saptadi, ST, MT</option>
                <option value="Sri Hartini, ST, MT">Sri Hartini, ST, MT</option>
                <option value="Dr. Naniek Utami Handayani, S.Si, MT">Dr. Naniek Utami Handayani, S.Si, MT</option>
                <option value="Dr. Hery Suliantoro, ST, MT">Dr. Hery Suliantoro, ST, MT</option>
                <option value="Diana Puspitasari, ST, MT">Diana Puspitasari, ST, MT</option>
                <option value="Ary Arvianto, ST, MT">Ary Arvianto, ST, MT</option>
                <option value="Dr. Ing. Novie Susanto, ST, M.Eng">Dr. Ing. Novie Susanto, ST, M.Eng</option>
                <option value="Dyah Ika Rinawati, ST, MT">Dyah Ika Rinawati, ST, MT</option>
              </select>
              <br>
              <select class="form-control" name="nik2" style="width=200px" <?php if(!empty($row["nik2"])) {echo "disabled";} ?>>
                <option value="" disabled selected><?php if(!empty($row["nik2"])) { echo $row["nik2"]; } else {echo "Nama Dosen Pembimbing 2";}?></option>
                <option value="Dr.Ir.RM. Haryo Santoso , MM">Dr.Ir.RM. Haryo Santoso , MM</option>
                <option value="Ir. Heru Prastawa, DEA">Ir. Heru Prastawa, DEA</option>
                <option value="Dr. Aries Susanty, ST, MT">Dr. Aries Susanty, ST, MT</option>
                <option value="Susatyo Nugroho WP, ST, MM">Susatyo Nugroho WP, ST, MM</option>
                <option value="Denny Nurkartamanda, ST, MT">Denny Nurkartamanda, ST, MT</option>
                <option value="Rani Rumita, ST, MT">Rani Rumita, ST, MT</option>
                <option value="Zainal Fanani R, ST">Zainal Fanani R, ST</option>
                <option value="Purnawan Adi W , ST, MT">Purnawan Adi W , ST, MT</option>
                <option value="Dr. Ratna Purwaningsih, ST, MT">Dr. Ratna Purwaningsih, ST, MT</option>
                <option value="Darminto Pujotomo, ST, MT">Darminto Pujotomo, ST, MT</option>
                <option value="Dr. rer. Occ. Arfan Bakhtiar, ST, MT">Dr. rer. Occ. Arfan Bakhtiar, ST, MT</option>
                <option value="Sriyanto, ST, MT">Sriyanto, ST, MT</option>
                <option value="Dr. Singgih Saptadi, ST, MT">Dr. Singgih Saptadi, ST, MT</option>
                <option value="Sri Hartini, ST, MT">Sri Hartini, ST, MT</option>
                <option value="Dr. Naniek Utami Handayani, S.Si, MT">Dr. Naniek Utami Handayani, S.Si, MT</option>
                <option value="Dr. Hery Suliantoro, ST, MT">Dr. Hery Suliantoro, ST, MT</option>
                <option value="Diana Puspitasari, ST, MT">Diana Puspitasari, ST, MT</option>
                <option value="Ary Arvianto, ST, MT">Ary Arvianto, ST, MT</option>
                <option value="Dr. Ing. Novie Susanto, ST, M.Eng">Dr. Ing. Novie Susanto, ST, M.Eng</option>
                <option value="Dyah Ika Rinawati, ST, MT">Dyah Ika Rinawati, ST, MT</option>
              </select>
              <br>
              <input type="submit" class="btn btn-primary btn-sm d-none d-sm-inline-block" type="submit" value="Daftar" name="Cari2" style="margin-left: 726px;width: 86px;" <?php if(!empty($row["nik"]) && !empty($row["judulta"]) && !empty($row["nik2"])) {echo "disabled";} ?>>
            </form>
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
