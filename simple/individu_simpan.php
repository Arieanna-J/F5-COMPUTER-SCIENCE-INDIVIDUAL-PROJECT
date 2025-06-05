<!-- MODUL PESERTA -->
<?php
#SAMBUNG KE P/DATA
require 'tetapan.php';

#TERIMA NILAI YG DI POST
if (isset($_POST['id']) && $_POST['id'] ) {
$idpeserta = $_POST['id'];
$nama = $_POST['nama'];
$nomhp = $_POST['nomhp'];

#MASUK REKOD KE DLM TABLE
$daftar2= "INSERT INTO peserta (idpeserta,nama,nomhp)
VALUES ('$idpeserta','$nama','$nomhp')";

#LAKSANA ARAHAN SQL
$hasil1 = mysqli_query($con, $daftar2);

#MESEJ JIKA BERJAYA
if ($hasil1) {
session_start();
$_SESSION["idpeserta"]=$idpeserta;
echo "<script>alert('Pendaftaran berjaya!'); 
window.location='dashboard.php'</script>";
}else{
echo "<script>alert('Pendaftaran gagal, Anda mungkin sudah mendaftar');
window.location='index.php'</script>";
}
}
?>