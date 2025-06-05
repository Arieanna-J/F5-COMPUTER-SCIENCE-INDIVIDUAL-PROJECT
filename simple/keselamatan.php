<?php
#MULA SESI DAN AMBIK DATA DARI SESION
session_start();
$LOGIN=$_SESSION['idadmin'];
#SEMAK SESION LOGIN
if(!isset($_SESSION['idadmin'])){
	#LENCONGKAN KE FAIL, JIKA MASIH BELUM LOGIN
	header('Location: index.php');
exit();}
?>