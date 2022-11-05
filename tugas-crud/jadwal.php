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
                    <a href="lab.php" class="me-1"><button class="btn btn-dark rounded-5 px-4 white">Lab</button></a>
                    <a href="waktu.php" class="me-1"><button class="btn btn-dark rounded-5 px-4 white">Waktu</button></a>
                    <button class="btn btn-dark bg-gradient-blue rounded-5 px-4 white">Jadwal</button>
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
                                <th>No</th>
                                <th>MK</th>
                                <th>Jurusan</th>
                                <th>Lab</th>
                                <th>Waktu</th>
                                <th>Action</th>
                            </thead>
                            <tbody class="bg-white dark text-center">
                                <?php
                                $i = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                ?>
                                        <tr >
                                            <td><?= $i++; ?></td>
                                            <td><?= $data['mk']; ?></td>
                                            <td><?= $data['jurusan']; ?></td>
                                            <td><?= $data['lab']; ?></td>
                                            <td><?php echo "$data[waktu_mulai] - $data[waktu_selesai]"; ?></td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $data['id_jadwal']; ?>"><button class="btn btn-sm btn-outline-success px-4 rounded-5">Edit</button></a>
                                                <a href="p-delete.php?id=<?php echo $data['id_jadwal']; ?>"><button class="btn btn-sm btn-outline-danger px-4 rounded-5">Delete</button></a>
                                            </td>
                                        </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-5 d-flex flex-column align-items-center bg-dark white px-4 py-5 rounded-4" >
                        <h1 class="mt-2 mb-4 px-3 py-2 border-bottom">Tambah Jadwal</h1>
                        <form action="p-tambah.php" method="POST" class="d-flex flex-column mb-4 f-width">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <input name="mk" type="text" placeholder="Mata kuliah" required class="container-fluid py-2 px-3 bg-dark white border rounded-4">
                                <div class="d-flex">
                                    <div class="form-check mx-auto">
                                        <input name="jurusan" type="radio" value="IF" checked id="if" class="py-2 px-3 bg-dark white rounded-4 me-1">
                                        <label for="if" class="me-3">IF</label>
                                        <input name="jurusan" type="radio" value="SI" id="si" class="py-2 px-3 bg-dark white rounded-4 me-1">
                                        <label for="si">SI</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <select name="lab" class="container-fluid form-select white bg-dark rounded-4" id="lab" required>
                                    <option value="" selected disabled>Pilih Lab</option>
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
                                <select name="waktu" class="container-fluid form-select white bg-dark rounded-4" id="lab" required>
                                    <option value="" selected disabled>Pilih Waktu</option>
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
                            <input type="submit" value="Tambah" class="f-width bg-gradient-blue fw-bold white py-2 px-3 bg-dark white rounded-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>