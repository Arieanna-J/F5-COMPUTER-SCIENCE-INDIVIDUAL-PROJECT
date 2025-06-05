<!-- MODUL PEMENANG -->
<?php
	require 'tetapan.php';
	require 'keselamatan.php';
	require 'setup.php';
?>
<html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<center>
<title> <?php echo $namasys;?></title>
<body>
	<table width="80%" boarder=0>
		<tr>
			<td colspan="2" valign="middle" align="center">
				<center><h1>ARTISTIC DRAWING COMPETITION NATIONAL STATE 2022</h1></center>
				<hr>
				</td></tr>
				<tr><td>
					<h2><center>LIST PESERTA YANG MENYERTAAI PERTANDINGAN INI
					</center></h2>
					<center>
						KATEGORI TERBUKA
						<br>
					</center>
				</td></tr>
				<tr><td>
					<hr>
						<table width="70%" border="1" align="center">
	<tr>
		<th>No.</th>
		<th>ID Peserta</th>
		<th>Nama</th>
		<th>Jumlah Markah</th>
		<th>Tempat</th>
	</tr>
		<?php 
			$no=1;
			$infoname1=mysqli_query($con,"SELECT * FROM peserta ORDER BY nama ASC");
		    while ($info2=mysqli_fetch_array($infoname1))
		    
		?>
		<?php
			$data1=mysqli_query($con," SELECT p.nama,p.idpeserta,
				m.idpeserta,SUM(m.markah) AS Jum, m.markah FROM peserta 
				AS p INNER JOIN markah AS m ON p.idpeserta=m.idpeserta 
				GROUP BY m.idpeserta ORDER BY JUM DESC LIMIT 0,30");
			while ($info1=mysqli_fetch_array($data1))
				{
				#SETKAN KEDUDUKAN
				if ($no==1)
				{
					$hadiah = "PERTAMA";
				}
				else if($no==2)
				{
					$hadiah = "KEDUA";
				}
				else if($no==3)
				{
					$hadiah = "KETIGA";
				}
				else if ($info1["Jum"]<=0)
				{
					$hadiah = "MENACE YOU KILLED A PERSON";
				}
				else
				{
					$hadiah = "SAGUHATI";
				}
			?>

	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $info1['idpeserta']?></td>
		<td><?php echo $info1['nama'];?></td>
		<td><?php echo $info1['Jum'];?>/630</td>
		<td><?php echo $hadiah;?></td>
		<?php $no++; } ?>
		</tr>
		</table>
	</main>	
				<tr><td align="center">
					<center>
				<a href="index2.php">Home</a> |
				<a href="javascript:window.print()">Cetak Laporan</a>|
				<a href="logout.php">Logout</a>
			</center>
			</td></tr>
		</body>
	</center>
</html>
</center>
</body>
</html>