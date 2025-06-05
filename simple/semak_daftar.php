<!--MODUL PESERTA-->
<?PHP
include 'tetapan.php';
include 'setup.php';
#JIKA HARI TIDAK KURANG DARI TARIKH TUTUP
if($date1 < $date2){
#PAPAR MESEJ
echo "<script>alert('PENDAFTARAN MASIH DIBUKA');
window.location='individu_signup.php'</script>";

#JIKA HARI TIDAK KURANG DARI TARIKH HAKIMI
}else if($date1 < $date3){
#PAPAR MESEJ
echo "<script>alert('SEDANG DIHAKIMI');
window.location='index.php'</script>";

#JIKA LEBIH TARIKH HAKIMI
}else{
echo "<script>alert('PENDAFTARAN TELAH DITUTUP');
window.location='index.php'</script>";
}
?>