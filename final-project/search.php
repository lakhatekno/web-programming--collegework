<?php
    session_start();
    include 'koneksi.php';
    $search = $_POST['barang'];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $search ?> - erafine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark py-3 sticky-top">
            <div class="container">
                <a class="navbar-brand hover-red" href="index.php"><h1 class="white ">erafine</h1></a>
                <form method="POST" action="search.php" class="d-flex rounded-5 overflow-hidden w-320" role="search">
                    <input value="<?= $search; ?>" class="form-control rounded-0 ps-4" type="text" name="barang" placeholder="apa model hp yang mau kamu cari?" aria-label="Search">
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
            <h1 class="my-5 fw-bold">menampilkan hasil untuk "<span class="red"><?= $search ?></span>"</h1>
            <div class="d-flex flex-column">
                <?php
                    $brand_sql = "SELECT brand_name FROM brand";
                    $brand_query = mysqli_query($conn, $brand_sql);
                    while ($brand = mysqli_fetch_array($brand_query)) {        
                        $sql = "SELECT * FROM $brand[brand_name] WHERE `name` LIKE '%$search%' OR variant LIKE '%$search%' OR details LIKE '%$search%'";
                        $s_query = mysqli_query($conn, $sql);
                        $cek = mysqli_num_rows($s_query);
                        if ($cek > 0) { ?>
                            <h3 class="red fw-bold text-center my-1 text-capitalize"><?= $brand['brand_name'] ?></h3>
                            <div class="d-flex justify-content-center mb-4">
                            <?php
                                while ($product = mysqli_fetch_array($s_query)) {
                ?>
                                <div class="ccard me-4 mb-4">
                                    <div class="ccard-head">
                                        <div class="ccard-img-wrapper">
                                            <img src="<?= $product['product_pict'] ?>" alt="">
                                        </div>
                                        <div class="ccard-action hover-red">
                                            <a href="favorite-add.php?i=s&q=<?= $search ?>&b=<?= $brand['brand_name'] ?>&p=<?= $product['id_product'] ?>" class=" pointer white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ccard-text">
                                        <a href="product.php?b=<?= $brand['brand_name'] ?>&p=<?= $product['id_product'] ?>" class="hover-red pointer">
                                            <p class="mb-0 fw-bold"><?php echo "$product[name] $product[variant]" ?></p>
                                        </a>
                                        <p class="price"><?= $product['price'] ?></p>
                                    </div>
                                </div>
                <?php
                            }
                ?>          
                            </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

