<!--MODUL PESERTA-->
<?php
#PAPAR HEADER
include 'header.php';
#DAPATKAN ID PELAJAR - SESSION
session_start();
$PESERTA=$_SESSION["idpeserta"];

#LENCONGAN JIKA BELUM LOGIN
if(!isset($PESERTA)) {
#LENCONG KE FAIL INI
header('Location: individu_login.php');
exit(); }

#PANGGIL REKOD PESERTA IKUT ID PESERTA
$papar=mysqli_query($con,"SELECT * FROM peserta
WHERE idpeserta='$PESERTA'");
$info1=mysqli_fetch_array($papar);
?>

<html>
<center>
	<div><h2 style="color:#f50072; font-family:Lucida Handwriting">DASHBOARD PESERTA</h2></div>
	<style>
		.container {
			width: 200px;
			display: flex;
			align-items: center;
		}
		.container img {
			height: 100px;
			width: 100px;
			margin-right: 20px;
		}
	</style>
	<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<table width="80%" border=0 align="center">
<tr>
<td colspan="5" valign="middle" align="right"><b>
<a href="dashboard.php"><img src="gambar/home.png" height="35" width="35" title="DASHBOARD" onmousedown="bleep.play()"></a>
<a href="individu_keputusan.php"><img src="gambar/tugas2.png" height="37" width="37" title="SEMAK KEPUTUSAN" onmousedown="bleep.play()"></a>
<a href="logout.php"><img src="gambar/back.png" height="35" width="35" title="LOGOUT" onmousedown="bleep.play()"><a/>
</b></td>
</tr>
<tr style="color:#ff40c2; font-family: Consolas; font-size: 20">
<td td colspan="5">
<hr>
<div class="container">
<img src="gambar/pp.png" height="200" width="200">
<div style="min-width:800px;">
NAMA: <?php echo $info1['nama'];?><br>
NOM.KP: <?php echo $info1['idpeserta'];?><br>
NOM.HP: <?php echo $info1['nomhp'];?><br>
</div>
</div>
</td>
</tr>
<tr>
<td colspan="5" align="center">
<hr>
<td>
</tr>
</center>
</html>