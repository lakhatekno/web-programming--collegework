<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lomgin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .full {
            height: 100vh;
        }

        .c-shadow {
            box-shadow: 0 3px 3px rgba(0, 0, 0, .7);
        }

        .login {
            min-width: 300px;
            height: fit-content;
            padding: 3.5rem 3rem;
        }
    </style>
</head>

<body>
    <div class="d-flex full justify-content-center align-items-center border ">
        <form action="home.php" method="POST" class="border login px-3 rounded-3 c-shadow">
            <div class="mb-3">
                <label for="nama" class="form-label mb-0">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label mb-0">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim">
            </div>
            <a href="home.php">
                <button type="submit" class="mt-3 container-fluid btn btn-primary">Masuk</button>
            </a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>