<?php 

session_start();
include '../../conf.php';

$id=$_POST['tgl'];
$nisn=$_POST['jam'];

$sql=mysqli_query($con, "UPDATE timer SET tanggal = '$id', waktu = '$nisn'");

if ($sql) {
    echo"<script>alert('Behasil konfigurasi waktu');window.location='../html/konfig.php';</script>";
}else {
    echo"<script>alert('Gagal konfigurasi waktu');window.location='../html/konfig.php';</script>";
}
?>