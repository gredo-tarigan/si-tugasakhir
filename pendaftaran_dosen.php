<!DOCTYPE html><?php
include 'db_connection.php';
$conn = OpenCon();
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

<body style="background-color: #9bc4e2;height: 1000px;">
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #214a80;height: 170px;">
        <div class="container-fluid"><img src="assets/img/Undip.png" style="height: 119px;width: 105px;">
            <div class="container">
                <div>
                    <h1 style="color: rgb(255,255,255);font-size: 60px;font-family: ABeeZee, sans-serif;">Selamat Datang di SITA!</h1>
                </div>
                <div></div>
                <div></div>
            </div>
            <header></header>
            <header style="margin-top: 30px;margin-left: -34px;"></header>
        </div>
    </nav>
    <div class="contact-clean" style="background-color: #9bc4e2;">
        <form method="post" action="daftar_dosen.php">
            <h2 class="text-center">Pendaftaran <br>Akun Dosen SITA</h2>
            <div class="form-group"><input class="form-control" type="text" placeholder="User ID" name="username"></div>
            <div class="form-group"><input class="form-control" type="password" placeholder="Password" name="password"></div>
            <div class="form-group"><input class="form-control" type="text" name="nama" placeholder="Nama Lengkap"></div>
            <div class="form-group"><input class="form-control" type="number" placeholder="NIK" name="nim"></div>
            <div class="form-group"><input class="form-control" type="email" placeholder="Email" name="email"></div>
            <div class="form-group"><input class="form-control" type="text" placeholder="Alamat" name="alamat"></div>
            <div class="form-group" placeholder="No. HP"><input class="form-control" type="tel" placeholder="No. HP" name="no_hp"></div>
            <br>
            <div class="form-group"><center><button class="btn btn-primary" type="submit" style="margin:auto; 70px;">DAFTAR</button></center></div>
            <center><a href="interfc_daftar.php">Kembali Ke Menu Sebelumnya</a></center>
        </form>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php
CloseCon($conn);

?>
