<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="full bg-gradient-blue d-flex align-center">
        <div class="container-fluid box-sm d-flex align-items-center justify-content-center py-1 px-0">
            <div class="f-width px-5 py-5 bg-dark d-flex flex-column align-items-center rounded-5">
                <h1 class="white mb-4 border-bottom py-3 px-3">
                    Login
                </h1>
                <?php
                  if (isset($_GET['message'])) {?>
                    <h6 class="red mb-4 text-center">
                    <?php
                    if ($_GET['message'] == "failed") {
                        echo "Login gagal. Username atau password salah";
                    }
                    else if ($_GET['message'] == "logout") {
                        echo "anda berhasil logout";
                    }
                    else if ($_GET['message'] == "belum_login") {
                        echo "anda harus login terlebih dahulu!";
                      } ?>
                    </h6>
                <?php
                  }
                ?>
                <form action="p-login.php" method="POST" class="d-flex flex-column mb-4 f-width">
                    <input name="username" type="text" placeholder="username" class="py-2 px-3 bg-dark white rounded-4 mb-4">
                    <input name="password" type="password" placeholder="password" class="py-2 px-3 bg-dark white rounded-4 mb-4">
                    <input type="submit" value="Login" class="bg-gradient-blue fw-bold white py-2 px-3 bg-dark white rounded-4">
                </form>
                <div class="d-flex justify-content-center">
                    <p class="white">Belum punya akun? <a href="" class="fw-bold" style="text-decoration: none;"><span class="blue">Daftar di sini</span></a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>