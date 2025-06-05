<!-- MODUL HAKIM -->
<?php
#SAMBUNG KE P/DATA
require 'tetapan.php' ;
#ELAK SISTEM DARI BYPSS
require 'keselamatan.php' ;
#DAPATKAN ID HAKIM
$IDHAPUS = $_GET[ 'id' ];
#HAPUSKAN REKOD HAKIM
$hapuskan1 = mysqli_query($con, "DELETE FROM admin WHERE
idadmin='$IDHAPUS' ");
$hapuskan2 = mysqli_query($con, "DELETE FROM markah WHERE
idadmin='$IDHAPUS' ");
$hapuskan3 = mysqli_query($con, "DELETE FROM hakim WHERE
idadmin='$IDHAPUS' ");
clearstatcache();
#MSG POP UP JIKA BERJAYA
Echo "<script>alert( 'REKOD BERJAYA DIHAPUSKAN' );
window.location= 'hakim.php'</script>" ;
?>