<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <style>
        .f-height {
            min-height: 100vh;
        }
        #login_box {
            box-shadow: 3px 4px 3px rgb(76, 76, 76);
        }
        input {
            border: 1px solid rgba(255, 255, 255, .5);
        }
        input::placeholder {
            color: rgba(255, 255, 255, .5);
        }
        input[type="submit"] {
            color: white;
        }
        input[type="submit"]:hover {
            transform: scale(1.03);
            transition: .3s;
        }

    </style>
</head>
<body>
    <div class="container-fluid f-height d-flex align-items-center justify-content-center py-1 px-0">
        <div class="px-5 py-5 bg-dark d-flex flex-column align-items-center rounded-5" id="login_box">
            <h1 class="white mb-4 fw-bold py-3">
                Register
            </h1>
            <?php
                if (isset($_GET['m'])) {
                    if ($_GET['m'] == 'diff') {
                        echo '<h6 class="red mb-1 text-center">Password Tidak Sama!</h6>';
                        echo '<h6 class="red mb-4 text-center">Silahkan Ulangi</h6>';
                    }
                    else if ($_GET['m'] == 'booked') {
                        echo '<h6 class="red mb-1 text-center">Username sudah dipakai!</h6>';
                        echo '<h6 class="red mb-4 text-center">Silahkan Ulangi</h6>';

                    }
                }
            ?>
            <form action="register-p.php" method="POST" class="w-320 d-flex flex-column mb-4 f-width white">
                <input name="username" type="text" placeholder="username" class="py-2 px-3 bg-dark white rounded-5 mb-4" required>
                <input name="password1" type="password" placeholder="password" class="py-2 px-3 bg-dark white rounded-5 mb-4" required>
                <input name="password2" type="password" placeholder="re-type password" class="py-2 px-3 bg-dark white rounded-5 mb-4" required>
                <input type="submit" value="Register" class="bg-red fw-bold py-2 px-3 white rounded-5 border-0">
            </form>
            <div class="d-flex justify-content-center">
                <p class="white">Sudah punya akun? <a href="login.php" class="fw-bold" style="text-decoration: none;"><span class="red">Login</span></a></p>
            </div>
        </div>
    </div>
</body>
</html>