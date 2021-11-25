<!DOCTYPE html>
<html>
<head>
	<title>Studi Kasus</title>
</head>
<body>
	<form method="post">
		<table border="1">
			<tr>
				<td>Angka 1</td>
				<td><input type="number" name="angka1" required></td>
			</tr>
			<tr>
				<td>Angka 2</td>
				<td><input type="number" name="angka2"required></td>
			</tr>
			<tr><td></td>
				<td>
        	<input type="submit" name="tambah" value="+" >
       		<input type="submit" name="modulus" value="%" >
       		<input type="submit" name="kurang" value="-" >
       		<input type="submit" name="kali" value="x" >
       		<input type="submit" name="bagi" value=":" >				
       			 </td>
			</tr>
		</table>
<?php
	@$angka1=$_POST['angka1'];
	@$angka2=$_POST['angka2'];

		@$tambah=$_POST['tambah'];
		@$kurang=$_POST['kurang'];
		@$kali=$_POST['kali'];
		@$bagi=$_POST['bagi'];
		@$modulus=$_POST['modulus'];
		if($tambah){
    $c=$angka1+$angka2;
	echo "angka 1 : $angka1 <br>";echo "angka 2 : $angka2 <br>";
    echo "Hasil penjumlahan $angka1 + $angka2 = $c";}
		else if($kurang){
    $c=$angka1-$angka2;
	echo "angka 1 : $angka1 <br>";echo "angka 2 : $angka2 <br>";
    echo "Hasil pengurangan $angka1 - $angka2 = $c";}
		else if($kali){
    $c=$angka1*$angka2;
	echo "angka 1 : $angka1 <br>";echo "angka 2 : $angka2 <br>";
    echo "Hasil Perkalian $angka1 x $angka2 = $c";}
    	else if($bagi){
    	if ($angka2 == 0){
			echo "Tidak ada Hasil <br>";
    		echo "angka 2 tidak boleh 0";
    	}else {
    $c=$angka1/$angka2;
	echo "angka 1 : $angka1 <br>";echo "angka 2 : $angka2 <br>";
    echo "Hasil Pembagian $angka1 : $angka2 = $c";}}

    	else if($modulus){
    	if ($angka2 == 0){
			echo "Tidak ada hasil <br>";
    		echo "angka 2 tidak boleh 0";
    	}else{	
    $c=$angka1%$angka2;
	echo "angka 1 : $angka1 <br>";echo "angka 2 : $angka2 <br>";
    echo "Hasil Rata-rata $angka1 % $angka2 = $c";}}
    	

?> 
</html>