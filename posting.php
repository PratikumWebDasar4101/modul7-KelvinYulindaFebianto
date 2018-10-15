<?php 
	include("koneksi.php");
	$nama = $_POST["nama"];
	$nim = $_POST["nim"];
	$jk = $_POST["jk"];
	$prodi = $_POST["prodi"];
	$fakultas = $_POST["fakultas"];
	$asal = $_POST["asal"];
	$motto = $_POST["motto"];
	
	$sql = "INSERT INTO data VALUES ('$nama','$nim','$jk','$prodi','$fakultas','$asal','$motto')";
	$tambahdata = mysqli_query($conn,$sql);
	if ($tambahdata) {
		echo "<br>Data Berhasil Ditambahkan";
	}else{
		echo "Data Gagal Ditambahkan" . mysqli_error($conn);
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<br>
		<a href="List.php">Lihat Data Inputan</a>
 </body>
 </html>