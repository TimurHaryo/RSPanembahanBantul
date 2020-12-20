<?php
session_start();
include_once("connection.php");

$kode = $_SESSION["norm"];
$query =  "SELECT * FROM patient where id_patient='$kode'";
$result = mysqli_query($koneksi->connect, $query);
$row = mysqli_fetch_array($result);
$id = $row['id_patient'];
$name = $row['name_patient'];
$tgl_lahir = $row['tgl_lahir'];
$idnum = $row['identity_number'];
$address = $row['address_patient'];

// $policlinic = "Klinik Nuklir";
// $doctor = "dr. Timur, S.Pd";
// $time = "08.00";
// $_SESSION['policlinic'] = "$policlinic";
// $_SESSION['doctor'] = "$doctor";
// $_SESSION['time'] = "$time";
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
    <div class="text-center d-flex d-xl-flex justify-content-center order-1 justify-content-xl-center" style="align-content: center;">
        <div class="container text-left" style="margin: 21px;">
            <div class="row" style="background: #18e1ff;border-style: none;border-radius: 30px;margin: 20px 0 0 0;box-shadow: 20px 40px 7px 3px rgba(33,37,41,0.7);">
                <div class="col-md-12">
                    <h4 class="text-center bounce animated" style="margin-top: 20px;">Booking Data Confirmation</h4>
                    <h5 class="text-center flash animated" style="margin: 10px 0 50px 0;">Registered Patient</h5>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius: 12px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span><strong>Perhatian</strong> Pastikan Data yang Anda Inputkan Sudah Benar!</span>
                    </div>
                    <div class="row order-1">
                        <div class="col">
                            <div class="table-responsive table-borderless">
                                <table class="table table-bordered">
                                    <tbody style="border: none;">
                                        <tr>
                                            <td style="border: 0px;color: rgb(72,72,72);">Name</td>
                                            <td class="text-right" style="height: 29px;width: 0px;color: rgb(72,72,72);">:</td>
                                            <td><?php echo $name ?></td>
                                            <td style="color: rgb(72,72,72);">Policlinic</td>
                                            <td class="text-right" style="color: rgb(72,72,72);">:</td>
                                            <td><?php echo $_SESSION["policlinic"] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: rgb(72,72,72);">Medical Number</td>
                                            <td class="text-right" style="color: rgb(72,72,72);">:</td>
                                            <td><?php echo $id ?></td>
                                            <td style="color: rgb(72,72,72);">Doctor</td>
                                            <td class="text-right" style="color: rgb(72,72,72);">:</td>
                                            <td><?php echo $_SESSION["doctor"] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: rgb(72,72,72);">NIK</td>
                                            <td class="text-right" style="color: rgb(72,72,72);">:</td>
                                            <td><?php echo $idnum ?></td>
                                            <td style="color: rgb(72,72,72);">Time</td>
                                            <td class="text-right" style="color: rgb(72,72,72);">:</td>
                                            <td><?php echo $_SESSION["time"] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: rgb(72,72,72);">Birth Date</td>
                                            <td class="text-right" style="color: rgb(72,72,72);">:</td>
                                            <td><?php echo $tgl_lahir ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: rgb(72,72,72);">Address</td>
                                            <td class="text-right" style="color: rgb(72,72,72);">:</td>
                                            <td><?php echo $address ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: rgb(72,72,72);">Insurance</td>
                                            <td class="text-right" style="color: rgb(72,72,72);">:</td>
                                            <td>umum/bpks</td>
                                        </tr>
                                        <tr>
                                            <td style="color: rgb(72,72,72);">Number</td>
                                            <td class="text-right" style="color: rgb(72,72,72);">:</td>
                                            <td>nomer bpjs</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center" style="padding: 56px;">
                                    <div class="btn-group" role="group" style="border-style: none;"><button class="btn btn-primary text-center justify-content-xl-center align-items-xl-end" type="button" style="background: #b9cad6;color: #000000;font-weight: bold;border-style: none;">Kembali</button>
                                    <button class="btn btn-primary" type="button" style="background: #dfe8ee;color: rgb(0,0,0);font-weight: bold;border-style: none;">
                                        <a href="cetak.php"><font style="color: rgb(0,0,0)">Lanjutkan</font></a>
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-inline order-1" style="width: 1142px;padding: 0;margin: -31px;height: 158px;border-radius: 0;">
                                <div class="col">
                                    <div class="jumbotron" style="padding: 4px;border-radius: 30px;margin: -30px;">
                                        <div class="row">
                                            <div class="col" style="margin: 10px;">
                                                <h5>Ketentuan Pendaftaran</h5>
                                                <p style="padding: 0px;margin-bottom: 0px;">- 1 Test </p>
                                                <p style="padding: 0px;margin-bottom: 0px;">- 2&nbsp;</p>
                                                <p style="padding: 0px;">- 3</p>
                                            </div>
                                            <div class="col-xl-4 d-xl-flex justify-content-xl-center align-items-xl-center">
                                                <div class="btn-group" role="group"></div><img class="tada animated infinite" src="assets/img/rs%20logo.png" style="width: 92px;" loading="auto"></div>
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