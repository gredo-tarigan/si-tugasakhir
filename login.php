<?php

include 'db_connection.php';
$conn = OpenCon();

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$hasil = mysqli_query($conn, $query) or die (mysqli_error($conn));
$user = mysqli_fetch_array($hasil);

if($user['username'] == $username && $user['pass'] == $password)
{
	// $_SESSION['username'] = $username;
	session_start();
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
	echo '<script type="text/javascript">';
echo 'alert("Username atau Password Tidak Sesuai");';
echo 'window.location.href = "index.php";';
echo '</script>';
}

CloseCon($conn);

?>
