<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Faktorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>
<body>
    <div class="border d-flex flex-column justify-content-center align-items-center h-100 text-center">
        <h1 class="fw-light">Faktorial</h1>
        <?php
            echo "<h1>$_POST[faktorial]</h1>";

            $angka = $_POST['faktorial'];
            $hasil = $angka;
        ?>
        <div class="hasil">
        <?php
            echo "<h3>$angka x ";
            for ($i = 1; $i < $angka; $i++) {
                if ($i == $angka-1) {
                    echo $angka-$i;
                }
                else {
                    echo $angka-$i." x ";
                }
                $hasil = $hasil * ($angka-$i);
            }
            echo "</h3>";
            echo "<h2>$hasil</h2>";      
        ?>
        </div>
    </div>
</body>
</html>