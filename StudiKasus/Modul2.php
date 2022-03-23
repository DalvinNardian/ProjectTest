<!DOCTYPE html>
<html>
<head>
	<title>Modul 2</title>
</head>
<body>
	<form method="post">
		<table>
			
			<tr>
				<td>Tipe Pelanggan</td>
				<td></td>
				<td>
					<input type="submit" name="nonmember" value=""> Non Member

					<input type="submit" name="member" value=""> Member
				
				</td>
			</tr>

			<tr>
				<td>Harga Fotocopy Perlembar</td>
				<td></td>
				<td><input type="text" name="harga" value="
				<?php

				if (isset($_POST['nonmember'])) {
					echo "110";		
				}
				elseif (isset($_POST['member'])) {
					echo "95";		
				}

				?>">
				</td>
				
			</tr>

			<tr>
				<td>Jumlah Fotocopy</td>
				<td></td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="hitung" value="Hitung"></td>
			</tr>
			<tr>
				<td>Total Bayar</td>
				<td></td>
				<td><input type="text" name="Total Bayar" value="
                <?php 
                if (isset($_POST['hitung'])) {
		        $harga = @$_POST['harga'];
		        $jumlah = @$_POST['jumlah'];
		        $total = $harga * $jumlah;

			    echo " Rp." . $total;
		        }

	         ?>">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>