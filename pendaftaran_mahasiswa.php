<!DOCTYPE html>
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
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}

  /* The Modal (background) */
  .modal {
    width: 400px;
    height: 800px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -200px;
    margin-bottom: : 200px;
  }

  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }


  .close {
    position:relative;
    color: #aaaaaa;
    float: right;
    margin-right: -300px;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
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
        <div></div>
        <div></div>
      </div>
      <header></header>
      <header style="margin-top: 30px;margin-left: -34px;"></header>
    </div>
  </nav>
  <div class="contact-clean" style="background-color: #9bc4e2;">
    <form method="post" action="#">
      <h2 class="text-center">Pendaftaran <br>Akun Mahasiswa SITA</h2>
      <div class="form-group"><input class="form-control" type="text" placeholder="User ID" name="username"></div>
      <div class="form-group"><input class="form-control" type="password" placeholder="Password" name="password"></div>
      <div class="form-group"><input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Mahasiswa"></div>
      <div class="form-group"><input class="form-control" type="number" placeholder="NIM" name="NIM"></div>
      <div class="form-group"><input class="form-control" type="email" placeholder="Email" name="email"></div>
      <div class="form-group"><input class="form-control" type="text" placeholder="Alamat" name="alamat"></div>
      <div class="form-group" placeholder="No. HP"><input class="form-control" type="tel" placeholder="No. HP" name="no_hp"></div>
      <div class="form-group"><select class="form-control" name="angkatan">
        <option value="" disabled selected>Angkatan</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
      </select></div>
      <br>
      <div class="form-group"><center><button name="submit" class="btn btn-primary"  type="submit" style="margin:auto; 70px;">DAFTAR</button></center></div>
      <center><a href="interfc_daftar.php">Kembali Ke Menu Sebelumnya</a></center>
    </form>
  </div>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <p>NIM sudah terdaftar</p>
      <button id='closebutton' class="btn btn-primary btn-block" style="height:35px;width:100px;margin-left:180px" >Ok</button>
    </div>
  </div>

  <div id="modal1" class="modal">
    <div class="modal-content">
      <p>Akun Sukses Didaftar</p>
      <button id='closebutton1' class="btn btn-primary btn-block" style="height:35px;width:100px;margin-left:180px" >Ok</button>
    </div>
  </div>

  <script>

    var modal = document.getElementById("myModal");

    var modal1 = document.getElementById("modal1");
    // Get the button that opens the modal
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    var buttons = document.getElementById("closebutton");
    var buttons1 = document.getElementById("closebutton1");
    buttons.onclick = function() {
     modal.style.display = "none";
   }
   buttons1.onclick = function() {
     window.location.href = "index.php";
   }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php
include 'db_connection.php';
$conn = OpenCon();
if(isset($_POST["submit"])) {
  $nim = $_POST["nim"];
  $query1 = "SELECT * FROM user WHERE nim='$nim'";
  $result1 = $conn->query($query1);
  $row = $result1->fetch_assoc();
  if($row['nim'] == $nim) {
    echo '<script>';
    echo 'modal.style.display = "block";';
    echo '</script>';
  }
  else{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $angkatan = $_POST['angkatan'];
    $query = "INSERT INTO user (username,pass, nama, nim, email,alamat, no_hp, angkatan, tipe_user) VALUES ('$username','$password','$nama','$nim'
    ,'$email','$alamat','$no_hp', '$angkatan',1)";
    mysqli_query($conn,$query);
    echo '<script>';
    echo 'modal1.style.display = "block";';
    echo '</script>';
  }

}
CloseCon($conn);

?>
