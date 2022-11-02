<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
        <h1>LOGIN</h1>
        <br>
        <?php
            if (isset($_GET['message'])) {
                if ($_GET['message'] == "failed") {
                    echo "Login gagal. Username atau password salah";
                }
                else if ($_GET['message'] == "logout") {
                    echo "anda berhasil logout";
                }
                else if ($_GET['message'] == "belum_login") {
                    echo "anda harus login terlebih dahulu!";
                }
            }
        ?>
        <form method="POST" action="login_proses.php">
            <input type="text" placeholder="username" name="username"><br><br>
            <input type="password" placeholder="password" name="pass"><br><br>
            <input type="submit" value="LOGIN">
        </form>
    </center>
</body>
</html>