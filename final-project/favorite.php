<?php
    session_start();
    if (empty($_SESSION['username'])) {
		header("location: login.php?message=belum_login");
	}
    include 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Favorit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark py-3 sticky-top">
            <div class="container">
                <a class="navbar-brand hover-red" href="index.php"><h1 class="white ">erafine</h1></a>
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
                    <a href="favorite.php" class="red hover-red me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                        </svg>
                    </a>
                    <a href="profile.php" class="white hover-red">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
            <h1 class="fw-bold my-4">Favoritnya <span class="red"><?= $_SESSION['username'] ?></span></h1>
            <div class="fav-container">    
            <!-- start loop -->
            <?php
                $sql_fav = "SELECT * FROM favorite WHERE id_user='$_SESSION[id]'";
                $query = mysqli_query($conn, $sql_fav);
                while ($fav = mysqli_fetch_array($query)) {
                    $sql_p = "SELECT * FROM favorite INNER JOIN $fav[brand] WHERE favorite.id_user='$_SESSION[id]' AND $fav[brand].id_product=$fav[id_product]";
                    $query2 = mysqli_query($conn, $sql_p);
                    $p = mysqli_fetch_array($query2);
            ?>
                <div class="fav-item mb-4">
                    <div class="d-flex">
                        <div class="fav-img me-4">
                            <img src="<?= $p['product_pict'] ?>" alt="">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <a href="product.php?b=<?= $p['name'] ?>&p=<?= $p['id_product'] ?>" class="hover-red">
                                <h5 class="fw-bold mb-1"><?php echo "$p[name] $p[variant] - $p[color]" ?></h5>
                            </a>
                            <p class="price mb-0"><?= $p['price'] ?></p>
                        </div>
                    </div>
                    <a href="favorite-remove.php?id=<?= $p['id_favorite'] ?>" class="px-2 py-2 fw-bold btn-outline-red rounded-5 fav-action">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 3l18 18"></path>
                            <path d="M19.5 12.572l-1.5 1.428m-2 2l-4 4l-7.5 -7.428m0 0a5 5 0 0 1 -1.288 -5.068a4.976 4.976 0 0 1 1.788 -2.504m3 -1c1.56 .003 3.05 .727 4 2.006a5 5 0 1 1 7.5 6.572"></path>
                         </svg>
                    </a>
                </div>
            <?php
                    
                }
            ?>
            <!-- end loop -->
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>