<!-- MODUL ADMIN-PESERTA -->
<?php 
#SAMBUNG KE P/DATA 
require 'tetapan.php';
#ELAK SISTEM DARI BYPASS
require 'keselamatan.php';
#DAPATKAN ID DARI URL
$IDHAPUS = $_GET['id'];
#HAPUS REKOD DARI TABLE
$del1 = mysqli_query($con,"DELETE FROM peserta WHERE idpeserta='$IDHAPUS'");
$del2 = mysqli_query($con,"DELETE FROM markah WHERE idpeserta='$IDHAPUS'");
$del3 = mysqli_query($con,"DELETE FROM pemenang WHERE idpeserta='$IDHAPUS'");
clearstatcache();
#PAPAR MSG JIKA BERJAYA
echo "<script>alert('REKOD BERJAYA DIHAPUSKAN');
window.location='peserta.php'</script>";
?> 