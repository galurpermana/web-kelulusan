<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pengumuman Kelulusan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="dist/style.css">
<!--===============================================================================================-->
</head>
<body>

<div class="container" id="hitung">
  <h1 id="time"></h1>
  <div>
    <ul>
      <li><span id="days"></span>Hari</li>
      <li><span id="hours"></span>Jam</li>
      <li><span id="minutes"></span>Menit</li>
      <li><span id="seconds"></span>Detik</li>
    </ul>
  </div>
</div>

    	<div class="limiter" id="f" style="display: none;">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bgs.png);">
					<span class="login100-form-title-1 float-left">
						Hasil Kelulusan SMKN 2 BALIKPAPAN
						
					</span>
				</div>
				<div >
					<form id="f" class="login100-form validate-form" method="post" action="Registration/login.php">
						<div class="wrap-input100 validate-input m-b-26" data-validate="NISN dibutuhkan">
							<span class="label-input100">NISN</span>
							<input class="input100" type="text" name="nisn" placeholder="Masukkan NISN">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-18" data-validate = "Tanggal lahir dibutuhkan">
							<span class="label-input100">Tanggal <br>Lahir</span>
							<input class="input100" type="date" name="tanggal" >
							<span class="focus-input100"></span>
						</div>

						<div class="container-login100-form-btn">
							<input type="submit" class="login100-form-btn" name="login" value="Lihat Hasil Kelulusan">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<?php
include "conf.php";
date_default_timezone_set("Asia/Singapore");
$query= mysqli_query($con,"SELECT * FROM timer");
$d= mysqli_fetch_array($query);

$date = $d["tanggal"];
$time = $d["waktu"];

?>

	<script>
// set tanggal target
var countDownDate = new Date("<?= date('Y/m/d H:i:s', strtotime("$date $time"));?>").getTime();

// Update hitungan setiap 1 detik
var x = setInterval(function() {

  // Get tanggal dan waktu hari ini
  var now = new Date().getTime();
    
  // cari jarak waktu antara waktu target dan waktu sekarang
  var distance = countDownDate - now;
    
  // kalkulasi waktu untukk hari, jam, menit, detik
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // hasil output berada di element dengan id="time"
  document.getElementById("time").innerHTML = "PENGUMUMAN KELULUSAN SMK NEGERI 2 BALIKPAPAN";
  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;  
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;
    
  //jika countdown selesai, tampilkan form 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time").style.display="none";
    document.getElementById("days").style.display="none";
    document.getElementById("hours").style.display="none";
    document.getElementById("minutes").style.display="none";
    document.getElementById("seconds").style.display="none";
    document.getElementById("hitung").style.display="none";
	document.getElementById("f").style.display="block";
  }
}, 1000);
</script>
					<div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalScrollableTitle">Pemberitahuan</h5>
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
                            </div>
                            <div class="modal-body">
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary"  data-bs-dismiss="modal" class="close" data-dismiss="modal" aria-label="Close">Oke</button>
                            </div>
                          </div>
                        </div>
                      </div>
    <script>
      $('#modalScrollable').modal('show');
    </script>
</body>
</html>