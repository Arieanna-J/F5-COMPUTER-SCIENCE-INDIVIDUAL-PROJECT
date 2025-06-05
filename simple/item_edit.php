<!-- MODUL ADMIN-ITEM PEMARKAHAN -->
<?php
require 'keselamatan.php';
include 'header.php';
#ID ID DARI URL
$IDITEM= $_GET['id'];
#PANGGIL REKOD DARI TABLE 
$dataA=mysqli_query($con,"SELECT * FROM item
WHERE iditem='$IDITEM'");
$infoA=mysqli_fetch_array($dataA);
#TERIMA VALUE YG DI POST 
if(isset($_POST['update']))
{
$item= $_POST['item'];
$markah = $_POST['markah'];
$iditem = $_POST['iditem'];

#KEMASKINI DENGAN VALUE BARU
$result = mysqli_query($con,"UPDATE item SET item='$item', 
markah='$markah' WHERE iditem=$iditem"); 
#PAPAR MSG JIKA BERJAYA 
echo "<script>alert('KEMASKINI ITEM BERJAYA');
window.location='item.php'</script>";
} 
#ARAHAN HAPUS REKOD
if(isset($_POST['delete']))
{
$iditem= $_POST['iditem'];
#HAPUS ITEM DLM TABLE
$hapuskan1 = mysqli_query($con,"DELETE FROM item 
WHERE iditem='$iditem'");
$hapuskan2 = mysqli_query($con, "DELETE FROM markah 
WHERE iditem='$iditem'");
#PAPAR MSG JIKA BERJAYA 
echo "<script>alert('ITEM BERJAYA DIHAPUSKAN'); 
window.location='item.php'</script>";
} 
?>

<html>
<script>
			var bleep = new Audio();
			bleep.src = "bleep.wav";
		</script>
<body background="gambar/sks.jpeg"> 
<center><h2 style="color:#f50072; font-family:Lucida Handwriting">SENARAI ITEM PEMARKAHAN</center>
<table width="70%" border="0" align="center"> 
<tr><td colspan="5" valign="middle" align="right"><b>
	<a href="item.php"><img src="gambar/back.png" width="30" height="30" title="BACK" onmousedown="bleep.play()"></a>
<a href="item_tambah.php"><img src="gambar/addhakim.png" width="30" height="30" title="ITEM TAMBAH" onmousedown="bleep.play()"></a> 
<a href="index2.php"><img src="gambar/home.png" width="30" height="30" title="HOME" onmousedown="bleep.play()"></a> 
</b></td></tr>
<tr style="color:#f50072">
<td><b>BIL.</b></td>
<td><b>ITEM</b></td>
<td><b>MARKAH</b></td>
<td><b>TINDAKAN</b></td>
</tr>
<?php
$row=0;

#PAPAR REKOD
$sql = "SELECT * FROM item WHERE iditem= '$IDITEM' 
ORDER BY markah DESC";
$result = mysqli_query($con, $sql);
$sno = $row + 1;
while($infoD = mysqli_fetch_array($result)){ 
?>

<tr>
<td width='2%'><?php echo $sno; ?></td> 
<form method="POST">
<td>
<input type="text" name="item" style="color: hotpink; font-family:Copperplate Gothic Light;"
value="<?php echo $infoD['item'];?>"> 
</td>
<td><input type="text" name="markah" style="color: hotpink; font-family:Copperplate Gothic Light;" 
value="<?php echo $infoD['markah'];?>">
</td>
<td><input type="text" name="iditem" style="color: hotpink; font-family:Copperplate Gothic Light;"
value="<?php echo $infoD['iditem'];?>" hidden>
<button type="submit" name="update" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">SIMPAN</button> 
<button type="submit" name="delete" style="color:white; background-color:#ff73b4; font-family:Arvo; border-color:#e8006c" onmousedown="bleep.play()">HAPUS</button>
</form>

</td></tr>
<?php $sno ++; } ?>
</table>
</body>
</html>