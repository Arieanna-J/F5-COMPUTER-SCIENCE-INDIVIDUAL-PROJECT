<!-- MODUL ADMIN SISTEM -->
<?php
#PAPARAN HEADER 
include 'header.php';

#TABLE TETAPAN SISTEM
$dataSys=mysqli_query($con,"SELECT * FROM tetapan");
$INFOSys=mysqli_fetch_array($dataSys);
#POST VALUE
if (isset($_POST['update'])) {
#TERIMA VALUE YG DI POST 
$nama = $_POST['sys'];
$kata1 = $_POST['nama'];
$detail1= $_POST['kat'];
$kata2 = $_POST['sempena'];
$detail2= $_POST['tempat']; 
$end1 = $_POST['tutup'];
$end2 = $_POST['umum'];

#UPDATE REKOD
$result = mysqli_query($con, "UPDATE tetapan 
SET namasys='$nama', kata1= '$kata1', detail1= '$detail1', 
kata2='$kata2', detail2= '$detail2', tamat_daftar= '$end1',
tamat_hakim= '$end2'"); 
#PAPAR MSG JIKA BERJAYA
echo "<script>alert( 'KEMASKINI MAKLUMAT BERJAYA'); 
window.location='index2.php' </script>"; 
}
?>

<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<body background="gambar/sks.jpeg">
<center><h2 style="color:#f50072; font-family:Lucida Handwriting">KEMASKINI MAKLUMAT SISTEM</h2></center>
<table width="70%" border=0 align="center">
<tr><td>
<form method="POST" style="color:#f50072">
<img src="gambar/tetap.png" height="29" width="29"><b style="font-family: Consolas; font-size: 22px;">Nama Sistem</b><br>
<input type="text" style="color:hotpink;font-family:Copperplate Gothic Light;" name="sys" size="60" 
value="<?php echo $namasys; ?>"autofocus>
<hr>
<img src="gambar/info.png" height="25" width="25"><b style="font-family: Consolas; font-size: 22px;">Info Pertandingan</b><br>
<input type="text" style="color:hotpink;font-family:Copperplate Gothic Light;" name="nama" size="60"
value="<?php echo $kata1; ?>" 
style="text-transform: uppercase"><br>
<img src="gambar/tugas.png" height="29" width="29"><b style="font-family: Consolas; font-size: 22px;">Keterangan</b><br>
<input type="text" name="kat" size="60" style="color:hotpink;font-family:Copperplate Gothic Light;"
value="<?php echo $lanjut1; ?>" 
style="text-transform: uppercase"><br>
<img src="gambar/anj.png" height="29" width="29"><b style="font-family: Consolas; font-size: 22px;">Anjuran</b><br>
<input type="text" style="color:hotpink;font-family:Copperplate Gothic Light;" name="sempena" size="60"
value="<?php echo $kata2; ?>" 
style="text-transform: uppercase"><br>
<img src="gambar/area.png" height="29" width="29"><b style="font-family: Consolas; font-size: 22px;">Tempat</b><br>
<input type="text" style="color:hotpink;font-family:Copperplate Gothic Light;" name="tempat" size="60" 
value="<?php echo $lanjut2; ?>" 
style="text-transform: uppercase">
<hr>
<img src="gambar/date.png" height="29" width="29"><b style="font-family: Consolas; font-size: 22px;">Tarikh Tutup Pendaftaran</b><br> 
<input type="date" style="color:hotpink;font-family:Copperplate Gothic Light;" name="tutup"
value="<?php echo $tamat_daftar; ?>"><br>
<img src="gambar/date.png" height="29" width="29"><b style="font-family: Consolas; font-size: 22px;">Tarikh Tamat Juri</b><br> 
<input type="date" style="color:hotpink;font-family:Copperplate Gothic Light;" name="umum"
value="<?php echo $tamat_hakim; ?>"><br>
<button name="update" type="submit" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">SIMPAN</button> 
<button type="reset" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">RESET</button>
</form>
<div><a href="index2.php"> <button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">BACK</button></a></div>
</td></tr>
</table>
</body>
</html>