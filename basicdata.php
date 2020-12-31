<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Rumah Sakit 2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Advanced-NavBar---Multi-dropdown.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
</head>


<body style="background: url(&quot;assets/img/pat.webp&quot;);">
    <header></header>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: linear-gradient(91deg, rgb(32,242,255) 0%, rgb(0,178,254) 100%), rgb(9,222,235);height: 61px;">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);text-align: center;font-family: Allerta, sans-serif;border-style: none;text-shadow: 2px 0px 3px rgb(2,182,255);"><img class="img-fluid swing animated" src="assets/img/rs%20logo.png" style="width: 30px;margin: 0 10;filter: grayscale(0%);border-style: none;">RSUD Panembahan Senopati</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>

    <main></main>
    <div class="text-center d-flex d-xl-flex justify-content-center order-1 justify-content-xl-center" style="align-content: center;">
        <div class="container text-left" style="margin: 31px;">
            <div class="row" style="background: #15dcff;border-style: none;border-radius: 30px;margin: 40px 0 0 0;box-shadow: 20px 40px 7px 3px rgba(33,37,41,0.7);">
            <form action="konfirmasi.php" method="POST">
                <div class="col-md-12">
                    <h4 class="text-center bounce animated" style="margin-top: 20px;">Patient Basic Data</h4>
                    <h5 class="text-center flash animated" style="margin: 10px 0 50px 0;">Registered Patient</h5>
                    <div class="alert alert-warning" role="alert" data-aos="flip-up" data-aos-delay="50" style="border-radius: 0px;border-top-left-radius: 12px;border-top-right-radius: 12px;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span><strong>Perhatian</strong> Pastikan Data yang Anda Inputkan Sudah Benar!</span></div>
                    <div class="row order-1">
                        <div class="col">
                            <div class="row order-1">
                            
                                <div class="col">
                                    <div class="table-responsive table-borderless">
                                        <table class="table table-bordered">
                                            <tbody style="border: none;">
                                                <tr>
                                                    <td style="border: 0px;color: rgb(72,72,72);">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-default">Medical Number</span>
                                                            </div>
                                                            <?php
                                                            
                                                            include("connection.php");
                                                            $no_rm = "000001-2020";
                                                            $_SESSION['norm'] = $no_rm;
                                                            //$_SESSION['rm'] = "$no_rm";
                                                            echo "<input value='" . $no_rm . "' type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' disabled>";
                                                            ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 0px;color: rgb(72,72,72);">
                                                        <div class="form-group">
                                                            <label for="clinic">Clinic Destination</label>
                                                            <select class="form-control" id="clinic" name="clinic">
                                                                <option disabled selected> Pilih </option>
                                                                <?php
                                                                $query_get_clinic = "SELECT * FROM clinic";
                                                                $result_clinic = mysqli_query($koneksi->connect, $query_get_clinic);
                                                                if ($result_clinic->num_rows > 0) {
                
                                                                    while ($row = mysqli_fetch_assoc($result_clinic)) {
                                                                        echo "<option value='" . $row['name_clinic'] . "'>Poliklinik " .   $row['name_clinic'] . "</option>";
                                                                        
                                                                    }
                                                                    
                                                                    
                                                                }
                                                               
                                                                
                    
                                                                mysqli_close($koneksi->connect);
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 0px;color: rgb(72,72,72);">
                                                        <div class="form-group">
                                                            <label for="doctor">Doctor</label>
                                                            <select class="form-control" id="doctor" name="doctor">
                                                                <option disabled selected> Pilih Dokter </option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 0px;color: rgb(72,72,72);">
                                                        <div class="form-group">
                                                            <label for="sel1">Time</label>
                                                            <select class="form-control" id="scheduleTime" name="time">
                                                                <option disabled selected> Pilih Waktu </option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 0px;color: rgb(72,72,72);">
                                                        <div class="form-group">
                                                            <label for="sel1">Insurance</label>
                                                            <select class="form-control" id="sel1" name="insurance">
                                                                <option>Umum</option>
                                                                <option>BPJS</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            
                                <div class="col">
                                    <div class="table-responsive table-borderless">
                                        <table class="table table-bordered">
                                            <tbody style="border: none;">
                                                <tr>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <div class="container">
                                                                <p style="text-align: center">Doctor Schedule</p>
                                                                <div class="table-responsive table-light" style="border-radius: 20px;">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>No</th>
                                                                                <th>Name</th>
                                                                                <th>Day</th>
                                                                                <th>Time</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="schedule">
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row d-inline order-1" style="width: 1142px;padding: 0;margin: -31px;height: 158px;border-radius: 0;">
                                <div class="col">
                                    <div class="jumbotron" style="padding: 4px;border-radius: 30px;margin: -30px;">
                                        <div class="row">
                                            <div class="col" style="margin: 10px;">
                                                <h5>Ketentuan Pendaftaran</h5>
                                                <p style="padding: 0px;margin-bottom: 0px;">- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eni</p>
                                                <p style="padding: 0px;margin-bottom: 0px;">- Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in&nbsp;</p>
                                                <p style="padding: 0px;">- voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex justify-content-center" style="padding: 80px;">
                                                    <div class="btn-group" role="group" style="border-style: none;"><button class="btn btn-primary text-center justify-content-sm-center align-items-sm-end" type="button" style="background: #b9cad6;color: #000000;font-weight: bold;border-style: none;">Kembali</button>
                                                    <!-- <a href="konfirmasi.php"> -->
                                                        <button class="btn btn-primary" type="submit" value="simpan" style="background: #dfe8ee;color: rgb(0,0,0);font-weight: bold;border-style: none;">Lanjutkan</button>
                                                    <!-- </a> -->
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
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="assets/js/Advanced-NavBar---Multi-dropdown.js"></script>
    <script type="text/javascript">
        $('#clinic').on('change', function() {
            var clinic = $(this).val();

            $.ajax({
                url: 'ajaxData.php?action=doctor',
                type: 'GET',
                data: {
                    clinic: clinic
                },
                success: function(data) {
                    $('#doctor').html(data)
                }
            })
        });

        $('#clinic').on('change', function() {
            var clinic = $(this).val();

            $.ajax({
                url: 'ajaxData.php?action=schedule',
                type: 'GET',
                data: {
                    clinic: clinic
                },
                success: function(data) {
                    $('#schedule').html(data)
                }
            })
        });

        $('#doctor').on('change', function() {
            var doctor = $(this).val();

            $.ajax({
                url: 'ajaxData.php?action=scheduleTime',
                type: 'GET',
                data: {
                    doctor: doctor
                },
                success: function(data) {
                    $('#scheduleTime').html(data)
                }
            })
        });
    </script>
</body>

</html>