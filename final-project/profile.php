<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("location: login.php?message=belum_login");
	}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile - <?= $_SESSION['username'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark py-3 sticky-top">
            <div class="container">
                <a class="navbar-brand hover-red" href="index.php"><h1 class="white ">era<span class="red">fine</span></h1></a>
                <form method="POST" action="search.php" class="d-flex rounded-5 overflow-hidden w-320" role="search">
                    <input class="form-control rounded-0 ps-4" type="text" name="barang" placeholder="apa model hp yang mau kamu cari?" aria-label="Search">
                    <button class="btn bg-red white rounded-0 px-3 py-2" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search " width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#FFFFFA" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="10" cy="10" r="7"></circle>
                            <line x1="21" y1="21" x2="15" y2="15"></line>
                        </svg>
                    </button>
                </form>
                <div class="d-flex">
                    <a href="favorite.php" class="white hover-red me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                        </svg>
                    </a>
                    <a href="profile.php" class="white hover-red">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container d-flex flex-column bg-white ">
            <div class="d-flex justify-content-between align-items-center w-320 my-3">
                <h1 class="fw-bold ">Halo <span class="red"><?= $_SESSION['username'] ?></span>!</h1>
                <a href="logout.php" class="white" style="width: fit-content;">
                    <button class="btn btn-outline-red px-5 py-2 bg-red fw-bold rounded-5">Logout</button>
                </a>
            </div>
            <form action="profile-edit.php" method="POST" class="bg-dark px-5 py-5 rounded-5 w-320 d-flex flex-column mb-4 f-width white">
                <div class="d-flex align-items-center mb-3">
                    <h2 class="white fw-bold me-3">Edit Profil</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil red" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                        <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                    </svg>
                </div>
                <?php
                if (isset($_GET['m'])) {
                    if ($_GET['m'] == 'diff') {
                        echo '<h6 class="red mb-1 text-center">Password Tidak Sama!</h6>';
                        echo '<h6 class="red mb-1 text-center">Silahkan Ulangi</h6>';
                    }
                    else if ($_GET['m'] == 'booked') {
                        echo '<h6 class="red mb-1 text-center">Username sudah dipakai!</h6>';
                        echo '<h6 class="red mb-1 text-center">Silahkan Ulangi</h6>';
                    }
                    else if ($_GET['m'] == 'success') {
                        echo '<h6 class="green mb-1 text-center">Profil berhasil diupdate!</h6>';
                    }
                }
                ?>
                <p class="white fw-bold mb-0">Username</p>
                <input name="id" type="text" value="<?= $_SESSION['id'] ?>" hidden>
                <input name="username" type="text" id="username" placeholder="username" value="<?= $_SESSION['username'] ?>" class="py-2 px-3 bg-dark white rounded-5 mb-4">
                <p class="white fw-bold mb-0">Password</p>
                <div class="d-flex align-items-center mb-4">
                    <input name="password" type="password" id="pass1" placeholder="password" value="<?= $_SESSION['password'] ?>" class="container-fluid py-2 px-3 me-3 bg-dark white rounded-5" required>
                    <div class="white hover-red d-flex align-items-center" id="eye">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="2"></circle>
                            <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                        </svg>
                    </div>
                </div>
                <p class="white fw-bold mb-0">Ulangi password</p>
                <input name="password2" type="password" id="pass2" placeholder="ulang password" class="py-2 px-3 bg-dark white rounded-5 mb-4"required>
                <input type="submit" value="Edit Profil" class="btn-red fw-bold py-2 px-3 white rounded-5 border-0">
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        const eye = document.querySelector('#eye');
        const input1 = document.querySelector('#pass1');
        const input2 = document.querySelector('#pass2');
        eye.addEventListener('click', () => {
            if (input1.type == 'text') {
                eye.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="2"></circle>
                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                </svg>
                `;
                input2.type = input1.type = 'password'
                } 
            else {
                eye.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="3" y1="3" x2="21" y2="21"></line>
                    <path d="M10.584 10.587a2 2 0 0 0 2.828 2.83"></path>
                    <path d="M9.363 5.365a9.466 9.466 0 0 1 2.637 -.365c4 0 7.333 2.333 10 7c-.778 1.361 -1.612 2.524 -2.503 3.488m-2.14 1.861c-1.631 1.1 -3.415 1.651 -5.357 1.651c-4 0 -7.333 -2.333 -10 -7c1.369 -2.395 2.913 -4.175 4.632 -5.341"></path>
                    </svg>
                `;    
                input2.type = input1.type = 'text';
            }
        })
    </script>
</body>

</html>