<!-- MODUL ADMIN-HAKIM -->
<?php
require 'keselamatan.php';
include 'header.php';
#DAPATKAN ID HAKIM
$IDHAKIM= $_GET['id'];

#SAMBUNG KE TABLE ADMIN
$dataHakim=mysqli_query($con, "SELECT
t1.idadmin,t1.nama,t1.password FROM admin AS t1 
LEFT JOIN hakim AS t2 ON t1.idadmin=t2.idadmin 
WHERE t1.idadmin='$IDHAKIM'");
$INFOHakim=mysqli_fetch_array($dataHakim);
#TERIMA VALUE YANG DI POST
if (isset($_POST['hantar'])) {
	#UMPUKAN NILAI PD P/UBAH
	$idhakim = $_POST['id'];
	$item = $_POST['item'];

	#MASUK REKOD KE DLM TABLE
	$tugasan= mysqli_query($con, "INSERT INTO hakim
		(iditem, idadmin)
		VALUES ('$item', '$idhakim')");

	#PAPAR MESEJ POP UP
	echo "<script>alert('KEMASKINI MAKLUMAT BERJAYA');
	window.location='hakim.php'</script>";
}
?>

<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<body background="gambar/sks.jpeg">
	<center><h2 style="color:#f50072; font-family:Lucida Handwriting">AGIHAN TUGASAN HAKIM</h2></center>
	<table width="70%" border="0" align="center">
		<tr><td>
			<!-- PAPAR BORANG -->
			<form method="POST" style="color:#f50072; font-family: Consolas; font-size: 18"><b>
				Kod Hakim :
				<?php echo $INFOHakim['idadmin']; ?>
				<!-- HIDDEN VALUE -->
				<input type="text" name="id"
				value="<?php echo $INFOHakim['idadmin']; ?>" hidden>
				<!-- HIDDEN VALUE ENDING -->
				<br>Katalaluan :
				<?php echo $INFOHakim['password']; ?>
				<br>Nama Hakim : 
				<?php echo $INFOHakim['nama']; ?>
				<br>Item Pemarkahan:<br></b>
				<select name="item" required>
					<option value="">-PILIH-</option>

					<?php 
					#PILIH ITEM YANG BELUM DIAMBIL
					$pilihan=mysqli_query($con,"
						SELECT iditem,item 
						FROM item as t2 WHERE NOT EXISTS 
						(SELECT * FROM hakim as t1 WHERE t1.iditem = t2.iditem)");
					while($row = mysqli_fetch_assoc($pilihan) ){
						$id = $row['iditem'];
						$kat = $row['item'];

						#PILIHAN
						echo "<option value='".$id."' >".$kat."</option>";
					}
				?>
			</select><br/>
			<br><br>
			<!-- BUTANG -->
			<button name="hantar" type="submit" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">SIMPAN</button>
			<button type="reset" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">RESET</button>
		</form>
		<div><a href="hakim.php"><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">BACK</button></a></div>
	</td></tr>
</table>
</body>
</html>