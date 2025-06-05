<!-- MODUL PESERTA -->
<?php
#PAPAR HEADER
include 'header.php';
require 'setup.php';

#JIKA SEBELUM TARIKH
if($date1 < $date3){
echo "<script>alert('SILA SEMAK SELEPAS TARIKH
$tunjukdate');
window.location='dashboard.php';</script>";
}

session_start();
$PESERTA=$_SESSION["idpeserta"];

#PANGGIL REKOD PESERTA IKUT ID PESERTA
$papar=mysqli_query($con,"SELECT * From peserta
WHERE idpeserta='$PESERTA'");
$info1=mysqli_fetch_array($papar);
#PANGGIL REKOD PEMENANG IKUT ID PESERTA
$WINNER=mysqli_query($con, "SELECT *
From pemenang WHERE idpeserta='$PESERTA'");
$win=mysqli_fetch_array($WINNER);

if(isset($win) && $win == NULL)
{
echo '<script language="javascript">';
echo 'alert("Dukacita dimaklumkan anda tidak
memenangi pertandingan ini"); window.location="dashboard.php"';
echo '</script>';
}
?>

<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<center>
<div><h2 style="color:#f50072; font-family:Lucida Handwriting">KEPUTUSAN PESERTA</h2></div>
<table width="80%" border=0 align="center">
<tr>
<td colspan="5" valign="middle" align="right"><b>
<a href="dashboard.php"><img src="gambar/home.png" height="35" width="35" title="DASHBOARD" onmousedown="bleep.play()"></a>
<a href="logout.php"><img src="gambar/back.png" height="35" width="35" title="LOGOUT" onmousedown="bleep.play()"><a/></b></td>
</tr>
<tr style="color:#ff40c2; font-family: Consolas; font-size: 20"><td td colspan="5">
<hr>
NAMA: <?php echo $info1['nama'];?><br>
NOM.KP <?php echo $info1['idpeserta'];?><br>
NOM.HP: <?php echo $info1['nomhp'];?><br>
</td></tr>
<tr><td colspan="5"><hr><td></tr>
<tr style="color:#ff40c2; font-family: Consolas; font-size: 20"><td colspan="5">
KEPUTUSAN RASMI <?php echo $kata1;?><br>
TEMPAT: <?php 
if (isset($win) && $win == NULL) 
{
	echo "Anda Tidak Memenangi Pertandingan Ini.";
}else{
	echo $win['tempat'];
}
?><br>
<hr>
</center>
</html>