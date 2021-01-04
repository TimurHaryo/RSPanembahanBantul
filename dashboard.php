<?php
session_start();
include_once("connection.php");

$query =  "SELECT * FROM patient where id_patient='{$_SESSION['norm']}'";
$result = mysqli_query($koneksi->connect, $query);
$row = mysqli_fetch_array($result);
$name = $row['name_patient'];
$id = $row['id_patient'];
$idnum = $row['identity_number'];
$tgl_lahir = $row['tgl_lahir'];
$address = $row['address_patient'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);text-align: center;font-family: Allerta, sans-serif;border-style: none;text-shadow: 2px 0px 3px rgb(2,182,255);"><img class="img-fluid swing animated" src="assets/img/rs%20logo.png" style="width: 30px;margin: 0 10;filter: grayscale(0%);border-style: none;">RSUD Panembahan Senopati</a>
            <button
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <!-- <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                    </ul>
                </div> -->
        </div>
    </nav>
    <main></main>
    <div class="text-center d-flex d-xl-flex justify-content-center order-1 justify-content-xl-center" style="align-content: center;">
        <div class="container text-left" style="margin: 31px;">
            <div class="row" style="background: #15dcff;border-style: none;border-radius: 30px;margin: 40px 0 0 0;box-shadow: 20px 40px 7px 3px rgba(33,37,41,0.7);">
                <div class="col-md-12">
                    <h4 class="text-center bounce animated" style="margin-top: 20px;">Patient Profile Data</h4>
                    <h5 class="text-center flash animated" style="margin: 10px 0 50px 0;">Registered Patient</h5>
                    <br><br>
                    <div class="row order-1">
                        <div class="col">
                            <div class="table-responsive table-borderless">
                                <table class="table table-bordered">
                                    <tbody style="border: none;">
                                        <tr>
                                            <td style="border: 0px;color: rgb(72,72,72);">
                                                Name
                                                <div class="input-group input-group-sm mb-3">
                                                    <input type="text" class="form-control" value="<?php echo $row['name_patient']?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border: 0px;color: rgb(72,72,72);">
                                                Medical Number
                                                <div class="input-group input-group-sm mb-3">
                                                    <input type="text" class="form-control" value="<?php echo $row['id_patient']?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border: 0px;color: rgb(72,72,72);">
                                                NIK
                                                <div class="input-group input-group-sm mb-3">
                                                    <input type="text" class="form-control" value="<?php echo $row['identity_number']?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border: 0px;color: rgb(72,72,72);">
                                                Birth Date
                                                <div class="input-group input-group-sm mb-3">
                                                    <input type="text" class="form-control" value="<?php echo $row['tgl_lahir']?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border: 0px;color: rgb(72,72,72);">
                                                Address
                                                <div class="input-group input-group-sm mb-3">
                                                    <input type="text" class="form-control" value="<?php echo $row['address_patient']?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border: 0px;color: rgb(72,72,72);">
                                                Insurance
                                                <div class="input-group input-group-sm mb-3">
                                                    <input type="text" class="form-control" value="BPJS/Umum" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
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
                                        <p style="text-align: center">Active Booking</p>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="table-responsive table-light" style="border-radius: 20px;">
                                                        <table class="table table-bordered table-striped">
                                                            <tr>
                                                                <th>No</th>
                                                                <th>ID Booking</th>
                                                                <th>Name</th>
                                                                <th>Clinic</th>
                                                                <th>Day</th>
                                                                <th>Time</th>
                                                            </tr>

                                                            <?php
                                                            include_once("connection.php");

                                                            
                                                            $query =  "SELECT doc.name_doctor, cl.name_clinic, sc.day, sc.start, sc.end, bk.id_booking
                                                                        FROM clinic_schedule cs
                                                                        INNER JOIN doctor doc 
                                                                        ON cs.id_doctor = doc.id_doctor
                                                                        INNER JOIN clinic cl
                                                                        ON cs.id_clinic = cl.id_clinic
                                                                        INNER JOIN schedule sc 
                                                                        ON cs.id_schedule = sc.id_schedule 
                                                                        INNER JOIN booking bk 
                                                                        ON cs.id_clinic_schedule = bk.id_clinic_scheduling 
                                                                        WHERE bk.id_patient='{$_SESSION['norm']}'";

                                                            $result = mysqli_query($koneksi->connect, $query);
                                                            // $row = mysqli_fetch_array($result);
                                                            $i = 1;
                                                            while($row = mysqli_fetch_array($result))
                                                            // $name = $row['name_doctor'];
                                                            // $clinic = $row['name_clinic'];
                                                            // $day = $row['day'];
                                                            // $start = $row['start'];
                                                            // $end = $row['end'];
                                                            {
                                                            ?>

                                                            <tr>
                                                                <td>
                                                                    <?php
                                                                        echo $i . '.';
                                                                        $i++;
                                                                    ?>
                                                                </td>
                                                                <td><?php echo $row['id_booking']//$name?></td>
                                                                <td><?php echo $row['name_doctor']//$name?></td>
                                                                <td><?php echo $row['name_clinic']//$clinic?></td>
                                                                <td><?php echo $row['day']//$day?></td>
                                                                <td><?php echo $row['start']/*$start*/ . '-' . $row['end']//$end?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                    <!-- <a class="btn btn-light" href="deletebooking.php?id=<?php echo $row['id_booking']?>">Cancel Booking</a> -->
                                                    <!-- <a class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter">Cancel Booking</a> -->
                                                    
                                                    <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                        <button class="btn btn-light btn-md btn-block" id="btn" data-toggle="modal" data-target="#exampleModalCenter">Cancel Booking</button>
                                                        </div>
                                                        
                                                    <!-- Button trigger modal
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                    Launch demo modal
                                                    </button> -->

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="exampleModalLongTitle">Reminder!</h6>
                                                            <a class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4>Are you sure to delete your booking data?</h4> 
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a class="btn btn-danger" data-dismiss="modal">Cancel</a>
                                                            <a class="btn btn-primary" href="deletebooking.php?id=<?php echo $row['id_booking']?>">Yes, delete it!</a>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <?php
                                                    }
                                                    ?>
                                                    <div class="col-md-4">
                                                        <button class="btn btn-dark btn-md btn-block" type="submit">
                                                        <a href="cetak.php" style="color: #ffff;">Print Ticket</a>
                                                        </button>
                                                        </div>
                                                    </div>
                                                    <!-- <a class="btn btn-dark" href="cetak.php">Print Ticket</a> -->
                                                </center>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="row d-inline order-1" style="width: 1142px;padding: 0;margin: -31px;height: 158px;border-radius: 0;">
                        <div class="col">
                            <div class="jumbotron" style="padding: 4px;border-radius: 30px;margin: -30px;">
                                <div class="row">
                                    <div class="col" style="margin: 10px;">
                                        <h5>Ketentuan Pendaftaran</h5>
                                        <p style="padding: 0px;margin-bottom: 0px;">- 1 Ketuhanan yang maha esa</p>
                                        <p style="padding: 0px;margin-bottom: 0px;">- 2&nbsp;</p>
                                        <p style="padding: 0px;">- 3</p>
                                    </div>
                                    <div class="col-xl-4 d-xl-flex justify-content-xl-center align-items-xl-center">
                                        <img class="tada animated infinite" src="assets/img/rs%20logo.png" style="width: 92px;" loading="auto">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- <script>
    const btn = document.getElementById('btn');
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    btn.addEventListener('click', function(){
        swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
        }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
            )
        }
        })
    });
    </script> -->

</body>
</html>