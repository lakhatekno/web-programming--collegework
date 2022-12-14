<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("location: login.php?message=belum_login");
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark px-4 py-3">
            <div class="container-fluid d-flex justify-content-space-between">
                <div class="d-flex align-items-center">
                    <h5 class="white me-3"  href="#">Praktikum IF | 123210096</h5>
                    <a href="index.php"><button class="btn btn-dark bg-gradient-blue rounded-5 px-4 white">Home</button></a>
                </div>
                <a href="logout.php"><button class="btn btn-outline-danger rounded-5 px-4">Logout</button></a>
            </div>
        </nav>
    </header>
    <main>
        <div class="full bg-gradient-blue">
            <div class="box-md container d-flex align-items-center justify-content-center px-3 py-3">
                <div class="f-width px-4 py-5 bg-dark d-flex flex-column align-items-center rounded-5">
                    <p class="white mb-2">Selamat Datang di</p>
                    <h1 class="white mb-4">Praktikum Informatika</h1>
                    <div class="d-flex flex-column f-width">
                        <div class="f-width d-flex mb-4">
                            <a href="lab.php" class="f-width me-3">
                                <button class="container-fluid btn btn-outline-light rounded-5">Lab</button>
                            </a>   
                            <a href="waktu.php" class="f-width ms-3">
                                <button class="container-fluid btn btn-outline-light rounded-5">Waktu Praktikum</button>
                            </a> 
                        </div>
                        <a href="jadwal.php">
                            <button class="container-fluid btn btn-outline-light rounded-5">Jadwal Praktikum</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>