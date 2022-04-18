<?php 
include '../../conf.php';

$nisn=$_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$rombel = $_POST['rombel'];
$ket = $_POST['ket'];
$ft=$_FILES['surat']['name'];
$file=$_FILES['surat']['tmp_name'];

$mysqli = mysqli_query($con,"INSERT INTO siswa (nisn, nis, nama, tanggal, id_rombel, keterangan, surat) values
('$nisn','$nis','$nama','$tgl','$rombel','$ket','$ft')");
move_uploaded_file($file, "../../surat/".$ft);

if ($mysqli) {
    echo"<script>alert('berhasil menambahkan');window.location='../html/table.php';</script>";
    
}else {
    echo"<script>alert('gagal menambahkan');window.location='../html/table.php';</script>";
}
?>