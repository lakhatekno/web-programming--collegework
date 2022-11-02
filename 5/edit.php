<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>
	<center>
		<h1>Update Data Mahasiswa</h1>
		<br>
		<a href="index.php">Lihat Data</a>
		<br>
		<br>
		<form method="POST" action="edit_proses.php">
            <?php 
                include 'koneksi.php';
                $nim = $_GET['id'];
                $sql	= "SELECT * FROM data_mhs WHERE nim='$nim'";
			    $query	= mysqli_query($connect, $sql);

			    while ($data = mysqli_fetch_array($query)) {
			?>
			<table>
				<tr>
					<td>NIM</td>
					<td><input type="text" name="nim" value="<?php echo $data['nim'] ?>"></td>
					<td><input type="hidden" name="nim_lama" value="<?php echo $data['nim'] ?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
				</tr>
				<tr>
					<td>Angkatan</td>
					<td><input type="text" name="angkatan" value="<?php echo $data['angkatan'] ?>"></td>
				</tr>
				<tr>
					<td>SKS</td>
					<td><input type="text" name="sks" value="<?php echo $data['sks'] ?>"></td>
				</tr>
			</table>
            <?php } ?>
			<br>
			<input type="submit" name="">
		</form>
	</center>
</body>
</html>