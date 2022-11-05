<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("location: login.php?message=belum_login");
	}
    
    include 'koneksi.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM jadwal INNER JOIN lab on jadwal.id_lab=lab.id_lab INNER JOIN waktu on jadwal.id_waktu=waktu.id_waktu WHERE id_jadwal='$id'";
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
                    <h1 class="mt-2 mb-4 px-3 py-2 border-bottom">Ubah Jadwal</h1>
                    <form action="p-edit.php" method="POST" class="d-flex flex-column mb-4 f-width">
                        <input type="text" name="id_jadwal" value="<?= $prev['id_jadwal'] ?>" hidden>
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <input name="mk" type="text" placeholder="Mata kuliah" value="<?= $prev['mk'] ?>" required class="container-fluid py-2 px-3 bg-dark white border rounded-4">
                            <div class="d-flex">
                                <div class="form-check mx-auto">
                                    <input name="jurusan" type="radio" value="IF" required id="if" class="py-2 px-3 bg-dark white rounded-4 me-1">
                                    <label for="if" class="me-3">IF</label>
                                    <input name="jurusan" type="radio" value="SI" required id="si" class="py-2 px-3 bg-dark white rounded-4 me-1">
                                    <label for="si">SI</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <select name="lab" class="container-fluid form-select white bg-dark rounded-4" id="lab" required>
                                <option value="<?= $prev['id_lab'] ?>" selected="selected"><?= $prev['lab']; ?></option>
                                <?php 
                                    $sql_lab = "SELECT * FROM lab";
                                    $query_lab = mysqli_query($connect, $sql_lab);
                                    while ($data = mysqli_fetch_array($query_lab)) {
                                ?>
                                    <option value="<?= $data['id_lab'] ?>"><?= $data['lab'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <select name="time" class="container-fluid form-select white bg-dark rounded-4" id="time" required>
                                <option value="<?= $prev['id_waktu'] ?>" selected="selected"><?php echo "$prev[waktu_mulai] - $prev[waktu_selesai]"; ?></option>
                                <?php 
                                    $sql_waktu = "SELECT * FROM waktu";
                                    $query_waktu = mysqli_query($connect, $sql_waktu);
                                    while ($data = mysqli_fetch_array($query_waktu)) {
                                ?>
                                    <option value="<?= $data['id_waktu'] ?>"><?php echo "$data[waktu_mulai] - $data[waktu_selesai]" ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <input type="submit" value="Edit" class="f-width bg-gradient-blue fw-bold white py-2 px-3 bg-dark white rounded-4">
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>