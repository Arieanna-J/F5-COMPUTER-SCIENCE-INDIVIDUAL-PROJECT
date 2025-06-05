<!-- MODUL ADMIN-HAKIM -->
<?php
require 'keselamatan.php';
include 'header.php';

#POST VALUE
if (isset($_POST['id'])) {
#pembolehubah untuk memegang data yang dihantar
$idhakim = $_POST['id'];
$nama = $_POST['nama'];
#BOLEH TUKAR PASSWORD '1234' KE YANG SESUAI
$daftar= "INSERT INTO admin (idadmin,password,nama,aras)
VALUES ('$idhakim','1234','$nama','HAKIM')";
#LAKSANA ARAHAN SQL
$hasil = mysqli_query($con, $daftar);
#MESEJ POP UP
if ($hasil) {
	echo "<script>window.location='hakim.php'</script>";
}else{
	echo "<script>alert('Pendaftaran Gagal, Sila Guna Kod Hakim lain');
	window.location='hakim_tambah.php'</script>";
}
}
?>
<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<body background="gambar/sks.jpeg">
<center><h2 style="color:#f50072; font-family:Lucida Handwriting">PENDAFTARAN HAKIM BARU</h2></center>
<table width="70%" border="0" align="center">
	<tr><td>
		<form method="POST" style="color:#f50072">
			KOD HAKIM<br>
			<input type="text" name="id" placeholder="KOD HAKIM" size="60" style="text-transform: uppercase" required autofocus>
			<br>
			NAMA<br>
			<input type="text" name="nama" placeholder="NAMA HAKIM" size="60" style="text-transform: uppercase" required >
			<br><br>
			<button name="hantar" type="submit" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">DAFTAR</button>
			<button type="reset" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">RESET</button><br>
			<font color='blue'>*Pastikan maklumat anda betul sebelum membuat pendafaran.</font>
		</form>
		<div><a href="hakim.php"><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">BACK</button></a></div>
	</td>
</tr>
</table>
</body>
</html>
