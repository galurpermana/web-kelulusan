<?php 

session_start();
include '../../conf.php';

$id=$_POST['id'];
$nisn=$_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$rombel = $_POST['rombel'];
$ket = $_POST['ket'];
$ft=$_FILES['surat']['name'];
$file=$_FILES['surat']['tmp_name'];

$sql=mysqli_query($con, "UPDATE siswa SET nisn = '$nisn', nis = '$nis', nama = '$nama', tanggal = '$tgl', 
    id_rombel = '$rombel', keterangan = '$ket', surat ='$ft'  WHERE id='$id'");
move_uploaded_file($file, "../../surat/".$ft);

if ($sql) {
    echo"<script>alert('Behasil update data');window.location='../html/table.php';</script>";
}else {
    echo"<script>alert('Gagal update data');window.location='../html/table.php';</script>";
}
?>