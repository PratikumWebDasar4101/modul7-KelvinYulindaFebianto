<?php 
	include("koneksi.php");
	$kueri = "SELECT * FROM data";
	$result = mysqli_query($conn, $kueri);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Lihat Data</title>
 </head>
 <body>
 	<br><br><a href="form.php">Input Data Kembali</a>
 	<table border="1" align="center" style="border-collapse: collapse;">	
 		<h5 align="center">TABEL DATA MAHASISWA</h2>
 			<center>
 				<form action="cari.php" method="get">
 					<input type="text" name="cari">
 					<input type="submit" name="submit" value="Cari Nama Mahasiswa">
 				</form>
 			</center>
 			<br><tr>
 				<th  style="padding: 10px; width: 150px;">NAMA</th>
 				<th style="padding: 10px; width: 150px;">NIM</th>
 				<th style="padding: 10px; width: 100px;">AKSI</th>
 			</tr>
 			<?php if (mysqli_num_rows($result) > 0) : ?>
 			<?php while($row = mysqli_fetch_array($result))  { ?>
 			<tr align="center">
 				<td style="padding: 10px;"><?php echo $row["nama"]; ?></td>
 				<td><?php echo $row["nim"]; ?></td>
 				<td><a href="delete.php?nim=<?php echo $row['nim'] ?>">Hapus |</a><a href="edit.php">Edit |</a><a href="detail.php?nim=<?php echo $row['nim'] ?>">Detail</a></td>
 			</tr>
 		<?php } endif ?>
 	</table>
 </body>
 </html>