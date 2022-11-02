<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .full {
            height: 100vh;
        }

        #btn-dark {
            border: 2px solid #0d6efd;
            color: white;
            /* color: #f8c0c8; */
            /* background-image: linear-gradient(to right bottom, #F8C0C8, #20c997); */
            /* background-color: #0d6efd; */
        }
        form {
            width: 400px;
        }

        .b-shadow {
            box-shadow: 3px 4px 5px #0d6efd;
        }
        .ls {
            letter-spacing: 2px;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="d-flex full flex-column justify-content-center align-items-center ">
        <form action="tambah_proses.php" method="POST" class="text-white login px-5 py-5 rounded-5 b-shadow">
            <h1 class="text-white text-center">Sebut Nama</h1>
            <div class="mb-3">
                <label for="nama" class="form-label mb-0">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label mb-0">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
                <label for="angkatan" class="form-label mb-0">Angkatan</label>
                <input type="text" class="form-control" id="angkatan" name="angkatan">
            </div>
            <div class="mb-3">
                <label for="sks" class="form-label mb-0">Jumlah SKS</label>
                <input type="text" class="form-control" id="sks" name="sks">
            </div>
            <a href="">
                <button type="submit" class="mt-3 container-fluid btn text-white fw-bold ls rounded-5" id="btn-dark">Tambah</button>
            </a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>