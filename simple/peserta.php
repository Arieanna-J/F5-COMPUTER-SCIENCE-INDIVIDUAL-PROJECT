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
	<center>
		<h2 style="color: #f50072; font-family:Lucida Handwriting">SENARAI PESERTA BERDAFTAR MENGIKUT KATEGORI
		</h2></center>
		<table width="70%" border=0 align="center">
		<form name="searchForm" method="post" action="peserta_cari.php">
			<tr style="color:#f50072"><td colspan="5" valign="middle" align="right"><b>
				CARIAN NO.K/P:
				<input type="text" style="color:HOTPINK; background-color:#ffd1e7; font-family:Arvo; border-color:#e8006c" name="carikp" maxlength='12' autofocus>
				<input type="submit" name="SUBMIT" id="SUBMIT" value="CARI" onmousedown="bleep.play()" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c">
		</form>   ⠀
			<a href="index2.php"><img style="margin:-9px;" src="gambar/home.png" width="30" height="30" title="HOME" onmousedown="bleep.play()"></a>
			<hr>
		</b></td></tr>
		<tr style="color:#f50072">
			<td><b>BIL</b></td>
			<td><b>NOM.KP</b></td>
			<td><b>NAMA</b></td>
			<td><b>TINDAKAN</b></td>
		</tr>
		<?php
		$no=1;
		$data1=mysqli_query($con,"SELECT * FROM peserta ORDER BY nama ASC");
		while ($info1=mysqli_fetch_array($data1))
		{
			$resin1 = strtoupper($info1['nama']);
		?>
	</form>
		<tr style="color:#ff40c2; font-family: Consolas; font-size: 20">
			<td><?php echo $no; ?></td>
			<td><?php echo $info1['idpeserta']; ?></td>
			<td><?php echo $info1['nama']; ?></td>
			<td><a href="peserta_hapus.php?id=
				<?php echo $info1['idpeserta'];?>"
				onclick="return confirm('ANDA PASTI ANDA MAHU HAPUSKAN <?php echo $resin1; ?> ?')"><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">HAPUS</button></a></td>
			</tr>
			<?php $no++; } ?>
		</table>
	</main>
	<br><center><font style='font-size:14px'>
		* Senarai Tamat *<br />Jumlah Peserta:<?php echo $no-1; ?>
	</font>
</center>
</body>
</html>