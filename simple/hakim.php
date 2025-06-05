<!-- MODUL ADMIN-HAKIM -->
<?php
require 'keselamatan.php';
include 'header.php';
?>

<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<body background="gambar/sks.jpeg"><center><h2 style="color:#f50072; font-family:Lucida Handwriting">
	SENARAI HAKIM BELUM ADA TUGASAN</h2></center>
	<table width="70%" border="0" align="center">
		<tr><td colspan="6" valign="middle" align="right"><b>
			<a href="hakim_bertugas.php">
				<img src="gambar/tugas2.png" width="34" height="34O" title="HAKIM BERTUGAS" onmousedown="bleep.play()"></img></a> 
				<a href="hakim_tambah.php">
				<img src="gambar/addhakim.png" width="30" height="30" title="HAKIM TAMBAH" onmousedown="bleep.play()"></img></a>  
				<a href="hakim_import.php"> 
					<img src="gambar/import.png" width="30" height="30" title="IMPORT HAKIM" onmousedown="bleep.play()"></img></a>  
				<a href="index2.php"><img src="gambar/home.png" width="30" height="30" title="HOME" onmousedown="bleep.play()">
				</img></a></b>
			</td> </tr>

			<tr style="color:#f50072">
				<td><b>BIL</b></td>
				<td><b>NAMA</b></td>
				<td><b>ID HAKIM</b></td>
				<td><b>PASSWORD</b></td>
				<td><b>TINDAKAN</b></td>
			</tr>

		<?php
		#SAMBUNG TABLE ADMIN-ITEM
		$no=1;
		$data1=mysqli_query($con, "SELECT idadmin, password, nama, aras FROM admin as t2 WHERE NOT EXISTS (SELECT * FROM hakim as t1 WHERE t1.idadmin = t2.idadmin) AND t2.aras='HAKIM'");
		while ($info1=mysqli_fetch_array($data1))
		{
			$resin1 = strtoupper($info1['nama']);
			?>
			<tr style="color:#ff40c2; font-family: Consolas; font-size: 20">
				<td><?php echo $no; ?></td>
				<td> <?php echo $info1['nama']; ?></td>
				<td> <?php echo $info1['idadmin']; ?></td>
				<td> <?php echo $info1['password']; ?></td>
				<td>
					<a href="hakim_profail.php?id=<?php echo $info1['idadmin'];?>"><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">TUGASAN</button></a> <a href="hakim_hapus.php?id=<?php echo $info1['idadmin'];?>"onclick="return confirm('ANDA PASTIANDA MAHU HAPUSKAN <?php echo $resin1; ?> ?')" onmousedown="bleep.play()"><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c">HAPUS</button></a>
				</td></tr>
				<?php $no++; } ?>
			</table></br>
			<center><font style='font-size:14px'>
				* Senarai Tamat *<br />Jumlah Hakim:<?php echo $no-1; ?>
			</font>
		</center>
	</body>
	</html>

