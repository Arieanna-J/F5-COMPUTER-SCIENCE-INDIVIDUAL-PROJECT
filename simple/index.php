<!--MODUL UTAMA SISTEM -->
<?php include 'header.php'; ?>

<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
</script>
<body background="gambar/bg1.png"><center>
<div width="70%">
<h2 style='color:#f50072; font-family:Lucida Handwriting'><b>✿🌸 DASHBOARD PERTANDINGAN 🌸✿</b></h2>
<p style="color:#ff30c1; font-family: Consolas; font-size: 18"><b>Maklumat Pertandingan :
<?php echo $kata1;?></br>
Anjuran :
<?php echo $kata2;?></br>
Tempat :
<?php echo $lanjut2;?></br>
Tarikh Tutup Penyertaan :
<?php echo $tamat_daftar;?></br>
Tarikh Pengumuman Keputusan :
<?php echo $tamat_hakim;?></b></p>
</div>
<hr>

<div><h2 style='color:#f50072; font-family:Lucida Handwriting'>✿🌸 PESERTA PERTANDINGAN 🌸✿</h2></div>
<div><a href="semak_daftar.php" onmousedown="bleep.play()"><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c">SIGN UP</button>
</a>
<a href="individu_login.php" onmousedown="bleep.play()"><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c">SIGN IN</button></a>
</div>
<hr>
<div><h2 style='color:#f50072; font-family:Lucida Handwriting'>✿🌸 ADMIN/HAKIM 🌸✿</h2></div>
<a href="hakim_intro.php" onmousedown="bleep.play()"><button style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c">SIGN IN</button></a>
</center></body>
</html>
