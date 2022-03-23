<!DOCTYPE html>
<head>
          
        <title>OOP in PHP</title>
 
</head>
<body>
		<?php
 			class Kalkulator{
 			  public $angka1,$angka2,$hasil;
 			 //deklarasi variable
 				var $add; 
			  	var $kurang;
			  	var $kali;
    			var $bagi;
    
  			//method2 yang ada
 			  function tambah($angka1,$angka2){
  				 echo $this->add = $angka1 + $angka2;
 			 }
    
 				function Kurang($angka1,$angka2){
			   echo $this->kurang = $angka1 - $angka2;
 			 }
    
				function Kali($angka1,$angka2){
   				echo $this->kali = $angka1 * $angka2;
  			}
    
  				function Bagi($angka1,$angka2){
   				echo $this->bagi = $angka1 / $angka2;
  			}
 		}
?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  
  
   <table align="center">
<tr>
    <td><input type="text" name="number1" size="10" placeholder="nilai1"></td> 
    <td><input type="text" name="number2" size="10" placeholder="nilai2"></td>
    <td><select name="operator">
     <option>+</option>
     <option>-</option>
     <option>*</option>
     <option>/</option>
    </select></td>
    <td><input type="submit" name="submit" value="Hitung"></td>
      
    </tr>
</table>
</form>
</br>
  <center>
  <?php
   $hasil = new Kalkulator(); //membuat objek hasil dari klas kalkulator
   @$num1 = $_POST['number1']; //untuk menangkap inputan dan masukan ke variable
   @$num2 = $_POST['number2'];
   @$opr = $_POST['operator'];
   if($opr == '+'){
    echo $num1." ".$opr." ".$num2." = "; 
    $hasil->tambah($num1,$num2);
   }
   else if($opr == '-'){
    echo $num1." ".$opr." ".$num2." = "; 
    $hasil->Kurang($num1,$num2);
   }
   else if($opr == '*'){
    echo $num1." ".$opr." ".$num2." = ";  
    $hasil->Kali($num1,$num2);
   }if ($num2 == 0){
	echo "Tidak ada Hasil <br>";
	}
   else if($opr == '/'){
    echo $num1." ".$opr." ".$num2." = ";  
    $hasil->Bagi($num1,$num2);
    }if ($num2 == 0){
      echo "Tidak Bisa dibagi";
    }
  ?>
  </center>
</body>
  
</html>
