<?php
include '../../conf.php';
$id = $_GET["id"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM siswa WHERE id='$id' ";
    $hasil_query = mysqli_query($con, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($con).
       " - ".mysqli_error($con));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../html/table.php';</script>";
    }