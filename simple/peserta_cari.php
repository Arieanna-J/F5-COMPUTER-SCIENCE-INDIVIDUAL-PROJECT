<!-- MODUL ADMIN-PESERTA -->
	<?php 
	require 'keselamatan.php';
	include 'header.php';

	#GET ID FROM URL
	$jumpakp= $_POST['carikp'];

	#JIKA ID KOSONG
	if($jumpakp==NULL){

		#PAPAR MESEJ JIKA NULL
		echo "<script>alert('SILA TAIP NOM.KP');
		window.location='peserta.php'</script>";
	}
?>
<html>
<body background="gambar/sks.jpeg">
	<center><h2 style="color:#f50072; font-family:Lucida Handwriting">SENARAI PESERTA BERDIGIT "<?php echo $jumpakp; ?>"</h2></center>
	<table width="70%" border=0 align="center">
		<tr>
			<td colspan="6" valign="middle" align="right"><b>
				<a href="peserta.php"><img src="gambar/back.png" width="30" height="30"></a>⠀
				<a href="index2.php"><img src="gambar/home.png" width="30" height="30"></a>
				<hr>
			</b></td></tr>

			<!-- PAPAR MAKLUMAT PESERTA -->
			<tr style="color:#f50072">
				<td><b>BIL</b></td>
				<td><b>NOM.KP</b></td>
				<td><b>NAMA</b></td>
				<td><b>NOM. HP</b></td>

			</tr>
			<?php 

			#PANGGIL TABLE PESERTA 
			$no=1;
			$data1=mysqli_query($con,"SELECT * FROM peserta WHERE idpeserta like '%$jumpakp%' ORDER BY nama ASC");
			while ($info1=mysqli_fetch_array($data1))
			{
			?>
			<tr style="color:#ff40c2; font-family: Consolas; font-size: 20">
				<td><?php echo $no; ?></td>
				<td><?php echo $info1['idpeserta']; ?></td>
				<td><?php echo $info1['nama']; ?></td>
				<td><?php echo $info1['nomhp']; ?></td>
			</tr>
			<?php $no++; } ?>

		</table>
		<br>
		<center><font style='font-size:14px'>
			* Senarai Tamat *<br />Jumlah Peserta:<?php echo $no-1; ?>
		</font>
	</center>
</body>
</html>