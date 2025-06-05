<!--MUDUL ADMIN-ITEM PEMARKAHAN-->
<?php
require 'keselamatan.php';
include 'header.php';

#PANGGIL REKOD PERTANDINGAN IKUT ID
$papar=mysqli_query($con, "SELECT * FROM item");
$info1=mysqli_fetch_array($papar);
?>

<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<body background="gambar/sks.jpeg"><center>
<h2 style="color:#f50072; font-family:Lucida Handwriting">SENARAI ITEM PEMARKAHAN PERTANDINGAN</h2>
</center>
<table width='70%' border=0 align='center'>
<tr>
<td colspan='4' valign='middle' align='right'><b>
<a href='item_tambah.php'><img src="gambar/addhakim.png" width="30" height="30" title="ITEM TAMBAH" onmousedown="bleep.play()"></a>
<a href='index2.php'><img src="gambar/home.png" width="30" height="30" title="HOME" title="HOME" onmousedown="bleep.play()"></a>
</b></td></tr>
<tr style="color:#f50072">
<td><b>BIL</b></td>
<td><b>ITEM</b></td>
<td><b>MARKAH</b></td>
<td><b>TINDAKAN</b></td>
</tr>
<?php
#SAMBUNG KE TABLE ITEM
$no=1;
$jum=0;
$data1=mysqli_query($con,"SELECT * FROM item
ORDER BY markah DESC");
while ($info1=mysqli_fetch_array($data1))
{
?>
<tr style="color:#ff40c2; font-family: Consolas; font-size: 20">
<td><?php echo $no; ?></td>
<td><?php echo $info1['item']; ?></td>
<td><?php echo $info1['markah'];
$jum+=$info1['markah'];?></td>
<td><a href='item_edit.php?id=
<?php echo $info1['iditem'];?>'><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">EDIT/HAPUS
</button></a>
</td></tr>
<?php $no++; } ?>
<tr>
<b><td colspan='2' align='right' style="color:#db258f; font-family: Arial Black">JUMLAH MARKAH:</td>
<td style="color:#db258f; font-family: Arial Black"><?php echo $jum;?></td></b>
</tr>
</table>
<br>
<center><font style='font-size:14px'>
* Senarai Tamat *<br/>Jumlah Item:<?php echo $no-1; ?>
</font>
</center>
</body>
</html>