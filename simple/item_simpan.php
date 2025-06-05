<!--MODUL ADMIN-ITEM PEMARKAHAN-->
<?php
require 'tetapan.php';
require 'keselamatan.php';

#TERIMA VALUE YG DI POST
If(isset($_POST['submit_row']))
{
#P/UBAH TERIMA VALUE
$item=$_POST['item'];
$markah=$_POST['markah'];
#GEGELUNG TERIMA NILAI LEBIH 1
for($i=0;$i<count($item);$i++)
{
If($item[$i]!=""&& $markah[$i]!="")
{
#UMPUKAB NILAI PD P/U
$item2=$item[$i];
$markah2=$markah[$i];
#PROSES TAMBAH REKOD
$sql = "INSERT INTO item(item,markah)
VALUES('".$item2."','".$markah2."')";
mysqli_query($con,$sql);
}
 }
#PAPAR MESEJ JIKA BERJAYA
echo "<script>alert('TAMBAH ITEM BERJAYA');
window.location='item.php'</script>";
}
?>