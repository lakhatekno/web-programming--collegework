<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="full bg-gradient-blue d-flex align-center">
        <div class="container-fluid box-sm d-flex align-items-center justify-content-center py-1 px-0">
            <div class="f-width px-5 py-5 bg-dark d-flex flex-column align-items-center rounded-5">
                <h1 class="white mb-4 border-bottom py-3 px-3">
                    Register
                </h1>
                <form action="p-tambah-user.php" method="POST" class="d-flex flex-column mb-4 f-width">
                    <?php
                    if (isset($_GET['pass'])) {
                        if ($_GET['pass'] == 'diff') {
                            echo '<h6 class="red mb-1 text-center">Password Tidak Sama!</h6>';
                            echo '<h6 class="red mb-4 text-center">Silahkan Ulangi</h6>';
                        }
                    }
                    ?>
                    <input name="username" type="text" placeholder="username" class="py-2 px-3 bg-dark white rounded-4 mb-4">
                    <input name="password1" type="password" placeholder="password" class="py-2 px-3 bg-dark white rounded-4 mb-4">
                    <input name="password2" type="password" placeholder="password" class="py-2 px-3 bg-dark white rounded-4 mb-4">
                    <input type="submit" value="Register" class="bg-gradient-blue fw-bold white py-2 px-3 bg-dark white rounded-4">
                </form>
                <div class="d-flex justify-content-center">
                    <p class="white">Sudah punya akun? <a href="login.php" class="fw-bold" style="text-decoration: none;"><span class="blue">Login</span></a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>