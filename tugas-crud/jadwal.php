<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("location: login.php?message=belum_login");
	} 

    include('koneksi.php');
        $sql	= "SELECT * FROM jadwal INNER JOIN lab on jadwal.id_lab=lab.id_lab INNER JOIN waktu on jadwal.id_waktu=waktu.id_waktu";
        $query	= mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark px-4 py-3">
            <div class="container-fluid d-flex justify-content-space-between">
                <div class="d-flex">
                    <h5 class="white me-3"  href="#">Praktikum IF | 123210096</h5>
                    <a href="index.php" class="me-1"><button class="btn btn-dark rounded-5 px-4 white">Home</button></a>
                    <a href="Lab.php" class="me-1"><button class="btn btn-dark rounded-5 px-4 white">Lab</button></a>
                    <a href="Waktu.php" class="me-1"><button class="btn btn-dark rounded-5 px-4 white">Waktu</button></a>
                    <button class="btn btn-dark bg-gradient-blue rounded-5 px-4 white">Jadwal</button>
                </div>
                <button class="btn btn-outline-danger rounded-5 px-4">Logout</button>
            </div>
        </nav>
    </header>
    <main>
        <div class="full bg-gradient-blue">
            <div class="container-fluid py-3">
                <div class="row">
                    <div class="col-7">
                        <table class="bg-dark table white rounded-3" style="overflow:hidden;">
                            <thead class="text-center">
                                <th>No</th>
                                <th>MK</th>
                                <th>Jurusan</th>
                                <th>Lab</th>
                                <th>Waktu</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                    while ($data = mysqli_fetch_array($query)) {
                                ?>
                                        <tr>
                                            <td><?= $data['id_jadwal']; ?></td>
                                            <td><?= $data['mk']; ?></td>
                                            <td><?= $data['jurusan']; ?></td>
                                            <td><?= $data['lab']; ?></td>
                                            <td><?php echo "$data[waktu_mulai] - $data[waktu_selesai]"; ?></td>
                                            <td><a href="edit.php?id=<?php echo $data['id_jadwal']; ?>"><button class="btn btn-outline-success">Edit</button></a></td>
                                            <td><a href="delete.php?id=<?php echo $data['id_jadwal']; ?>"><button class="btn btn-outline-danger">Delete</button></a></td>
                                        </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-4">
                        <form action="p-login.php" method="POST" class="d-flex flex-column mb-4 f-width">
                            <input name="username" type="text" placeholder="username" class="py-2 px-3 bg-dark white rounded-4 mb-4">
                            <input name="password" type="password" placeholder="password" class="py-2 px-3 bg-dark white rounded-4 mb-4">
                            <input type="submit" value="Login" class="bg-gradient-blue fw-bold white py-2 px-3 bg-dark white rounded-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

<!--
        // while ($data = mysqli_fetch_array($query)) {
		// 	?>
		// 	<tr>
		// 		<td><?= $data['id_jadwal']; ?></td>
		// 		<td><?= $data['mk']; ?></td>
		// 		<td><?= $data['jurusan']; ?></td>
		// 		<td><?= $data['lab']; ?></td>
		// 		<td><?= $data['waktu_mulai']; ?></td>
		// 		<td><?= $data['waktu_selesai']; ?></td>
		// 		<td><a href="edit.php?id=<?php echo $data['id_jadwal']; ?>"><button>Edit</button></a></td>
		// 		<td><a href="delete.php?id=<?php echo $data['id_jadwal']; ?>"><button>Delete</button></a></td>
		// 	</tr>
		//  -->