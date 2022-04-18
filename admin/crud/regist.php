<?php 
session_start();
include '../../conf.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];

$result = mysqli_query($con,"SELECT nik FROM user WHERE nik = '$nik'");
if ( mysqli_fetch_assoc($result) ) {
    echo "<script>
    alert('NIK telah terdaftar');window.location='../login/index.php';
    </script>";
    return false;
}

$mysqli = mysqli_query($con,"INSERT INTO USER (nama, nik, foto) values
('$nama','$nik','default-avatar.png')");

if ($mysqli) {
    $_SESSION['regist']= true;
    echo"<script>alert('berhasil register');window.location='../login/index.php';</script>";
    
}else {
    echo"<script>alert('gagal register');window.location='../login/index.php';</script>";
}

?>