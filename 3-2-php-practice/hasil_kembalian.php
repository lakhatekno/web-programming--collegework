<!-- Muhammad Islakha 123210096 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kembalian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <!-- NAVBAR NI BOSSSZZ -->
        <nav class="navbar navbar-expand-lg bg-white py-3">
            <div class="container d-flex justify-content-center align-items-center">
                <a class="navbar-brand col-3 text-center" href="#">Tugas Web PHP 123210096</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-6" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link mx-3" aria-current="page" href="faktorial.php">Faktorial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-3" href="kembalian.php">Kembalian</a>
                        </li>
                    </ul>
                </div>
                <a href="index.php" class="col-3 text-center">
                    <button class="btn btn-dark rounded-5 px-4 py-2">Logout</button>
                </a>
            </div>
        </nav>
    </header>
    <?php
        $harga = $_POST['harga'];
        $uang = $_POST['uang'];
        $kembalian = $uang - $harga;
    ?>
    <main class="bg-dark text-light">
        <div class="d-flex flex-column full justify-content-center align-items-center">
            <h1 class="text-center mb-4">Program Kembalian</h1>
            <div class="d-flex">
                <table class="table table-dark mx-5" id="kembalian_kiri">
                    <tbody>
                        <tr>
                            <th scope="row">Harga</th>
                            <td><?php echo $harga ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Uang</th>
                            <td><?php echo $uang ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Kembalian</th>
                            <td>
                                <?php 
                                    if ( $kembalian > 0 ) {
                                        echo $kembalian; 
                                    }
                                    else {
                                        echo $kembalian.", beliau ini...";
                                    }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-dark mx-5">
                    <thead>
                        <tr>
                            <th>Nominal</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100);
                            $lembar = 0;
                            if ( $harga < $uang ) {
                                for ( $i = 0 ; $i < 10 ; $i++) {
                                    // echo "<th scope=\"row\">$pecahan[$i]</th>";
                                    if ( $kembalian >= $pecahan[$i]) {
                                        $lembar = floor($kembalian / $pecahan[$i]);
                                        $kembalian = $kembalian - ($pecahan[$i]*$lembar);
                                        echo "
                                        <tr>
                                            <th scope=\"row\">$pecahan[$i]</th>
                                            <td class=\"text-center\">$lembar</td>
                                        <tr>
                                        ";
                                    }
                                    else {
                                        echo "
                                        <tr>
                                            <th scope=\"row\">$pecahan[$i]</th>
                                            <td class=\"text-center\">0</td>
                                        <tr>
                                        ";
                                    }
                                }
                            }
                            else {
                                echo "
                                    <h2>Uangnya kurang kak hehe</h2>
                                ";
                            }
                        ?>
                    </tbody>
                </table>

            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>

</html>