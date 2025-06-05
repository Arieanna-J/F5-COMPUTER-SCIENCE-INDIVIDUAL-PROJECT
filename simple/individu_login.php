<!--MODUL PESERTA -->
<?php
	#MULAKAN SESION
session_start();
#SAMBUNG KE HEADER
include 'header.php';

if (isset($_POST['kp'])) {
	#PASTIKAN ID LOGIN ADALAH BETUL
	$user = mysqli_real_escape_string($con, $_POST['kp']);
	#LAKSANAKAN ARAHAN
	$query = mysqli_query($con, "SELECT * FROM peserta WHERE idpeserta= '$user'");
	$row = mysqli_fetch_assoc($query);
	if (mysqli_num_rows($query) == 0)
	{
		//MESEJ JIKA GAGAL LOGIN
		echo "<script>alert('Nom.KP tidak ditemui'); window.location= 'individu_login.php'</script>";
	}else{
		$_SESSION['idpeserta']=$row['idpeserta'];
		#BUKA MAIN MENU
		header("Location: dashboard.php");
	}
}
?>

<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<body background="gambar/bg1.png"><center>
	<div><h2 style="color:#f50072; font-family:Lucida Handwriting">🌸LOGIN PESERTA🌸</h2></div>
	<form method="post">
		<div style="color:#f50072"> 
			ID Peserta: <input onblur="checkLength(this)" type="text" name="kp" placeholder="Nom.KP tanpa tanda -" maxlength="12" size="25" required autofocus />
			<script>
				function checkLength(el) {
					if (e1.value.length < 12) {
						alert("Taip Nom. KP")
					}
				}
			</script>
		</div>
		<div>
			<br>
			<button name="hantar" type="submit" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">LOGIN</button>
			<button type="reset" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">RESET</button>
		</br>
		</div>
	</form>
	<a href="index.php"><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c;margin:-10px;" onmousedown="bleep.play()">MAIN MENU</button></a>
</center></body>
</html>