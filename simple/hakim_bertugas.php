<!-- MODUL HAKIM -->
<?php
require 'keselamatan.php' ;
include 'header.php' ;
?>

<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<body background="gambar/sks.jpeg">
<center><h2 style="color:#f50072; font-family:Lucida Handwriting">SENARAI AGIHAN TUGAS HAKIM PERTANDINGAN
</h2></center>
<table width='70%' border=0 align='center'>
<tr>
<td colspan='6' valign='middle' align='right'><b>
<a href='hakim.php'>
<img src="gambar/clock.png" width="30" height="30" title="HAKIM TIDAK BERTUGAS" onmousedown="bleep.play()"></a>
<a href='hakim_tambah.php'>
<img src="gambar/addhakim.png" width="30" height="30" title="HAKIM TAMBAH" onmousedown="bleep.play()"></a>
<a href='hakim_import.php'>
<img src="gambar/import.png" width="30" height="30" title="IMPORT HAKIM" onmousedown="bleep.play()"></a>
<a href='index2.php'>
<img src="gambar/home.png" width="30" height="30" title="HOME" onmousedown="bleep.play()"></a></b>
</td>
</tr>
<tr style="color:#f50072">
<td><b>BIL</b></td>
<td><b>ID HAKIM</b></td>
<td><b>NAMA</b></td>
<td><b>KRITERIA</b></td>
<td><b>TINDAKAN</b></td>
</tr>
<?php
#SAMBUNG TABLE ADMIN-ITEM
$no=1;
$data1=mysqli_query($con,"SELECT *
FROM hakim AS t1
RIGHT JOIN admin AS t2
ON t1.idadmin=t2.idadmin
INNER JOIN item AS t4
ON t1.iditem=t4.iditem
WHERE t2.aras='HAKIM'
ORDER BY t2.nama ASC");
while ($info1=mysqli_fetch_array($data1))
{
	$resin1 = strtoupper($info1['nama']);
?>
<tr style="color:#ff40c2; font-family: Consolas; font-size: 20">
<td><?php echo $no; ?></td>
<td><?php echo $info1['idadmin']; ?></td>
<td><?php echo $info1['nama']; ?></td>
<td><?php echo $info1['item']; ?></td>
<td>
<a href='hakim_edit.php?id=
<?php echo $info1[ 'idadmin' ];?>'><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">EDIT</button></a> 
<a href='hakim_hapus.php?id=
<?php echo $info1[ 'idadmin' ];?>'onclick="return confirm('ANDA PASTI ANDA MAHU HAPUSKAN <?php echo $resin1; ?> ?')"><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">HAPUS</button></a>
</td>
</tr>
<?php $no++; } ?>
</table>
<br>
<center><font style='font-size:14px'>
* Senarai Tamat *<br />Jumlah Hakim:<?php echo $no-1; ?>
</font>
</center>
</body>
</html>