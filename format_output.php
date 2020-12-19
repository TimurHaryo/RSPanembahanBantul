<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
    <style type="text/css">
        .col {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
        }

    .table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    margin: 0;
    position: absolute;
    top: 34%;
    left: 36%;
    transform: translate(-50%, -50%);
    }


    .table-borderless tbody+tbody,
    .table-borderless td,
    .table-borderless th,
    .table-borderless thead th {
        border: 0;
    }

    .table td,
    .table th {
        padding: .75rem;
        vertical-align: top;
    }
    @media (min-width:1200px) {
        .justify-content-xl-center {
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
    }

    @media (min-width:1200px) {
        .d-xl-flex {
            display: -ms-flexbox !important;
            display: flex !important;
        }
    }

    img {
    height: 200px;
    position: relative;
    margin: 0;
    position: absolute;
    top: 50%;
    left: 36%;
    transform: translate(-50%, -50%);
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center" style="text-align: center;">Booking Tiket</h3>
                <h4 class="text-center" style="text-align: center;">Registered Patient</h4>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive table-borderless">
                            <table class="table table-bordered" style="align-content: center;" >
                                <tbody>
                                    <tr>
                                        <td style="width: 100px;">Klinik</td>
                                        <td class="text-center" style="width: 30px;">:</td>
                                        <td>name_clinic</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Dokter</td>
                                        <td class="text-center">:</td>
                                        <td>name_dokter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col  d-xl-flex justify-content-xl-center">
                            <img src="temp/007_4.png" alt="qr">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>