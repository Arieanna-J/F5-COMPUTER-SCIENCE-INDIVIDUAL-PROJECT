<!--- MODUL ADMIN/HAKIM -->
<?php include 'header.php'; ?>
<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<body background="gambar/bg1.png"><center>
	<h2 style="color:#f50072; font-family:Lucida Handwriting">🌸LOGIN ADMIN/HAKIM🌸</h2>
	<form method= "post" action="logmasuk.php">
		<div style="color:#f50072">ID Anda:
			<input onblur="semak(this)" type="text" style="text-transform: uppercase" name="id" placeholder="TAIP DI SINI" maxlength="10" size="25" required autofocus />
			<script>
				function semak(kira) {
					if (kira.value.length < 5) {
						alert("Taip ID Anda!")
					}
				}
			</script>
			<br>Katalaluan:
			<input type="password" name="pass" placeholder="****" maxlength="9" size="10" required />
		</div>
		<br>
		<div>
			<button name="hantar" type="submit" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">LOGIN</button>
			<button type="reset" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">RESET</button></div>
		</form>
		<a href="index.php"><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c;margin:-10px;" onmousedown="bleep.play()">MAIN MENU</button></a>
	</center></body>
	</html>