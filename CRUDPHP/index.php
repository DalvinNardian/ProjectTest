<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
 
	<h2>CRUD DATA Siswa</h2>
	<br/>
	<a href="tambah.php">+ Tambah Siswa</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nis</th>
			<th>Nama</th>
			<th>JK</th>
			<th>Agama</th>
			<th>Tanggal Lahir</th>
			<th>Rombel</th>
			<th>Rayon</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nis']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jk']; ?></td>
				<td><?php echo $d['agama']; ?></td>
				<td><?php echo $d['tgl_lahir']; ?></td>
				<td><?php echo $d['rombel']; ?></td>
				<td><?php echo $d['rayon']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['nis']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['nis']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>