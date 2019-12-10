<!DOCTYPE html>
<?php
include 'db_connection.php';
$conn = OpenCon();

session_start();
$namadosen = "";
$cari2 = "";
if(isset($_GET['cari2'])){
                          $cari2 = $_GET['cari2'];
                          $query = "SELECT * FROM user WHERE  upper(nik)  LIKE upper('%".$cari2."%')";
                          $query1 = "SELECT * FROM user WHERE upper(nama) LIKE  upper('%".$cari2."%')";

}
else{
  $query = "SELECT * FROM user WHERE username='dummy'";
  $query1 = "SELECT * FROM user";
}
$result = $conn->query($query);
$result1 = $conn->query($query1);
$row1 = $result1->fetch_assoc();


$nama = $_SESSION["user"];
$query3 = "SELECT nama,nim,tipe_user FROM user WHERE username='$nama'";

$result3 = $conn->query($query3);
$row3 = $result3->fetch_assoc();
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SITA Teknik Industri</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #214a80;height: 170px;">
        <div class="container-fluid"><img src="assets/img/Undip.png" style="height: 119px;width: 105px;">
            <div class="container">
                <div>
                    <h1 style="color: rgb(255,255,255);font-size: 60px;font-family: ABeeZee, sans-serif;">Selamat Datang di SITA!</h1>
                </div>
                <div>
                    <h1 style="font-size: 20px;color: rgb(255,255,255);margin-left: 20px;"><?php echo $row3["nama"];?></h1>
                </div>
                <div>
                    <h1 style="font-size: 20px;color: rgb(255,255,255);margin-left: 20px;"><?php echo $row3["nim"];?></h1>
                </div>
								<div>
                    <h1 style="font-size: 20px;color: rgb(255,255,255);margin-left: 20px;"><?php
                    if( isset($_SESSION["user"])) {
										  switch($_SESSION["tipe_user"]) {
										    case 1: echo "Mahasiswa"; break;
										    case 2: echo "Dosen"; break;
										    case 3: echo "Koor TA"; break;
										    case 4: echo "Tata Usaha"; break;
										  }
										}
