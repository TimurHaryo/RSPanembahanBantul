<?php
session_start();
include_once("connection.php");
//$result = mysqli_query($mysqli, "INSERT INTO patient (id_patient,name_patient,address_patient,jenis_kelain,identity_number,tempat_lahir,adult) VALUES('$kode','$nama','$kota','$negara')");
//$result = mysqli_query($mysqli, "INSERT INTO booking (id_patient,name_patient,address_patient,jenis_kelain,identity_number,tempat_lahir,adult) VALUES('$kode','$nama','$kota','$negara')");
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
    <link rel="stylesheet" href="assets/css/styles.css">
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
                        <div class="col text-center"><label class="col-form-label text-center" style="font-size: 22px;">name_policlinic</label></div>
                    </div>
                    <div class="row">
                        <div class="col text-center"><label>name_doctor</label>
                            <div class="row">
                                <div class="col"><label style="font-size: 90px;">21</label>
                                    <div class="row">
                                        <div class="col">
                                        <?php 
                                            include "phpqrcode/qrlib.php"; 
                                            $tempdir = "temp/";
                                            if (!file_exists($tempdir))
                                               mkdir($tempdir);
                                            //isi qrcode jika di scan
                                            $codeContents = '123'; 
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
                                                                        <p style="padding: 0px;margin-bottom: 0px;">- 1 Test</p>
                                                                        <p style="padding: 0px;margin-bottom: 0px;">- 2&nbsp;</p>
                                                                        <p style="padding: 0px;">- 3</p>
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
