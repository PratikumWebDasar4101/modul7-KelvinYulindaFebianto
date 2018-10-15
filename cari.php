<?php 
	include("koneksi.php");

	$value = $_GET["cari"];
	$kueri = "SELECT * FROM data WHERE nim like '%$value%'";
	$result = mysqli_query($conn, $kueri);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Lihat Data</title>
 </head>
 <body>
 	<br><br><a href="list.php">Lihat Semua Data</a>&nbsp&nbsp|&nbsp&nbsp<a href="form.php">Input Data Kembali</a>
 	<table border="1" align="center">	
 		<h5 align="center">TABEL DATA MAHASISWA</h2>
 			<center>
 				<form>
 					<input type="text" name="cari">
 					<input type="submit" name="submit" value="Cari Data">
 				</form>
 			</center>
 			<br><tr>
 				<th  style="padding: 10px; width: 150px;">NAMA</th>
 				<th style="padding: 10px; width: 150px;">NIM</th>
 				<th style="padding: 10px; width: 150px;">JENIS KELAMIN</th>
 				<th style="padding: 10px; width: 170px;">PROGRAM STUDI</th>
 				<th style="padding: 10px; width: 150px;">FAKULTAS</th>
 				<th style="padding: 10px; width: 150px;">ASAL DAERAH</th>
 				<th style="padding: 10px; width: 170px;">MOTTO HIDUP</th>
 			</tr>
 			<?php if (mysqli_num_rows($result) > 0) : ?>
 			<?php while($row = mysqli_fetch_array($result))  { ?>
 			<tr align="center">
 				<td style="padding: 10px;"><?php echo $row["nama"]; ?></td>
 				<td><?php echo $row["nim"]; ?></td>
 				<td><?php echo $row["jk"]; ?></td>
 				<td><?php echo $row["prodi"]; ?></td>
 				<td><?php echo $row["fakultas"]; ?></td>
 				<td><?php echo $row["asal"]; ?></td>
 				<td><?php echo $row["motto"]; ?></td>
 			</tr>
 		<?php } endif ?>
 	</table>
 </body>
 </html>