<!-- MODUL HAKIM BERI MARKAH -->
<?php
	require 'keselamatan.php';
	include 'header.php';

#PAPARKAN ITEM PEMARKAHAN YANG TELAH DITETAPKAN
$KEPAKARAN=mysqli_query($con, "SELECT * FROM hakim AS t1 INNER JOIN item AS t2 ON t1.iditem=t2.iditem WHERE t1.idadmin='$LOGIN'");
$info1=mysqli_fetch_array($KEPAKARAN);
if($info1 == NULL){
	echo "<script>alert('Anda Tidak Diberi Tugas, Sila Semak Kemudian');window.location='index2.php'</script>";
}
?>
<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<body background="gambar/waa.jpeg">
	<center><h2 style="color:#f50072; font-family:Lucida Handwriting">SENERAI PESERTA BELUM DINILAI</h2>
		<h3 style="color:#f50072; line-height: 10%; letter-spacing:2px;"><i>Item:<?php echo $info1['item'];?></i></h3></center>
		<table width="80%" border=0 align="center">
			<tr>
				<td colspan="3" valign="middle" align="right"><b>
					<a href="hakim_pp1.php"><img src="gambar/pp.png" width="35" height="35" title="HAKIM PROFAIL" onmousedown="bleep.play()"></a>
					<a href="index2.php"><img src="gambar/home.png" width="35" height="35" title="HOME" onmousedown="bleep.play()"></a></b></td>
				</tr>
				<tr style="color:#f50072">
					<td><b>BIL</b></td>
					<td><b>TINDAKAN</b></td>
				</tr>
				<?php
				#PAPAR REKOD YANG BELUM DIBERIKAN MARKAH
				$no=1;
				$data1=mysqli_query($con, "SELECT * FROM peserta as t2 WHERE NOT EXISTS (SELECT * FROM markah as t1 WHERE t1.idadmin='$LOGIN' AND t1.idpeserta = t2.idpeserta) ORDER BY t2.nama ASC");

				while ($info1=mysqli_fetch_array($data1))
				{
					?>
					<tr style="color:#ff40c2; font-family: Consolas; font-size: 20">
						<td><?php echo $no; ?></td>
						<td><?php echo $info1['nama']; ?></td>
						<td><a href="permarkahan_beri.php?id=<?php echo $info1['idpeserta'];?>"><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">NILAIKAN</button></a>
						</td>
					</tr>
					<?php $no++; } ?>
				</table>
				<br>
				<center><font style='font-size:14px'>
					* Senarai Tamat *<br />Jumlah Peserta :<?php echo $no-1; ?>
				</font>
			</center>
		</body>
		</html>
