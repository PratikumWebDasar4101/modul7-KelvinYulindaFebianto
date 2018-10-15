<?php 
	$conn = mysqli_connect("localhost","root","","data");

	if ($conn) {
		echo "database berhasil terhubung!";
	}else{
		echo "gagal terhubung.";
	}
 ?>