<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Faktorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <div class="d-flex full justify-content-center align-items-center border ">
        <h1 class="text-center">Program Faktorial</h1>
        <form action="hasil_faktorial.php" method="POST" class="border login px-3 rounded-3 c-shadow">
            <div class="mb-3">
                <label for="faktorial" class="form-label mb-0">Masukkan Angka</label>
                <input type="number" class="form-control" id="faktorial" name="faktorial" placeholder="Angka">
            </div>
            <a href="home.php">
                <button type="submit" class="mt-3 container-fluid btn btn-primary">Hitung</button>
            </a>
        </form>
    </div>  
</body>
</html>