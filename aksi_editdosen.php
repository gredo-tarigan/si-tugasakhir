<?php
include 'db_connection.php';
$conn = OpenCon();
session_start();
$nimcari = $_GET['nim'];
$_SESSION['nimcari'] = $nimcari;
$query = "SELECT * FROM user WHERE nim='$nimcari'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
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
                <div class="container-fluid" style="padding: 0px;padding-top: 35px;padding-right: 100px;padding-left: 100px;">
                    <form action="aksisave1.php" method="post">
                        <h2 class="text-center" style="padding-bottom: 20px;">Pendaftaran Tugas Akhir</h2>
                        <div class="form-group"><input class="form-control" id='judulta' name="judulta" type="text"></div>
                        <div class="form-group"><select class="form-control" name="namadosen" style="width=200px">
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
                          <input type="submit" class="btn btn-primary btn-sm d-none d-sm-inline-block" type="submit" value="Ubah" name="Cari2" style="margin-left: 726px;width: 86px;">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
      document.getElementById('judulta').value='<?php if(!empty($row['judulta'])){echo $row['judulta'];}?>';
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
<?php
CloseCon($conn);

?>
