<!--MODUL UTAMA SISTEM-->
<?php
#SAMBUNGAN KE P/DATA
require 'tetapan.php';

#PANGGIL TABLE TETAPAN
$tetapan=mysqli_query($con,"SELECT * FROM tetapan");
$Setup1=mysqli_fetch_array($tetapan);

#NAMA SISTEM
$namasys=$Setup1['namasys'];

#BANNER HEADER
$kata1=$Setup1['kata1'];
$lanjut1=$Setup1['detail1'];
$kata2=$Setup1['kata2'];
$lanjut2=$Setup1['detail2'];

#TARIKH PENTING
$tamat_daftar=$Setup1['tamat_daftar'];
$tamat_hakim=$Setup1['tamat_hakim'];

#BANNER PENTING
$banner="gambar/owo.png";
$sijil="gambar/sijil.jpg";
$logo="gambar/download (6).png";

#KAWALAN TARIKH
$date1=date_create(date('Y-m-d'));
$date2=date_create($tamat_daftar);
$date3=date_create($tamat_hakim);

#TUKAR FORMAT TARIKH
$tunjukdate=date_format($date2,"d-m-Y:");
?>