<!DOCTYPE html>
<html>
<head>
	<title>Modul 3 PHP No 3</title>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td>NISN</td>
				<td><input type="text" name="nisn"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jenis" value="Laki-laki">Laki-laki<input type="radio" name="jenis" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td><select name="agama">
					<option value="Islam">Islam</option>
					<option value="Kristen Katolik">Kristen Katolik</option>
					<option value="Kristen Protestan">Kristen Protestan</option>
					<option value="Hindu">Hindu</option>
					<option value="Buddha">Buddha</option>
					<option value="Konghuchu">Konghuchu</option>
					</select>s</td>
			</tr>
			<br>

		</table>

		<p>Pengolahan Nilai</p>

		<table> 

			<tr>
				<td>B.Indonesia</td>
				<td><input type="text" name="indo" style="width: 50px"></td>
				<td>Matematika</td>
				<td><input type="text" name="mtk" style="width: 50px"></td>
			</tr>
			<tr>
				<td>B.Inggris</td>
				<td><input type="text" name="inggris" style="width: 50px"></td>
				<td>Produktif</td>
				<td><input type="text" name="rpl" style="width: 50px"></td>
			</tr>

		</table>
			<tr>
				<td><input type="submit" name="proses" style="width: 300px" value="Proses"></td>
			</tr>

		<table>
			<tr>
				<td>Total Nilai</td>
				<td></td>
				<td>Rata-rata</td>
				<td></td>
			</tr>

			<?php
				if(isset($_POST['proses'])) {
					$nisn = $_POST['nisn'];
					$nama = $_POST['nama'];
					$jk = $_POST['jenis'];
					$tl = $_POST['tanggal'];
					$alamat = $_POST['alamat'];
					$agama = $_POST['agama'];
					echo "<br>NISN : " . $nisn . "<br>";
					echo "Nama : " . $nama . "<br>";
					echo "Jenis Kelamin : " . $jk . "<br>";
					echo "Tanggal Lahir : " . $tl . "<br>";
					echo "Alamat : " . $alamat . "<br>";
					echo "Agama : " . $agama . "<br>";
				}

				if(isset($_POST['proses'])) {
					$indo = $_POST['indo'];
					$inggris = $_POST['inggris'];
					$mtk = $_POST['mtk'];
					$rpl = $_POST['rpl'];

					$total;
					$total = $indo + $inggris + $mtk + $rpl;
					@$ratarata = $total / 4; 

			?>

			<tr>
				<td><?php echo $total ?></td>
				<td></td>
				<td><?php echo $ratarata ?></td>
				<td></td>
			</tr>

		<?php } ?>
		<?php 
		if(@$ratarata >= 75) {
			echo "Lulus";
		}else{
			echo "Tidak Lulus";
		}
		?>


		</table>
	</form>
</body>
</html>