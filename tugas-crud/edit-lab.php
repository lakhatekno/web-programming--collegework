<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("location: login.php?message=belum_login");
	}
    
    include 'koneksi.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM lab";
    $query	= mysqli_query($connect, $sql);
    $prev = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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
                    <a href="lab.php" class="me-1"><button class="btn btn-dark rounded-5 px-4 white">Lab</button></a>
                    <a href="waktu.php" class="me-1"><button class="btn btn-dark rounded-5 px-4 white">Waktu</button></a>
                    <a href="jadwal.php" class="me-1"><button class="btn btn-dark rounded-5 px-4 white">Jadwal</button></a>
                </div>
                <a href="logout.php"><button class="btn btn-outline-danger rounded-5 px-4">Logout</button></a>
            </div>
        </nav>
    </header>
    <main>
        <div class="full bg-gradient-blue">
            <div class="box-md container d-flex align-items-center justify-content-center px-3 py-3">
                <div class="d-flex flex-column align-items-center bg-dark white px-4 py-5 rounded-4" >
                    <h1 class="mt-2 mb-4 px-3 py-2 border-bottom">Ubah Lab</h1>
                    <form action="p-edit-lab.php" method="POST" class="d-flex flex-column mb-4 f-width">
                        <input type="text" name="id_lab" value="<?= $prev['id_lab'] ?>" hidden>
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <input name="lab" type="text" placeholder="Mata kuliah" value="<?= $prev['lab'] ?>" required class="container-fluid py-2 px-3 bg-dark white border rounded-4">
                        </div>
                        <input type="submit" value="Edit" class="f-width bg-gradient-blue fw-bold white py-2 px-3 bg-dark white rounded-4">
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>