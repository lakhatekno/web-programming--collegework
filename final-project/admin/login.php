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
                Login Yang Admin Admin Aja
            </h1>
            <?php
                if (isset($_GET['message'])) {?>
                    <h6 class="white mb-4 text-center">
                    
                    <?php
                    if ($_GET['message'] == "failed") {
                        echo "Login gagal. Username atau password salah";
                    }
                    else if ($_GET['message'] == "logout") {
                        echo "anda berhasil log out";
                    }
                    else if ($_GET['message'] == "belum_login") {
                        echo "anda harus login terlebih dahulu!";
                    } 
                    else if ($_GET['message'] == "success") {
                        echo '<h6 class="green mb-4 text-center">Register Berhasil! Silahkan Login</h6>';
                    } 
                    ?>
                    
                    </h6>
            <?php
                }
            ?>
            <form action="login-proses.php" method="POST" class="w-320 d-flex flex-column mb-4 f-width white">
                <input name="username" type="text" placeholder="username" class="py-2 px-3 bg-dark white rounded-5 mb-4">
                <input name="password" type="password" placeholder="password" class="py-2 px-3 bg-dark white rounded-5 mb-4">
                <input type="submit" value="Login" class="bg-red fw-bold py-2 px-3 white rounded-5 border-0">
            </form>
            <!-- <div class="d-flex justify-content-center">
                <p class="white">Belum punya akun? <a href="register.php" class="fw-bold" style="text-decoration: none;"><span class="red">Register</span></a></p>
            </div> -->
        </div>
    </div>
</body>
</html>