<!DOCTYPE html>




<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SITA Teknik Industri</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
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
     margin-top: -150px;
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

<body style="background-image: url(&quot;assets/img/gedung.PNG&quot;); background-size:cover;">
    <div class="login-dark" style="background-image: url(&quot;assets/img/new.png&quot;);">
        <form name="search_form_results" action="#" method="post" style="background-color: #1e2833;">
            <h2 class="sr-only">Login Form</h2>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="password"></div>
            <div class="form-group"><button name="submit" class="btn btn-primary btn-block" type="submit" style="background-color: #2980ef;">Login</button>
              <br>
      <center><p>Tidak punya akun? <a href="interfc_daftar.php">Daftar</a></p></center>
            </form>
    </div>

<div id="myModal" class="modal">
  <div class="modal-content">
    <p>Username atau Password Anda Salah</p>
    <button id='closebutton' class="btn btn-primary btn-block" style="height:35px;width:100px;margin-left:180px" >Ok</button>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal

var buttons = document.getElementById("closebutton");
buttons.onclick = function() {
   modal.style.display = "none";
}

// When the user clicks on <span> (x), close the modal


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
session_start();
if(isset($_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $query = "SELECT * FROM user WHERE username='$username'";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();
  $hasil = mysqli_query($conn, $query) or die (mysqli_error($conn));
  $user = mysqli_fetch_array($hasil);

  if($user['username'] == $username && $user['pass'] == $password)
  {
  	// $_SESSION['username'] = $username;
  	$result = $conn->query($query);
  	$row = $result->fetch_assoc();
      $_SESSION["user"] = $username;
  		$_SESSION["username"] = $user;
  		$_SESSION["tipe_user"] = $row['tipe_user'];
  	switch($_SESSION["tipe_user"]) {
  		case 1: header("location:welcome.php"); break;
  		case 2: header("location:dosen.php"); break;
  		case 3: header("location:koorta.php"); break;
  		case 4: header("location:tu.php"); break;
  	}

  }
  else {
    echo '<script>';
    echo 'modal.style.display = "block";';
    echo '</script>';
  }

}


if( isset($_SESSION["user"])) {
  switch($_SESSION["tipe_user"]) {
    case 1: header("location:welcome.php"); break;
    case 2: header("location:dosen.php"); break;
    case 3: header("location:koorta.php"); break;
    case 4: header("location:tu.php"); break;
  }
}


?>
<?php
CloseCon($conn);

?>
