<!DOCTYPE html>
<?php
include 'db_connection.php';
$conn = OpenCon();

session_start();

if(isset($_GET['cari2'])){
  $cari2 = $_GET['cari2'];
  $query = "SELECT * FROM user WHERE  nim = '$cari2' && tipe_user = 1 ";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();
  $_SESSION["cari"] = $cari2;
  $_SESSION["nikdosen"] = $row['nik'];
  $query2 = "SELECT * FROM user WHERE upper(nama) LIKE  upper('%".$_SESSION["nikdosen"]."%')";
  $result2 = $conn->query($query2);
  $row2 = $result2->fetch_assoc();
  $sempro = $row['namafile'];
}

$nama = $_SESSION["user"];
$query1 = "SELECT * FROM user WHERE username='$nama'";
$result1 = $conn->query($query1);
$row1 = $result1->fetch_assoc();




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
</head>

<body id="page-top">
  <nav class="navbar navbar-light navbar-expand-md" style="background-color: #214a80;height: 170px;">
    <div class="container-fluid"><img src="assets/img/Undip.png" style="height: 119px;width: 105px;">
      <div class="container">
        <div>
          <h1 style="color: rgb(255,255,255);font-size: 60px;font-family: ABeeZee, sans-serif;">Selamat Datang di SITA!</h1>
        </div>
        <div>
          <h1 style="font-size: 20px;color: rgb(255,255,255);margin-left: 20px;"><?php echo $row1["nama"];?></h1>
        </div>
        <div>
          <h1 style="font-size: 20px;color: rgb(255,255,255);margin-left: 20px;"><?php echo $row1["nim"];?></h1>
        </div>
        <div>
          <h1 style="font-size: 20px;color: rgb(255,255,255);margin-left: 20px;"><?php if($row1["tipe_user"] == 3) {echo "Koor TA";} else {echo "Tata Usaha";}?></h1>
        </div>
      </div>
      <header></header>
      <header style="margin-top: 30px;margin-left: -34px;"></header><a class="btn btn-primary ml-auto" role="button" href="logout.php" style="background-color: #2980ef;">Log Out</a></div>
    </nav>
    <div id="wrapper">
      <nav class="navbar navbar-dark align-items-start" style="background-color: #1d7ef2;height: 1100px;width: 250px;">
        <div class="container-fluid d-flex flex-column p-0">
          <ul class="nav navbar-nav text-light" id="accordionSidebar">

            <li class="nav-item" role="presentation" style="background-color: #00aacc;"></li>
            <li class="nav-item" role="presentation" style="background-color: #00aacc;"></li>
            <?php if($row1['tipe_user'] == 3) { ?><li class="nav-item" role="presentation"><a class="nav-link" href="kuota_dosen.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Kuota Dosen</span></a></li> <?php }?>
            <li class="nav-item" role="presentation"><a class="nav-link" href="data_mahasiswa.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Data &nbsp;Mahasiswa</span></a></li>
            <li class="nav-item" role="presentation" style="background-color: #00aacc;"></li>
            <?php if($row1['tipe_user'] == 4) { ?><li class="nav-item" role="presentation"><a class="nav-link" href="status_mahasiswa.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Status Mahasiswa</span></a></li> <?php }?>
            <?php if($row1['tipe_user'] == 4) { ?><li class="nav-item" role="presentation"><a class="nav-link" href="doswal_mahasiswa.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Dosen Wali</span></a></li> <?php }?>
          </ul>
        </div>
      </nav>
      <div class="d-flex flex-column" id="content-wrapper" style="width: 943px;background-color: rgb(255,255,255);">
        <div id="content">
          <div class="container-fluid" style="padding: 0px;padding-top: 35px;padding-right: 40px;padding-left: 40px;">
            <div class="card shadow mb-4" style="width: 865px;">
              <div class="card-header py-3">
                <h2 class="text-center" style="padding-bottom: 0px;">Dosen Wali Mahasiswa</h2>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item" style="height: 130px;">
                  <div class="row align-items-center no-gutters">
                    <div>
                      <div class="form-group">
                        <div style="padding-left: 10px;padding-right: 10px;">
                          <h6 class="mb-0" style="padding-bottom: 10px;"><strong>NIM Mahasiswa &nbsp; &nbsp; :</strong></h6><form action="doswal_mahasiswa.php" method="get"><input placeholder="ex : 2107011714xxxx" name="cari2" type="number" style="width: 802px;"></div>
                          </div>
                        </div>
                      </div>
                      <input type="submit" class="btn btn-primary btn-sm d-none d-sm-inline-block" value="Search" name="Cari2" style="margin-left: 726px;width: 86px;">
                    </form></li>
                    <li class="list-group-item">
                      <form enctype="multipart/form-data" method="POST" action="upload_file_doswal.php">
                        <div><strong>Nama</strong><strong style="padding-left: 120px;">:</strong><strong style="padding-left: 25px;"><?php if(empty($cari2)){echo "Nama Mahasiswa";} else{echo $row['nama'];}?></strong></div>
                        <div><strong>NIM</strong><strong style="padding-left: 133px;">:</strong><strong style="padding-left: 25px;"><?php if(empty($cari2)){echo "NIM Mahasiswa";} else{echo $row['nim'];}?></strong></div>
                        <div><strong>Angkatan</strong><strong style="padding-left: 91px;">:</strong><strong style="padding-left: 25px;"><?php if(empty($cari2)){echo "Angkatan Mahasiswa";} else{echo $row['angkatan'];}?></strong></div>
                        <!--<div><strong>Judul Tugas Akhir</strong><strong style="padding-left: 33px;">:</strong><strong style="padding-left: 25px;"><?php if(empty($cari2)){echo "Judul TA";} else{echo $row['judulta'];}?></strong></div>-->
                        
                        <div class="form-group"><strong>Dosen Wali</strong><strong style="padding-left: 78px;">:</strong>
                          <select id='dosen_wali' class="form-control" name="dosen_wali">
                            <option value="" disabled selected>Dosen Wali Mahasiswa</option>
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

                        </div>
                        <!--<div><strong>Dosen Penguji 1</strong><strong style="padding-left: 167px;padding-right: 23px;">:</strong><input id='dosen_penguji1' name ="dosen_penguji1" type="text" style="width: 490px;">
                          <div></div>
                        </div>-->
                        
                        <!--<div><strong>Form Pra-Bimbingan</strong><strong style="padding-left: 10px;">:</strong><input name="fuploadform" type="file" style="padding-left: 23px;"></div>-->

                        <input type="submit" class="btn btn-primary btn-sm d-none d-sm-inline-block" type="submit" value="Save" name="Cari2" style="margin-left: 726px;width: 86px;">
                      </li>
                    </form>
                    <!--<li
                    class="list-group-item">
                    <form enctype="multipart/form-data" method="POST" action="upload_file.php" name="form1">
                      <h6 class="mb-0" style="padding-bottom: 10px;font-size: 19px;"><strong>Seminar Proposal</strong></h6>

                      <div><strong>Transkrip Seminar Proposal&nbsp;</strong><strong style="padding-left: 80px;">:</strong><input type="file" name="fupload" style="padding-left: 23px;"></div>

                      <div><strong>Dosen Penguji 1</strong><strong style="padding-left: 167px;padding-right: 23px;">:</strong><input id='dosen_penguji1' name ="dosen_penguji1" type="text" style="width: 490px;">
                        <div></div>
                      </div>
                      <div><strong>Dosen Penguji 2</strong><strong style="padding-left: 167px;padding-right: 23px;">:</strong><input id='dosen_penguji2' name ="dosen_penguji2" type="text" style="width: 490px;"></div>
                      <div><strong>Jadwal Seminar Proposal</strong><strong style="padding-left: 102px;padding-right: 23px;">:</strong><input id='jadwal' name="jadwal" type="date"></div>
                      <div><strong>Form Seminar Proposal</strong><strong style="padding-left: 115px;">:</strong><input name="fupload1" type="file" style="padding-left: 23px;"></div>
                      <div><strong>Lembar Bimbingan Seminar Proposal</strong><strong style="padding-left: 14px;">:</strong><input name="fupload2" type="file" style="padding-left: 23px;"></div>
                      <div><strong>Draft Proposal</strong><strong style="padding-left: 181px;">:</strong><input name="fupload3" type="file" style="padding-left: 23px;"></div>
                      <input type="submit" class="btn btn-primary btn-sm d-none d-sm-inline-block" type="submit" value="Save" name="Cari" style="margin-left: 726px;width: 86px;"></form>
                    </li>-->

                    <!--<li
                    class="list-group-item">
                    <h6 class="mb-0" style="padding-bottom: 10px;font-size: 19px;"><strong>Sidang</strong></h6>
                    <form enctype="multipart/form-data" method="POST" action="upload_file2.php" name="form2">
                      <div><strong>Transkrip Tugas Akhir</strong><strong style="padding-left: 128px;">:<input name="fupload4" type="file" style="padding-left: 23px;"></strong></div>
                      <div><strong>Dosen Penguji 1</strong><strong style="padding-left: 169px;margin-right: 23px;">:</strong><input id='dosen_penguji3' name ="dosen_penguji3" type="text" style="width: 490px;"></div>
                      <div><strong>Dosen Penguji 2</strong><strong style="padding-left: 169px;margin-right: 23px;">:</strong><input id='dosen_penguji4' name ="dosen_penguji4" type="text" style="width: 490px;"></div>
                      <div><strong>Jadwal Sidang</strong><strong style="padding-left: 184px;">:</strong><input id='jadwal2' name="jadwal2" type="date" style="margin-left: 23px;"></div>
                      <div><strong>Absensi Seminar Proposal Lain</strong><strong style="padding-left: 62px;">:</strong><input name="fupload5" type="file" style="padding-left: 23px;"></div>
                      <div><strong>Form Pendaftaran Tugas Akhir</strong><strong style="padding-left: 66px;">:</strong><input name="fupload6" type="file" style="padding-left: 23px;"></div>
                      <div><strong>Draft Tugas Akhir</strong><strong style="padding-left: 160px;">:</strong><input name="fupload7" type="file" style="padding-left: 23px;"></div>
                      <div><strong>Sertifikat TOEFL</strong><strong style="padding-left: 169px;">:</strong><input name="fupload8" type="file" style="padding-left: 23px;"></div>
                      <input type="submit" class="btn btn-primary btn-sm d-none d-sm-inline-block" type="submit" value="Save" name="Cari2" style="margin-left: 726px;width: 86px;">
                    </li></form>-->
                    <li class="list-group-item" style="height: 56px;"><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="index.php" style="margin-left: 664px;width: 150px;">Tutup</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('dosen_wali').value='<?php if(!empty($row['dosen_wali'])){echo $row['dosen_wali'];}?>';
        </script>
        <!--<script>
          document.getElementById('dosen_penguji1').value='<?php if(!empty($row['dosen_penguji1'])){echo $row['dosen_penguji1'];}?>';
          //document.getElementById('status').value='<?php if(!empty($row['status'])){echo $row['status'];}?>';
          document.getElementById('dosen_penguji2').value='<?php if(!empty($row['dosen_penguji2'])){echo $row['dosen_penguji2'];}?>';
          document.getElementById('dosen_penguji3').value='<?php if(!empty($row['dosen_penguji3'])){echo $row['dosen_penguji3'];}?>';
          document.getElementById('dosen_penguji4').value='<?php if(!empty($row['dosen_penguji4'])){echo $row['dosen_penguji4'];}?>';
          document.getElementById('jadwal').value='<?php if(!empty($row['jadwal'])){echo $row['jadwal'];}?>';
          document.getElementById('jadwal2').value='<?php if(!empty($row['jadwal2'])){echo $row['jadwal2'];}?>';
        </script>-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
        <script src="assets/js/theme.js"></script>
      </body>

      </html>
      <?php
      CloseCon($conn);

      ?>
