<!DOCTYPE html>	
<html>
<head>
	<title>Modul 3 a</title>
</head>
<body>
	<h2>Makanan Favorit</h2>
	<form method="post">
		<table>
			<tr>
			<td><input type="radio" name="makanan" value="Rendang">Rendang</td>
			<td><input type="radio" name="makanan" value="Gulai">Gulai</td>
			<td><input type="radio" name="makanan" value="Semur">Semur</td>
			</tr>
			<tr>
				<td colspan="6"><input style="width:100%;" type="submit" name="tampilkan" value="tampilkan"></td>
			</tr>
		</table>
	</form>
	<?php
		if (isset($_POST['tampilkan'])) {
			@$makanan = $_POST['makanan'];
		}
	?>
		<td colspan="5"><input style="width:218px;" type="text" name="makanan" value="<?php echo @$makanan;?>"></td>

</body>
</html>