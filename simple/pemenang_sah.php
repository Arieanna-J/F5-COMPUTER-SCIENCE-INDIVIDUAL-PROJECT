<!-- MODUL ADMIN-PEMENANG -->
<?php
	require 'keselamatan.php';
	require 'tetapan.php';
#KIRAAN JUM ITEM
$ITEM=mysqli_query($con, "SELECT COUNT(iditem) AS bil_item FROM item");
$Jum1=mysqli_fetch_array($ITEM);
$Total1=$Jum1['bil_item'];
#KIRAAN JUM PESERTA
$PESERTA=mysqli_query($con, "SELECT COUNT(idpeserta) AS bil_peserta FROM peserta");
$Jum2=mysqli_fetch_array($PESERTA);
$Total2=$Jum2['bil_peserta'];
#KIRA JUMLAH MARKAH YANG DIMASUKKAN
$MARKAH=mysqli_query($con, "SELECT COUNT(idmarkah) AS bil_markah FROM markah");
$Jum3=mysqli_fetch_array($MARKAH);
$Total3=$Jum3['bil_markah'];
#SEMAKAN DAN BANDINGAN
if($Total3 !=($Total2*$Total1)){
	echo "<script>alert('SEMUA MARKAH BELUM DIMASUKKAN');
	window.location='pemenang.php'</script>";
}
#JIKA SEMUA MARKAH DIMASUKKAN
if(isset($_POST['submit_row']))
{
	$idpemenang=$_POST['id'];
	$jummarkah=$_POST['jum'];
	$rank=$_POST['tempat'];
	for($i=0;$i<count($idpemenang);$i++) {
		if($idpemenang[$i]!="" && $jummarkah[$i]!=""&&
			$rank[$i]!==""){
			$pemenang2=$idpemenang[$i];
			$tempat2=$rank[$i];
			$markah2 = $jummarkah[$i];

			#INSERT INTO TABLE PEMENANG
			$sql = "INSERT INTO pemenang(idpeserta, jum, tempat) VALUES ('".$pemenang2."','".$markah2."', '".$tempat2."')";
				mysqli_query($con,$sql);
			}
		}
		echo "<script>alert('PENGESAHAN MARKAH BERJAYA');
		window.location='pemenang.php'</script>";
	}
if($idpemenang[$i]=="$pemenang2" && $jummarkah[$i]=="$markah2"&& $rank[$i]=="$tempat2"){
	echo "<script>alert('PENGESAHAN MARKAH SUDAH DISAHKAN');
	window.location='pemenang.php'</script>";
}
?>