<?php
session_start();
include_once("connection.php");
//$kode = 'RS-0000003';
  
?>
<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Rumah Sakit 2</title>
    <link rel="icon" href="assets/img/rs%20logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Advanced-NavBar---Multi-dropdown.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    
</head>

<body style="background: url(&quot;assets/img/pat.webp&quot;);">
    <header>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: linear-gradient(91deg, rgb(32,242,255) 0%, rgb(0,178,254) 100%), rgb(9,222,235);height: 61px;">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);text-align: center;font-family: Allerta, sans-serif;border-style: none;text-shadow: 2px 0px 3px rgb(2,182,255);"><img class="img-fluid swing animated" src="assets/img/rs%20logo.png" style="width: 30px;margin: 0 10;filter: grayscale(0%);border-style: none;">RSUD Panembahan Senopati</a>
            <button
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                    </ul>
                </div>
        </div>
    </nav>
    </header>
    <main>
    <div style="padding: 0;margin: 0 0 40px 0;">
        <div class="container">
            
            <div class="row" style="background: #18e1ff;border-radius: 30px;margin: 40px 0 0 0;box-shadow: 19px 36px 8px 9px rgba(33,37,41,0.58);">
                <div class="col-md-12">
                    <h4 class="text-center bounce animated" style="padding: 20px 0 0 0;">Booking Tiket</h4>
                    <h5 class="text-center flash animated">Registered Patient</h5>
                    <div class="row">
                        <div class="col">
                            <h4 class="text-center" style="margin: 0;padding: 20px 0 0 0;">Poliklinik</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center"><label class="col-form-label text-center" style="font-size: 22px;"><?php echo $_SESSION['ses_policlinic']; ?></label></div>
                    </div>
                    <div class="row">
                        <div class="col text-center"><label><?php echo $_SESSION['ses_doctor']; ?></label><br>
                        <label><?php echo $_SESSION['ses_time']; ?></label>
                            <div class="row">
                                <div class="col">
                                    <label style="font-size: 90px;">
                                    <?php
                                    $name_clinic = $_SESSION['ses_policlinic'];
                                    $query = "SELECT booking.id_booking, clinic.name_clinic, clinic.queue
                                    FROM booking INNER JOIN clinic_schedule
                                    ON booking.id_clinic_scheduling=clinic_schedule.id_clinic_schedule
                                    INNER JOIN clinic
                                    ON clinic_schedule.id_clinic=clinic.id_clinic
                                    WHERE clinic.name_clinic = '$name_clinic'";
                                    $result = mysqli_query($koneksi->connect, $query);
                                    //$row = mysqli_fetch_array($result);
                                    //$antrian = isset($row['queue']) ? count($row['queue']) : 0;
                                    //$antrian = $row['queue'];
                                    
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        $row = mysqli_fetch_assoc($result);
                                        echo $row['queue'];
                                        
                                      } else {
                                        echo "0";
                                      }
                                    ?>
                                    </label>
                                    <div class="row">
                                        <div class="col">
                                        <?php 
                                            include "phpqrcode/qrlib.php"; 
                                            $tempdir = "temp/";
                                            if (!file_exists($tempdir))
                                               mkdir($tempdir);
                                            //isi qrcode jika di scan
                                            $queue = $_SESSION['kode_boking'];
                                            $codeContents =$queue; 
                                            QRcode::png($codeContents, $tempdir.'007_4.png', QR_ECLEVEL_L, 7, 2);
                                            
                                            echo '<img src="'.$tempdir.'007_4.png" />'; 
                                            //echo '<img src="'.$tempdir.'007_4.png style="width: 300px;background: #ffffff;border-radius: 40px;margin: 0 0 40px 0;/>'; 
                                            
                                        ?>
                                            <div  style="margin: 0px 0px 30px 0px;"></div>
                                            <div class="row">
                                                <div class="col"><button class="btn btn-light" type="button" style="margin: 0px 0px 50px 0px;width: 88px;height: 39px;"><a href="process_output.php">Print</a></button>
                                                    <div class="row d-inline" style="border-radius: 0;">
                                                        <div class="col">
                                                            <div class="jumbotron" style="padding: 4px;border-radius: 30px;margin: -30px;">
                                                                <div class="row">
                                                                    <div class="col text-left" style="margin: 10px;">
                                                                    <h5>Ketentuan Pendaftaran</h5>
                                                                    <p style="padding: 0px;margin-bottom: 0px;">- 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                                                    <p style="padding: 0px;margin-bottom: 0px;">- 2 Nec sagittis aliquam malesuada bibendum arcu vitae elementum. </p>
                                                                    <p style="padding: 0px;">- 3 Enim lobortis scelerisque fermentum dui faucibus in. </p>
                                                                    </div>
                                                                    <div class="col-xl-2 offset-xl-0 d-xl-flex justify-content-xl-center align-items-xl-center"><img class="tada animated infinite" src="assets/img/rs%20logo.png" style="width: 92px;" loading="auto"></div>
                                                                    <div class="col-xl-2 align-self-end"><button class="btn btn-primary" type="button" style="background: rgb(24,225,255);border-style: none;color: rgb(0,0,0);font-weight: 600;margin: 12px;">Selesai</button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="assets/js/Advanced-NavBar---Multi-dropdown.js"></script>
</body>

</html>