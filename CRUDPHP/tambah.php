<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi </title>
</head>
<body>
 
	<h2>CRUD DATA Siswa</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA Siswa</h3>
	<form method="post" action="tambahkeun.php">
		<table>
			<tr>
				<td>NIS</td>
				<td><input type="number" name="nis"></td>
			</tr>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			
			<tr>
				<td>JK</td>
				<td><input type="radio" name="jk" value="L">Laki-laki
					<input type="radio" name="jk" value="P">Perempuan</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td><select name="agama">
					<option value="">---Pilih Agama---</option>
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen</option>
					<option value="Katholik">Katholik</option>
					<option value="Hindu">Hindu</option>
					<option value="Buddha">Buddha</option>

				</select></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td>Rombel</td>
				<td><input type="text" name="rombel"></td>
			</tr>
			<tr>
				<td>Rayon</td>
				<td><input type="text" name="rayon"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>