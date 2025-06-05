<!-- MODUL HAKIM BERI MARKAH -->
<?php
	require 'keselamatan.php';
	include 'header.php';
	#DATA DARI URL
	$IDPESERTA= $_GET['id'];

	#PAPAR REKORD DARI TABLE PESERTA BERDASARKAN ID
	$dataA=mysqli_query($con, "SELECT * FROM peserta WHERE idpeserta= '$IDPESERTA'");
	$infoA=mysqli_fetch_array($dataA);
?>

<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<body background="gambar/waa.jpeg">
	<center><h2 style="color:#f50072; font-family:Lucida Handwriting">PEMARKAHAN PESERTA</h2></center>
	<table width="80%" border=0 align="center">
		<tr><td colspan="5" valign="middle" align="right">
			<a href="pemarkahan.php"><img src="gambar/back.png" width="30" height="30" title="BACK" onmousedown="bleep.play()"></a></td></tr>
			<tr style="color:#f50072; font-family:Consolas;font-size:15px;line-height:normal;"><td colspan="5" valign="middle" align="left"><b>
				NAMA: <?php echo $infoA['nama'];?><br>
				NOM.KP: <?php echo $infoA['idpeserta'];?><br>
				NOM.HP: <?php echo $infoA['nomhp'];?><br></b>
				<hr>
			</td></tr>
			<tr style="color:#f50072">
				<td><b>ITEM</b></td>
				<td><b>MARKAH PENUH</b></td>
				<td><b>MARKAH LAYAK</b></td>
			</tr>
			<?php
			#PAPAR REKOD JOIN TABLE ITEM-ADMIN
			$data1=mysqli_query($con, "SELECT * FROM item AS i INNER JOIN hakim AS a ON a.iditem=i.iditem WHERE a.idadmin='$LOGIN'");
			$info1=mysqli_fetch_array($data1)
			?>
			<form method="post" action="pemarkahan_simpan.php">
			<tr style="color:#ff40c2; font-family: Consolas; font-size: 20">
				<td><?php echo $info1['item']; ?></td>
				<td><?php echo $info1['markah']; ?></td>
				<td><input type="text" maxlength="3" name="markah" placeholder="X" size="5%" style="color:hotpink;font-family:Copperplate Gothic Light;" required autofocus/>

					<!-- HIDDEN VALUE UTK POST -->
					<input type= "text" name="penuh" value="<?php echo $info1['markah'];?>" hidden>
					<input type= "text" name="iditem" value="<?php echo $info1['iditem'];?>" hidden>
					<input type= "text" name="idpeserta" value="<?php echo $infoA['idpeserta'];?>" hidden>
					<input type= "text" name="idadmin" value="<?php echo $LOGIN;?>" hidden>
					<!-- HIDDEN VALUE TAMAT -->

				</td></tr>
				<tr><td colspan="5" align="center">
					<hr>
					<input type= "submit" name="submit_row" onmousedown="bleep.play()" value="SIMPAN" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c">
					<input type= "reset" name="reset" onmousedown="bleep.play()" value="RESET" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c">
				</td></tr>
			</form>
		</table>
	</body>
	</html>




