<?php
#TENTUKAN ARAS LOGIN-ADMIN
if ($_SESSION['aras']=="ADMIN"){
	?>
	<!-- PAPARAN MENU ADMIN -->
	<body background="gambar/sks.jpeg">
		<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>

	<center>
	<h2 style="color:#f50072; font-family:Lucida Handwriting">❣ DASHBOARD ADMIN ❣</h2>
	<a href="setup_papar.php" onmousedown="bleep.play()"><img src="gambar/tetap.png" width="58" height="58" title="TETAPAN PERTANDINGAN"></a>
	<a href="item.php" onmousedown="bleep.play()"><img src="gambar/mark.png" width="54" height="54O" title="ITEM PEMARKAHAN"></a>
	<a href="hakim.php" onmousedown="bleep.play()"><img src="gambar/hakim.png" width="57" height="57" title="HAKIM"></a>
	<a href="peserta.php" onmousedown="bleep.play()"><img src="gambar/tugas.png" width="54" height="54" title="LIST PESERTA"></a>
	<a href="pemenang.php" onmousedown="bleep.play()"><img src="gambar/win.png" width="54" height="54" title="PEMENANG"></a>
	<br>
	<a href="hakim_intro.php" onmousedown="bleep.play()"><img src="gambar/back.png" width="54" height="54O" title="LOGOUT"></a>⠀
	<a href="logout.php" onmousedown="bleep.play()"><img src="gambar/home.png" width="54" height="54O" title="MAIN MENU"></a>
	</center>
	</body>
	<?php
	
	#TENTUKAN ARAS LOGIN-HAKIM
}else{
	?>
	<!-- HAKIM -->
	<body background="gambar/waa.jpeg">
		<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
	<center>
	<h2 style="color:#f50072; font-family:Lucida Handwriting">❣ DASHBOARD HAKIM ❣</h2>
	<a href="hakim_pp1.php" onmousedown="bleep.play()"><img src="gambar/pp.png" width="54" height="54" title="HAKIM PROFAIL"></a>
	<a href="pemarkahan.php" onmousedown="bleep.play()"><img src="gambar/tugas.png" width="54" height="54" title="PEMARKAHAN"></a>
	<a href="hakim_intro.php" onmousedown="bleep.play()"><img src="gambar/back.png" width="54" height="54O" title="LOGOUT"></a>
	<a href="logout.php" onmousedown="bleep.play()"><img src="gambar/home.png" width="54" height="54O" title="MAIN MENU"></a>
</center>
</body>
<?php
	}
?>