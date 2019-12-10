<!DOCTYPE html>
<?php
include 'db_connection.php';
$conn = OpenCon();

session_start();
if( !isset($_SESSION["user"])) {
	header("Location: index.php");
}

$nama = $_SESSION["user"];
$query = "SELECT nama,nim,status,tipe_user,dosen_wali FROM user WHERE username='$nama'";
$query2 = "SELECT dosen_wali FROM user WHERE username='$nama'";
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
    <!--css buat dua kolom-->
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

<body style="background-color: #9bc4e2;height: 1000px;">
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
            <header style="margin-top: 30px;margin-left: -34px;"></header><a href="logout.php" class="btn btn-primary ml-auto" role="button" href="#" style="background-color: #2980ef;">Log Out</a></div>
        </nav>
        <nav class="navbar navbar-dark align-items-start" style="background-color: #1d7ef2;height: 830px;width: 250px;">
            <div class="container-fluid d-flex flex-column p-0">
              <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item" role="presentation" style="background-color: #00aacc;"></li>
                <li class="nav-item" role="presentation" style="background-color: #00aacc;"></li>
                <li class="nav-item" role="presentation" style="margin-top: 25px;"><a class="nav-link" href="daftar_ta.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Pendaftaran TA</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="seminar_proposal.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Seminar Proposal</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="sidang.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Sidang Skripsi</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="donlod_berkas.php"><span style="color: rgb(255,255,255);font-size: 24px;font-family: Amiri, serif;">Download Berkas</span></a></li>
            </ul>
        </div>

    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php
CloseCon($conn);

?>
