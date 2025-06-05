<!--MODUL PESERTA-->
<?php include 'header.php'; ?>

<html>
<script>
			var bleep = new Audio();
			bleep.src = "deez.wav";
		</script>
<body background="gambar/bg1.png">
<center><h2 style="color:#f50072; font-family:Lucida Handwriting">🌸PENDAFTARAN PESERTA BARU🌸</h2></center>

<table width="70%" border="0" align="center">
<tr><td>

<!--Papar Borang Pendaftaran-->
<form method="POST" action="individu_simpan.php" style="color:#f50072">
NO. KAD PENGENALAN<br>
<input type="text" name="id"
placeholder="TANPA TANPA -"maxLength='12'
size="45" onkeypress='return event.charCode >=48 &&
event.charCode <=57' required autofocus>

<br>NAMA<br>
<input type="text" name="nama" placeholder="NAMA ANDA"
size="60" style="text-transform: uppercase" required>
<br>NOM HP<br>

<input type="text" name="nomhp"
placeholder="TANPA TANDA -" maxLength='13'
size="45" onkeypress='return event.charCode >=48 &&
event.charCode <= 57' required>

<br><br>
<div>
<button name="hantar" type="submit" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">DAFTAR</button>
<button type="reset" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">RESET</button>
</div><br>

<font color='blue'>*Pastikan maklumat anda betul sebelum
membuat pendaftaran.</font>

</form>
<div>
<a href="index.php"><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">HOME</button></a>
</div>

</td></tr>
</table>
</body>
</html>