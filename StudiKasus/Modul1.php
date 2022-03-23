<!DOCTYPE html>
<html>
<head>
	<title>Modul 1</title>
</head>
<body>
	<h3>Carilah Ansgka Mana Yang Terbesar :</h3>
	<form method=post>
		<table >
			<tr>
				<td>Nilai A</td>
				<td></td>
				<td>Nilai B</td>
			</tr>
			<tr>
				<td><input type="text" name="nilai1"></td>
				<td>VS</td>
				<td><input type="text" name="nilai2"></td>
			</tr>
			<tr>
				<td ><input type=submit name=submit value="Cek"><input type=reset></td>
			</tr>
		</table>

		<?php

		@$submit = $_POST['submit'];
		@$nilai1 = $_POST['nilai1'];
		@$nilai2 = $_POST['nilai2'];

		if($submit){
		if($nilai1 > $nilai2) echo "Nilai yang terbesar adalah : $nilai1";
		elseif ($nilai2 > $nilai1 ) echo "Nilai yang terbesar adalah : $nilai2";
		else if ($nilai1 == null && $nilai2==null) echo "text field kosong, isi dengan angka untuk membandingkan nilainya!";
		else echo "Semua bilangan bernilai sama";
		}

?>
</body>
</html>