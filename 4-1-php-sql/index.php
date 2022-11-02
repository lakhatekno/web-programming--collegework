<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .full {
            height: 100vh;
        }
    </style>
</head>
<body>
    <header>

    </header>
    <main class="bg-dark text-light">
        <div class="container d-flex flex-column full justify-content-center align-items-center">
            <h1 class="text-center mb-4">Data Mahasiswa</h1>
            <div class="container-fluid d-flex">
                <table class="table table-dark mx-5" id="kembalian_kiri">
                    <thead>
                        <tr class="fw-bold">
                            <td>NIM</td>
                            <td>Nama</td>
                            <td>Angkatan</td>
                            <td>SKS</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'koneksi.php';
                            $sql = "SELECT * FROM data_mhs";
                            $query = mysqli_query($konek, $sql);
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $data['nim'] ?></td>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['angkatan'] ?></td>
                                <td><?php echo $data['sks'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>