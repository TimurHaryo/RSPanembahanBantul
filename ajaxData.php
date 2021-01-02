<?php
include "connection.php";
$action = $_GET['action'];

switch ($action) {
    case 'doctor':
        echo '<option disabled selected> Pilih Dokter </option>';
        // get id clinic
        $name_clinic = $_GET['clinic'];
        // query join get doctor
        $query_get_doctor = "SELECT doc.id_doctor as id_doc, name_doctor FROM clinic_schedule cs INNER JOIN doctor doc ON cs.id_doctor = doc.id_doctor
                            INNER JOIN clinic ON cs.id_clinic = clinic.id_clinic WHERE clinic.name_clinic = '$name_clinic'";
        // execution query
        $query = mysqli_query($koneksi->connect, $query_get_doctor);
        // check if result > 0
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                echo '<option value=' .  $row['id_doc'] . '>' . $row['name_doctor'] . '</option>';
                
            }
        } else {
            echo '<option disabled selected>Dokter tidak ditemukan.</option>';
        }
        break;

    case 'schedule':
        // get id clinic
        $name_clinic = $_GET['clinic'];
        // query join get schedule
        $query_get_schedule = "SELECT doc.name_doctor as doc_name, sc.day, sc.start, sc.end
                            FROM clinic_schedule cs 
                            INNER JOIN doctor doc 
                            ON cs.id_doctor = doc.id_doctor 
                            INNER JOIN schedule sc
                            ON cs.id_schedule = sc.id_schedule
                            INNER JOIN clinic
                            ON cs.id_clinic = clinic.id_clinic
                            WHERE clinic.name_clinic = '$name_clinic'";
        // execution query
        $query = mysqli_query($koneksi->connect, $query_get_schedule);
        // check if result > 0
        if (mysqli_num_rows($query) > 0) {
            $number = 1;
            while ($row = mysqli_fetch_assoc($query)) {
                echo '<tr>';
                echo '<td>' . $number . '.</td>';
                echo '<td>' . $row['doc_name'] . '</td>';
                echo '<td>' . $row['day'] . '</td>';
                echo '<td>' . $row['start'] . ' - ' . $row['end'] . '</td>';
                echo '</tr>';
                ++$number;
            }
        }
        break;

        case 'scheduleTime':
            echo '<option disabled selected> Pilih Waktu </option>';

            // get id doctor
            $name_doctor = $_GET['doctor'];
            $html_entity = htmlentities($name_doctor, null, 'utf-8');
            $decoded_entity = str_replace("&nbsp;", " ", $html_entity);
            $doctor_real_name = html_entity_decode($decoded_entity);
            // query join get schedule
            $query_get_schedule = "SELECT cs.id_schedule, sc.start, sc.end 
                                FROM clinic_schedule cs 
                                INNER JOIN schedule sc 
                                ON cs.id_schedule = sc.id_schedule 
                                INNER JOIN doctor
                                ON cs.id_doctor = doctor.id_doctor
                                WHERE doctor.name_doctor LIKE '$doctor_real_name'";
            // execution query
            $query = mysqli_query($koneksi->connect, $query_get_schedule);
            // check if result > 0
            if (mysqli_num_rows($query) > 0) {
                $number = 1;
                while ($row = mysqli_fetch_assoc($query)) {
                    echo '<option value=' . $row['start'] . ' - ' . $row['end'] . '>' . $row['start'] . ' - ' . $row['end'] . '</option>';
                }
            } else {
                echo '<option disabled selected>Dokter tidak ditemukan.</option>';
            }
            break;
}
