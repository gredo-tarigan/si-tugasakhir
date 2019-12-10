<!DOCTYPE html>
<?php
include 'db_connection.php';
$conn = OpenCon();

session_start();
$nama = $_SESSION["user"];
$query = "SELECT * FROM user WHERE username='$nama'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$doswal = $row['nama'];

$query2 = "SELECT * FROM user WHERE dosen_wali='$doswal'";
$result2 = $conn->query($query2);
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
          <h1 style="font-size: 20px;color: rgb(255,255,255);margin-left: 20px;"><?php echo $row["nama"];?></h1>
        </div>
        <div>
          <h1 style="font-size: 20px;color: rgb(255,255,255);margin-left: 20px;"><?php echo $row["nim"];?></h1>
        </div>
        <div>
          <h1 style="font-size: 20px;color: rgb(255,255,255);margin-left: 20px;"><?php echo "Dosen"?></h1>
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
            <li class="nav-item" role="presentation"><a class="nav-link" href="mhs_bimbingan.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Mahasiswa Bimbingan</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="mhs_wali.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Mahasiswa Perwalian</span></a></li>
          </ul>
        </div>

      </nav>
      <div class="d-flex flex-column" id="content-wrapper" style="width: 943px;background-color: rgb(255,255,255);">
        <div id="content">
          <div class="container-fluid" style="padding: 0px;padding-top: 35px;padding-right: 40px;padding-left: 40px;">
            <div class="card shadow mb-4" style="width: 865px;">
              <div class="card-header py-3">
                <h2 class="text-center" style="padding-bottom: 0px;">Mahasiswa Perwalian</h2>
              </div>
              <ul class="list-group list-group-flush">



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
                          <!--<th>Judul Tugas Akhir</th>-->
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while ($row2 = mysqli_fetch_array($result2)) {
                         ?>
                         <tr>
                          <td><?php echo $row2['nama'];?></td>
                          <td><?php echo $row2['nim'];?></td>
                          <td><?php echo $row2['alamat'];?></td>
                          <td>+<?php echo $row2['no_hp'];?></td>
                          <td><?php echo $row2['angkatan'];?></td>
                          <!--<td><?php echo $row2['judulta'];?></td>-->
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </li>
            <li class="list-group-item" style="height: 56px;"><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#" style="margin-left: 664px;width: 150px;">Tutup</a></li>
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
