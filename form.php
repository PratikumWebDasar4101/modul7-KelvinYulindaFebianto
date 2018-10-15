<!DOCTYPE html>
<html>
<head>
	<title>postingan</title>
</head>
<body>
		<table>
		<form method="post" action="posting.php" enctype="multipart/form-data">	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Laki Laki">Laki Laki
				<input type="radio" name="jk" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
			<td>Program Studi</td>
			<td>
				<select name="prodi">
				  <option value="D3 SISTEM INFORMASI">D3 Sistem Informasi</option>
				  <option value="D3 KOMPUTERISASI AKUNTANSI">D3 Komputerisasi Akuntansi</option>
				  <option value="D3 TEKNIK KOMPUTER">D3 Teknik Komputer</option>
				</select>
			</td>
			</tr>
			<tr>
			<td>Fakultas</td>
			<td>
				<select name="fakultas">
				  <option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				  <option value="Fakultas Teknik Informatika">Fakultas Teknik Informatika</option>
				  <option value="Fakultas Peternakan">Fakultas Peternakan</option>
				</select>
			</td>
			</tr>
			<tr>
				<td>Asal</td>
				<td><input type="text" name="asal"></td>
			</tr>
			<tr>
				<td>Motto Hidup</td>
				<td>
					<textarea name="motto" cols="30" rows="5"></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Uplode Data"></td>
			</tr>
		</table>
</body>
</html>