<!-- Muhammad Islakha 123210096 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <header>
        <!-- NAVBAR NI BOSSSZZ -->
        <nav class="navbar navbar-expand-lg bg-white py-3">
            <div class="container d-flex justify-content-center align-items-center">
                <a class="navbar-brand col-3 active text-center" href="#">Tugas Web PHP 123210096</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-6" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link mx-3" aria-current="page" href="faktorial.php">Faktorial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="kembalian.php">Kembalian</a>
                        </li>
                    </ul>
                </div>
                <a href="index.php" class="col-3 text-center">
                    <button class="btn btn-dark rounded-5 px-4 py-2">Logout</button>
                </a>
            </div>
        </nav>
    </header>

    <main class="h-100 bg-dark text-light">
        <div class="container full d-flex flex-column justify-content-center align-items-center text-white text-center">
            <?php
            echo "
            <h1>Selamat Datang</h1> 
            <h1 class=\"fw-bold spacing\" style=\"letter-spacing: 7px;\">$_POST[nama]!</h1>
            <h3>$_POST[nim]</h3>
            ";
            ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>