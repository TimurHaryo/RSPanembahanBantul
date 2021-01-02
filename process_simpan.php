<?php
session_start();
$id_patient = $_SESSION['norm'];
include_once("connection.php");
$a = 0;
for ($i = 0; $i<6; $i++) 
{
    $a .= mt_rand(0,9);
}
$ab = strval($a); 
$aa = "RS-";
$kode = $aa.$ab;
$berhasil =0;
$ide_clinic = $_SESSION["ses_policlinic"];
$ide_doc = $_SESSION['ses_doctor'];
$ide_time = $_SESSION["ses_time"];
$queryS = "SELECT id_clinic_schedule FROM clinic_schedule WHERE id_clinic=$ide_clinic";
$resultS = mysqli_query($koneksi->connect, $queryS);
$row = mysqli_fetch_array($resultS);
$id_clinic_scheduling = $row['id_clinic_schedule'];
echo $id_clinic_scheduling;
//$_SESSION['ses_time'] = $id_clinic_scheduling;
$_SESSION['kode_boking'] = $kode;
$query = "INSERT INTO booking (id_booking, id_patient, id_clinic_scheduling) VALUES ('$kode','$id_patient',$id_clinic_scheduling)";
$result = mysqli_query($koneksi->connect, $query);
if ($query == TRUE) {
    echo "New record created successfully";
    $berhasil = 1;
  } else {
    echo "Error: " . $query . "<br>";
}

$name_clinic = $_SESSION['ses_policlinic'];
$query2 = "SELECT booking.id_booking, clinic.name_clinic, clinic.queue
FROM booking INNER JOIN clinic_schedule
ON booking.id_clinic_scheduling=clinic_schedule.id_clinic_schedule
INNER JOIN clinic
ON clinic_schedule.id_clinic=clinic.id_clinic
WHERE clinic.id_clinic = '$name_clinic'";
$result2 = mysqli_query($koneksi->connect, $query2);
//$no = 1;
//$query2 = "UPDATE clinic SET queue = 1 WHERE name_clinic = '$name_clinic'";
//mysqli_query($koneksi->connect, $query2);

  // nilai awal increment
 $no = 1;
while ($data  = mysqli_fetch_array($result2))
{
   // membaca id dari record yang tersisa dalam tabel
   $id = $data['queue'];
   
   // proses updating id dengan nilai $no
   $query3 = "UPDATE clinic SET queue = queue+1 WHERE id_clinic = '$name_clinic'";
   mysqli_query($koneksi->connect, $query3);
 
   // increment $no
   $no++;
} 
// mengubah nilai auto increment menjadi $no terakhir ditambah 1
$query2 = "ALTER TABLE clinic AUTO_INCREMENT = $no";
mysqli_query($koneksi->connect, $query2);
if ($query2 == TRUE) {
    echo " Queue created successfully";
  } else {
    echo "Error Queue: " . $query2 . "<br>";
}

if ($berhasil==1){
    header("Location: cetak.php");
}else{
    echo "Gagal Proses";
}
?>