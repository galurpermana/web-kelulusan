<?php 
session_start();
include '../conf.php';

$nisn = $_POST['nisn'];
$tanggal = $_POST['tanggal'];

$login = mysqli_query($con,"SELECT * FROM siswa WHERE nisn='$nisn' and tanggal ='$tanggal'");
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);

if ($cek > 0) {
    if($data['keterangan']=="Lulus"){

        $_SESSION["siswa"]= true;
        $_SESSION['id']= $data["id"];
        $_SESSION['nis']= $data["nis"];
        $_SESSION['tanggal']= $data["tanggal"];
        $_SESSION['nisn'] = $data["nisn"];
        $_SESSION['nama'] = $data["nama"];
        $_SESSION['rombel'] = $data["rombel"];
        $_SESSION['keterangan'] = $data["keterangan"];
        echo"<script>alert('LOGIN BERHASIL');window.location='../halaman.php';</script>";
        header("Location: ../halaman.php");

    }else if($data['keterangan']=="Tidak lulus"){
        $_SESSION["siswa"]= true;
        $_SESSION['id']= $data["id"];
        $_SESSION['nis']= $data["nis"];
        $_SESSION['tanggal']= $data["tanggal"];
        $_SESSION['nisn'] = $data["nisn"];
        $_SESSION['nama'] = $data["nama"];
        $_SESSION['rombel'] = $data["rombel"];
        $_SESSION['keterangan'] = $data["keterangan"];
        echo"<script>alert('LOGIN BERHASIL');window.location='../halaman.php';</script>";
        header("Location: ../reject.php");
    }
    else {
        echo"<script>alert('login gagal');
        window.location.assign('../index.php');
        </script>";
        
    }
}else {
    echo"<script>alert('login gagal');
    window.location.assign('../index.php');</script>";
}
?>
