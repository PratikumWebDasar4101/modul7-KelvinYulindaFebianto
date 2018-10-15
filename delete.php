<?php 
	include("koneksi.php");
	echo "<br>";

	$nim = $_GET["nim"];
	$kueri = "DELETE FROM data WHERE nim='$nim'";
	$result = mysqli_query($conn, $kueri);

	if ($result) {
		header("Location: list.php");
;	}else{
		echo "Data Gagal Dihapus";
	}
 ?>