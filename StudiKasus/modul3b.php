<!DOCTYPE html>
<html>
<head>
	<title>Modul 3 b</title>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td>Kata Pertama</td>
				<td>Kata Kedua</td>
			</tr>
			<tr>
				<td><input type="text" name="kata1"></td>
				<td><input type="text" name="kata2"></td>
			</tr><br>

		</table>
			<tr>
				<td><input type="submit" name="cek" style="width: 360px" value="Cek Persamaan"></td>
			</tr>
	</form>
<br>
	<?php
		if(isset($_POST['cek'])) {
			$kata1 = $_POST['kata1'];
			$kata2 = $_POST['kata2'];
		}
	?>	

	<?php
		if(@$kata1 == @$kata2){
			echo "kata sama";
		}elseif($kata1 != $kata2){
			echo "kata tidak sama";
		}
	
	?>

</body>
</html>