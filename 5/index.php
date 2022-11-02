<!DOCTYPE html>
<html>
<head>
	<title>READ</title>
</head>
<body>
	<center>
		<h1>Data Mahasiswa</h1>
		<br>
		<a href="tambah.php">Tambah Data</a>
		<br>
		<br>
		<table border="1">
			<tr>
				<td>NIM</td>
				<td>Nama</td>
				<td>Angkatan</td>
				<td>SKS</td>
				<td colspan="2">Action</td>
			</tr>
			<?php
			include('koneksi.php');

			$sql	= "SELECT * FROM data_mhs";
			$query	= mysqli_query($connect, $sql);

			while ($data = mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?= $data['nim']; ?></td>
				<td><?= $data['nama']; ?></td>
				<td><?= $data['angkatan']; ?></td>
				<td><?= $data['sks']; ?></td>
				<td><a href="edit.php?id=<?php echo $data['nim']; ?>"><button>Edit</button></a></td>
				<td><a href="delete.php?id=<?php echo $data['nim']; ?>"><button>Delete</button></a></td>
			</tr>
			<?php } ?>
		</table>
	</center>
</body>
</html>