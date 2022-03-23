<!DOCTYPE html>
<html>
<head>
  <title>Modul 3</title>
</head>
<body>
  <form method="post">
    <center>
       Tanggal Lahir:<br>
         <input type="date" name="date" required><br>
         <input type="submit" name="pecahkan" value="Pecahkan">

 
  <?php
  if (isset($_POST['pecahkan'])) {
        $date = $_POST['date'];
        $split = explode("-", $date);
        $tanggal = $split[2];
        $bulan = $split[1];
        $tahun = $split[0];
    }
  ?>
    <table>
    <tr>
      <td>Tanggal<input type="text" name="tanggal" value="
        <?php
        if(@$_POST['tanggal']){
          echo @$tanggal; 
        }
        ?>">
      </td>

      <td>Bulan<input type="text" name="bulan" value="
        <?php
        if(@$_POST['bulan']){
          echo @$bulan; 
        }
        ?>">
      </td>

      <td>Tahun<input type="text" name="tahun" value="
        <?php
        if(@$_POST['tahun']){
          echo @$tahun; 
        }
        ?>">
      </td>

    </tr>
  </table>
  </form>
</body>
</html>