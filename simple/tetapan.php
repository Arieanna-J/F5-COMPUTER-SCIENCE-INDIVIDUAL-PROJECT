<!--MODUL UTAMA SISTEM-->
<?php
#SAMBUNGAN MYSQLI DENGAN NAMA $con
$con = mysqli_connect("localhost","root","","simple");
#PAPARAN MSG JIKA SAMBUNGAN GAGAL
if (mysqli_connect_errno()){
echo "Pangkalan data tidak berhubung!:
".mysqli_connect_error();
}
?>