?></h1>
                </div>
            </div>
            <header></header>
            <header style="margin-top: 30px;margin-left: -34px;"></header><a class="btn btn-primary ml-auto" role="button" href="logout.php" style="background-color: #2980ef;">Log Out</a></div>
    </nav>
    <div id="wrapper">
      <nav class="navbar navbar-dark align-items-start" style="background-color: #1d7ef2;height: 830px;width: 250px;">
          <div class="container-fluid d-flex flex-column p-0">
              <ul class="nav navbar-nav text-light" id="accordionSidebar">

                  <li class="nav-item" role="presentation" style="background-color: #00aacc;"></li>
                    <li class="nav-item" role="presentation" style="background-color: #00aacc;"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="kuota_dosen.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Kuota Dosen</span></a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="data_mahasiswa.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Data &nbsp;Mahasiswa</span></a></li>
              </ul>
          </div>

      </nav>
        <div class="d-flex flex-column" id="content-wrapper" style="width: 943px;background-color: rgb(255,255,255);">
            <div id="content">
                <div class="container-fluid" style="padding: 0px;padding-top: 35px;padding-right: 40px;padding-left: 40px;">
                    <div class="card shadow mb-4" style="width: 865px;">
                        <div class="card-header py-3">
                            <h2 class="text-center" style="padding-bottom: 0px;">Kuota Dosen</h2>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="height: 130px;">
                                <div class="row align-items-center no-gutters">
                                    <div>
                                        <div class="form-group">
                                            <div style="padding-left: 10px;padding-right: 10px;">
                                                <h6 class="mb-0" style="padding-bottom: 10px;"><strong>Nama Dosen &nbsp; &nbsp; :</strong></h6><form action="kuota_dosen.php" method="get"><select class="form-control" name="cari2" style="width=200px">
                                                <option value="" disabled selected>Nama Dosen</option>
                                                <option value="haryo santoso">Dr.Ir.RM. Haryo Santoso , MM</option>
                                                <option value="heru prastawa">Ir. Heru Prastawa, DEA</option>
                                                <option value="aries susanty">Dr. Aries Susanty, ST, MT</option>
                                                <option value="susatyo nugroho">Susatyo Nugroho WP, ST, MM</option>
                                                <option value="denny nurkartamanda">Denny Nurkartamanda, ST, MT</option>
                                                <option value="rani rumita">Rani Rumita, ST, MT</option>
                                                <option value="Zainal Fanani">Zainal Fanani R, ST</option>
                                                <option value="Purnawan Adi">Purnawan Adi W , ST, MT</option>
                                                <option value="Ratna Purwaningsih">Dr. Ratna Purwaningsih, ST, MT</option>
                                                <option value="Darminto Pujotomo">Darminto Pujotomo, ST, MT</option>
                                                <option value="Arfan Bakhtiar">Dr. rer. Occ. Arfan Bakhtiar, ST, MT</option>
                                                <option value="Sriyanto">Sriyanto, ST, MT</option>
                                                <option value="Singgih Saptadi">Dr. Singgih Saptadi, ST, MT</option>
                                                <option value="Sri Hartini">Sri Hartini, ST, MT</option>
                                                <option value="Naniek Utami Handayani">Dr. Naniek Utami Handayani, S.Si, MT</option>
                                                <option value="Hery Suliantoro">Dr. Hery Suliantoro, ST, MT</option>
                                                <option value="Diana Puspitasari">Diana Puspitasari, ST, MT</option>
                                                <option value="Ary Arvianto">Ary Arvianto, ST, MT</option>
                                                <option value="Novie Susanto">Dr. Ing. Novie Susanto, ST, M.Eng</option>
                                                <option value="Dyah Ika Rinawati">Dyah Ika Rinawati, ST, MT</option>
                                    </select></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-sm d-none d-sm-inline-block" value="Search" name="Cari2" style="margin-left: 726px;width: 86px;">
                              </form></li>
                            <li class="list-group-item">
                                <div><strong>Nama Dosen</strong><strong style="padding-left: 60px;">:</strong><strong style="padding-left: 25px;"><?php if(empty($cari2)){echo "Nama Dosen";} else {echo $row1['nama'];}?></strong></div>
                                <div><strong>NIK</strong><strong style="padding-left: 128px;">:</strong><strong style="padding-left: 25px;"><?php if(empty($cari2)){echo "NIK Dosen";} else {echo $row1['nim'];}?></strong></div>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-0" style="padding-bottom: 10px;font-size: 19px;"><strong>Mahasiswa Bimbingan</strong></h6>
                                <div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama Mahasiswa</th>
                                                    <th>NIM</th>
                                                    <th>Alamat</th>
                                                    <th>No. HP</th>
                                                    <th>Angkatan</th>
                                                    <th>Judul Tugas Akhir</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php
                                                  while ($row = mysqli_fetch_array($result)) {
                                               ?>
                                                <tr>
                                                    <td><?php if(empty($cari2)){echo "Nama Mahasiswa";} else {echo $row['nama'];}?></td>
                                                    <td><?php if(empty($cari2)){echo "NIM Mahasiswa";} else{echo $row['nim'];}?></td>
                                                    <td><?php if(empty($cari2)){echo "Alamat Mahasiswa";} else{echo $row['alamat'];}?></td>
                                                    <td>+<?php if(empty($cari2)){echo "No HP Mahasiswa";} else{echo $row['no_hp'];}?></td>
                                                    <td><?php if(empty($cari2)){echo "Angkatan Mahasiswa";} else{echo $row['angkatan'];}?></td>
                                                    <td><?php if(empty($cari2)){echo "Judul TA Mahasiswa";} else{echo $row['judulta'];}?></td>
                                                    <td>
                                                    <a href='aksi_editdosen.php?nim=<?php echo $row['nim']; ?>' class="btn btn-primary">Edit</a></td>
                                                </tr>
                                              <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item" style="height: 56px;"><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="index.php" style="margin-left: 664px;width: 150px;">Tutup</a></li>
                        </ul>
                    </div>
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
