<!-- MODUL HAKIM -->
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
<center><h2 style="color:#f50072; font-family:Lucida Handwriting">IMPORT NAMA HAKIM DARI FAIL CSV</h2></center>
<table width="70%" border=0 align="center">
<tr>
<td colspan="5" valign="middle" align="right"><b>
<a href="hakim.php"><img src="gambar/back.png" width="30" height="30" title="BACK" onmousedown="bleep.play()"></a>
<a href="index2.php"><img src="gambar/home.png" width="30" height="30" title="HOME" onmousedown="bleep.play()"><a/></b></td>
</tr>
<tr>
<td>
<label>Kemudahan untuk daftar nama hakim secara berkelompok</label><br>
<label>Pilih lokasi fail CSV/Excel:</label>

<!-- IMPORT CSV UTK LAKSANAKAN ARAHAN IMPORT -->
<form action="hakim_csv.php" method="post"
enctype="multipart/form-data">
<input type="file" name="file" id="file" accept=" .csv">
<br>
<button type="submit" id="submit" name="import" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">UPLOAD
</button>
</center>

</form>
*Cipta fail dalam Microsoft Excel ataupun Notepad dan save as .csv mengikut aturan lajur seperti di bawah:

<table width="70%" border="1" align="center">
	<tr>
		<td>HK123</td>
		<td>1234</td>
		<td>LINDA BINTI AHMAD</td>
	</tr>
</table>
</td>
</tr>
</table>
</body>
</html>