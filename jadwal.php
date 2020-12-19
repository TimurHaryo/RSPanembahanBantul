<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Doctor Schedule</title>
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
    <header></header>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: linear-gradient(91deg, rgb(32,242,255) 0%, rgb(0,178,254) 100%), rgb(9,222,235);height: 61px;">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);text-align: center;font-family: Allerta, sans-serif;border-style: none;text-shadow: 2px 0px 3px rgb(2,182,255);"><img class="img-fluid swing animated" src="assets/img/rs%20logo.png" style="width: 30px;margin: 0 10;filter: grayscale(0%);border-style: none;">RSUD Panembahan
                Senopati</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
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
                <div class="col-md-12">
                    <h2 class="text-center flash animated" style="margin-top: 20px;">Doctor Schedule</h2>
                    <div class="alert alert-warning" role="alert" data-aos="flip-up" data-aos-delay="50" style="border-radius: 0px;border-top-left-radius: 12px;border-top-right-radius: 12px;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span><strong>Perhatian</strong> Pastikan Data
                            yang Anda Inputkan Sudah Benar!</span></div>
                    <div class="row" style="padding-right: 24px; padding-left: 24px;">

                        <div class="col-lg-6">
                            <td style="border:none; color: rgb(72,72,72);">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Tanggal : <?php echo " \n  " . date(" \n d  M  Y") . " \n  "; ?></span>
                                    </div>
                            </td>
                            
                            <br>
                            <?php include("connection.php");
                            ?>
                            <tr>
                                <td style="border: 0px;color: rgb(72,72,72); min-width:150px; max-width:300px;">
                                    <div class="form-group">
                                        <label for="clinic">Clinic Destination</label>
                                        <select class="form-control" id="clinic">
                                            <option disabled selected> Pilih </option>
                                            <?php
                                            $query_get_clinic = "SELECT * FROM clinic";
                                            $result_clinic = mysqli_query($koneksi->connect, $query_get_clinic);
                                            if ($result_clinic->num_rows > 0) {
                                                while ($row = mysqli_fetch_assoc($result_clinic)) {
                                                    echo "<option value='" . $row['id_clinic'] . "'>Poliklinik " . $row['name_clinic'] . "</option>";
                                                }
                                            }
                                            mysqli_close($koneksi->connect);
                                            ?>
                                        </select>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td style="border: 0px;color: rgb(72,72,72); min-width:150px; max-width:300px;">
                                    <div class="form-group">
                                        <label for="doctor">Doctor</label>
                                        <select class="form-control" id="doctor">
                                            <option disabled selected> Pilih Dokter </option>
                                        </select>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td style="border: 0px;color: rgb(72,72,72); min-width:150px; max-width:250px;">
                                    <div class="form-group">
                                        <label for="sel1">Time</label>
                                        <select class="form-control" id="scheduleTime">
                                            <option disabled selected> Pilih Waktu </option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </div>

                        <div class="col-lg-6">
                            <br>
                            <table class="table table-responsive" style="background-color:white; border-radius: 5px; max-width: 480px;">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; max-width: 20px">No.</th>
                                        <th style="text-align: center; min-width: 180px; max-width: 180px;">Nama Dokter</th>
                                        <th style="text-align: center; min-width: 120px; max-width:fit-content;">Hari Praktek</th>
                                        <th style="text-align: center; min-width: 140px; max-width: 150px;">Jam Praktek</th>
                                    </tr>
                                </thead>
                                <tbody id="schedule">

                                </tbody>
                            </table>

                            <div class="container">
                                <table id="table"></table>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col d-flex justify-content-center" style="padding: 56px;">
                            <div class="btn-group" role="group" style="border-style: none;"><button class="btn btn-primary text-center justify-content-xl-center align-items-xl-end" type="button" style="background: #b9cad6;color: #000000;font-weight: bold;border-style: none;">Kembali</button><button class="btn btn-primary" type="button" style="background: #dfe8ee;color: rgb(0,0,0);font-weight: bold;border-style: none;">Lanjutkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="assets/js/Advanced-NavBar---Multi-dropdown.js"></script>
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