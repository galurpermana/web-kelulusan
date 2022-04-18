<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include '../../conf.php';

$username = $_POST['nama'];
$password = $_POST['password'];


$login = mysqli_query($con,"SELECT * from user where nama='$username' ");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	if (password_verify($password,$data["password"])) {
	    $_SESSION['nama'] = $username;
		$_SESSION["admin"] = true;
		echo "<script>alert('login berhasil!.');window.location='../html/index.php';</script>";
  	}else{
		  
		echo "<script>alert('Password salah!.');window.location='../html/login.php';</script>";
	}

}else{
		  
	echo "<script>alert('Username.');window.location='../html/login.php';</script>";
}

?>