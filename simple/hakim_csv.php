<!-- MODUL HAKIM -->
	<?php
	require 'tetapan.php';
	require 'keselamatan.php';
	#TERIMA FAIL CSV POST
	if(isset($_POST["import"])){
		$filename=$_FILES['file']["tmp_name"];
		if($_FILES["file"]["size"] > 0){
			$file = fopen($filename, "r");
			while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
			{

				#MASUKKAN DALAM TABLE ADMIN
				$import = "INSERT INTO admin (idadmin,password,nama,aras)
				values (
					'".$getData[0]."',
					'".$getData[1]."',
					'".$getData[2]."',
					'HAKIM')";

					#LAKSANAKAN ARAHAN SQL
					$tambah = mysqli_query($con,$import);
					if(!isset($tambah))
					{
						#MSG POP UP JIKA GAGAL
						echo "<script>alert('Pindah naik fail CSV gagal');
						window.location='hakim.php'</script>";
					}else {
					    echo "<script>alert('Pindak naik fail CSV berjaya'); window.location='hakim.php'</script>";
					}
					}
				fclose($file);
			}
		}
?>