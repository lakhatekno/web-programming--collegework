<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("location: login.php?message=belum_login");
	} 

    include('koneksi.php');
        $sql	= "SELECT * FROM lab";
        $query	= mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab</title>
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
                    <button class="btn btn-dark bg-gradient-blue rounded-5 px-4 white">Lab</button>
                    <a href="waktu.php" class="me-1"><button class="btn btn-dark rounded-5 px-4 white">Waktu</button></a>
                    <a href="jadwal.php"><button class="btn btn-dark rounded-5 px-4 white">Jadwal</button></a>
                </div>
                <a href="logout.php"><button class="btn btn-outline-danger rounded-5 px-4">Logout</button></a>
            </div>
        </nav>
    </header>
    <main>
        <div class="full bg-gradient-blue">
            <div class="container-fluid py-3">
                <div class="row px-3">
                    <div class="col-7">
                        <table class="bg-dark table rounded-4 mx-auto" style="overflow:hidden;">
                            <thead class="text-center white">
                                <th>ID</th>
                                <th>Lab</th>
                                <th>Action</th>
                            </thead>
                            <tbody class="bg-white dark text-center">
                                <?php
                                $i = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                ?>
                                        <tr >
                                            <td><?= $data['id_lab']; ?></td>
                                            <td><?= $data['lab']; ?></td>
                                            <td>
                                                <a href="edit-lab.php?id=<?php echo $data['id_lab']; ?>"><button class="btn btn-sm btn-outline-success px-4 rounded-5">Edit</button></a>
                                                <a href="p-delete-lab.php?id=<?php echo $data['id_lab']; ?>"><button class="btn btn-sm btn-outline-danger px-4 rounded-5">Delete</button></a>
                                            </td>
                                        </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-5 d-flex flex-column align-items-center bg-dark white px-4 py-5 rounded-4" >
                        <h1 class="mt-2 mb-4 px-3 py-2 border-bottom">Tambah Lab</h1>
                        <form action="p-tambah-lab.php" method="POST" class="d-flex flex-column mb-4 f-width">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <input name="lab" type="text" placeholder="Nama Lab" required class="container-fluid py-2 px-3 bg-dark white border rounded-4">
                            </div>
                            <input type="submit" value="Tambah" class="f-width bg-gradient-blue fw-bold white py-2 px-3 bg-dark white rounded-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>