<!-- MODUL ADMIN-ITEM PEMARKAHAN -->
<?php
require 'keselamatan.php' ;
include 'header.php' ;
?>

<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<head>
<script type='text/javascript' src='jquery.js'></script>
<script type='text/javascript'>
function add_row(){
$rowno=$('#item_markah tr').length;
$rowno=$rowno+1;
//TAIP DALAM SATU BARIS
$("#item_markah tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' name='item[]' placeholder='SILA TAIP ITEM DI SINI' style='color: hotpink; font-family:Copperplate Gothic Light;' size='95%' required></td><td><input type='text' name='markah[]' placeholder='X' size='5%' style='color: hotpink' required></td><td><input type='button' class='button' value='X' onclick=delete_row('row"+$rowno+"')></td></tr>");
//TAIP DALAM SATU BARIS TAMAT
}
function delete_row(rowno){
$('#'+rowno).remove();
}
</script>
</head>
<body background="gambar/sks.jpeg">
<h2 style="color:#f50072; ; font-family:Lucida Handwriting; font-size:20px;"><strong><center>SENARAI ITEM PEMARKAHAN
<?php echo $kata1;?></center></strong></h2>
<form method="post" action="item_simpan.php">
<table id="item_markah" align="center" border=0>
<tr size='70%' style="color:#f50072">
<td style="color:#ff30c1; font-family: Consolas; font-size: 18"><b>Item yang dinilai</b></td>
<td style="color:#ff30c1; font-family: Consolas; font-size: 18"><b>Markah penuh</b></td>
</tr>
<tr id="row1" size='70%'>
<td><input type="text" style="color: hotpink; font-family:Copperplate Gothic Light;" name="item[]" placeholder="SILA TAIP ITEM DI SINI" size='95%' autofocus required></td>
<td><input type="text" name="markah[]" style="color:hotpink" placeholder="X"
size='5%' required></td></tr>
</table>
<br>
<table align="center" border=0>
<tr><td>
<input type="button" onmousedown="bleep.play()" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onclick="add_row();" value="+ ITEM">
<input type="submit" onmousedown="bleep.play()" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" name="submit_row" value="SIMPAN">
</table>
</form>
<center><a href="item.php"><img src="gambar/back.png" width="35" height="35" onmousedown="bleep.play()"></img></a>
	<a href="index2.php"><img src="gambar/home.png" width="35" height="35" onmousedown="bleep.play()"></img></a>
</center>
</td></tr>
</body>
</html>