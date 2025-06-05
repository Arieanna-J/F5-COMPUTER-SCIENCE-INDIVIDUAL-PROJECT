<!-- MODUL ADMIN-PESERTA -->
<?php 
require 'keselamatan.php';
include 'header.php';
?>

<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<body background="gambar/sks.jpeg">
	<center><h2 style="color:#f50072; font-family:Lucida Handwriting">SENARAI PEMENANG-10 TERATAS</h2>
	</center>
	<table width="70%" border="0" align="center">
		<tr>
			<td colspan="5" valign="middle" align="right"><b>
				<a href="index2.php"><img src="gambar/home.png" width="30" height="30" onmousedown="bleep.play()" title="HOME"></a>
			</b></td></tr>
			<tr style="color:#f50072">
				<td><b>BIL</b></td>
				<td><b>NAMA PESERTA</b></td>
				<td><b>JUMLAH MARKAH</b></td>
				<td><b>KEDUDUKAN</b></td>
				<td><b>TINDAKAN</b></td>
			</tr>
			<?php 
			$no=1;
			$data1=mysqli_query($con," SELECT p.nama,p.idpeserta,
				m.idpeserta,SUM(m.markah) AS Jum, m.markah FROM peserta 
				AS p INNER JOIN markah AS m ON p.idpeserta=m.idpeserta 
				GROUP BY m.idpeserta ORDER BY JUM DESC LIMIT 0,10");
			while ($info1=mysqli_fetch_array($data1))
			{
				#SETKAN KEDUDUKAN
				if ($no==1)
				{
					$hadiah = "PERTAMA";
				}
				else if($no==2)
				{
					$hadiah = "KEDUA";
				}
				else if($no==3)
				{
					$hadiah = "KETIGA";
				}
				else
				{
					$hadiah = "SAGUHATI";
				}
			?>
			<form method="post" action="pemenang_sah.php">
				<tr style="color:#ff40c2; font-family: Consolas; font-size: 20">
					<td><?php echo $no; ?></td>
					<td><?php echo $info1['nama']; ?></td>
					<td><?php echo $info1['Jum']; ?></td>
					<td><?php echo $hadiah; ?>
					<!-- HIDDEN VALUE UTK POST -->
					<input type="text" name="id[]"
					value="<?php echo $info1['idpeserta']; ?>" hidden>
					<input type="text" name="jum[]"
					value="<?php echo $info1['Jum']; ?>" hidden>
					<input type="text" name="tempat[]"
					value="<?php echo $hadiah; ?>" hidden>
					<!-- TAMAT DI SINI -->
				</td>
				<td>
					<a href="pemenang_laporan.php?id=
					<?php echo $info1['idpeserta'];?>&rank=
					<?php echo $hadiah;?>
					&jum=<?php echo $info1['Jum'];?>" onmousedown="bleep.play()">CETAK</a>
				</td>
			</tr>
			<?php $no++; } ?>
			<tr>
				<td colspan="5" valign="middle" align="center">
					<input type="submit" name="submit_row" onmousedown="bleep.play()" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" value="SAHKAN MARKAH" onclick="return confirm('ANDA PASTI?')"></form> <a href="pemenang_list.php"><button onmousedown="bleep.play()" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c">CETAK LIST PEMENANG</button></a>
				</td>
			</tr>
	</table>
	<br>
	<center><font style='font-size:14px'>
		* Senarai Tamat *<br />Jumlah Rekod:<?php echo $no-1; ?>
	</font>
</center>
</body>
</html>