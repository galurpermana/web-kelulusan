<?php
  session_start();
  if(!isset($_SESSION["siswa"])){ 
    echo"<script>alert('login terlebih dahulu');window.location='index.php';</script>";
  
  }
  $id = $_SESSION['id'];
  $nis = $_SESSION['nis'];
  $tanggal = $_SESSION['tanggal'];
  $nisn = $_SESSION['nisn'];
  $nama = $_SESSION['nama'];
  $keterangan = $_SESSION['keterangan'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="images/icons/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Pengumuman Kelulusan</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev1.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body class="body">

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->



<!-- GA LULUS -->
<div class="container-login100">
  <div class="the-clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                              <?php 
                                include 'conf.php';
                                $data = mysqli_query($con,"SELECT * from siswa 
                                INNER JOIN rombel ON siswa.id_rombel = rombel.id_rombel
                                WHERE id = '$id'");
                                while($d = mysqli_fetch_array($data)){
                              ?>
                                <!-- <img src="assets/images/quote.png" alt=""> -->
                                <h3 class="text-white">ANDA DINYATAKAN TIDAK LULUS DARI SMK NEGERI 2 BALIKPAPAN <br>TAHUN AJARAN 2021/2022</h3><hr class="text-white"><br>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <h5 class="text-white">NISN <?php echo $d['nisn'];?> - NIS <?php echo $d['nis'];?></h5>
                                    <h3 class="text-white"><?php echo $d['nama'];?></h3>
                                  </div>

                                  <div class="col-lg-6">
                                    <h5 class="text-white">Rombel</h5>
                                    <h3 class="text-white"><?php echo $d['rombel'];?></h3>
                                  </div><br>
                                </div><hr class="text-white">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <h5 class="text-white">Tanggal Lahir</h5>
                                    <h3 class="text-white"><?php echo $d['tanggal'];?></h3>
                                  </div>

                                  <div class="col-lg-6">
                                    <h5 class="text-white">Keterangan</h5>
                                    <h3 class="text-white"><?php echo $d['keterangan'];?></h3>
                                  </div>
                                </div><br><br>
                                <center>
                                  <div class="gradient-button"><a href="download.php?filename=<?php echo $d['surat']; ?>"><i class="fa fa-download"></i> Simpan</a></div>
                                </center>
                                <?php }?>
                              </div><br><br><br><br><br>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<footer>
    <div class="container">
        <div class="col-lg-12">
          <div class=" copyright-text"><br>
            <p class="text-white">Copyright © 2022 Rekayasa Perangkat Lunak Gen.4 
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://kit.fontawesome.com/c6f0fc4d35.js" crossorigin="anonymous"></script>
</body>
</html>