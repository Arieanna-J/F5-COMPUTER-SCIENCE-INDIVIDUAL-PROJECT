<!-- MODUL ADMIN-HAKIM -->
<?php
require 'keselamatan.php';
require 'tetapan.php';
include 'header.php';

$HAKIM=$_SESSION["idadmin"];
#PANGGIL REKOD PESERTA IKUT ID PESERTA
$papar=mysqli_query($con,"SELECT * FROM admin
WHERE idadmin='$HAKIM'");
$info1=mysqli_fetch_array($papar);
$KEPAKARAN=mysqli_query($con, "SELECT * FROM hakim AS t1 INNER JOIN item AS t2 ON t1.iditem=t2.iditem WHERE t1.idadmin='$LOGIN'");
$info2=mysqli_fetch_array($KEPAKARAN);

?>

<html>
<body>
<center>
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
<a href="index2.php"><img src="gambar/home.png" height="35" width="35" title="HOME" onmousedown="bleep.play()"></a>
<a href="pemarkahan.php"><img src="gambar/tugas.png" height="35" width="35" title="PEMARKAHAN" onmousedown="bleep.play()"></a>
<a href="logout.php"><img src="gambar/back.png" height="35" width="35" title="LOGOUT" onmousedown="bleep.play()"><a/>
</b></td>
</tr>
<div><h2 style="color:#f50072; font-family:Lucida Handwriting">HAKIM PROFAIL</h2></div>
<tr style="color:#ff40c2; font-family: Consolas; font-size: 20">
<td td colspan="5">
<hr>
<div class="container">
<img src="gambar/pp.png" height="200" width="200">
<div style="min-width:800px;">
NAMA: <?php echo $info1['nama'];?><br>
ID HAKIM: <?php echo $info1['idadmin'];?><br>
TUGASAN HAKIM: <?php
if($info2 == NULL){
	echo "Tiada Tugasan Lagi";
}else{
	echo $info2['item'];
}
?>
<br>
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