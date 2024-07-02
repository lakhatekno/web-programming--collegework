<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog Online - erafine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header class="sticky-top">
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
        <div class="container-fluid banner">
            <div class="hero-text">
                <h2 class="white">Selamat Datang di</h2>
                <h1 class="white fw-bold">era<span class="red">fine</span></h1>
            </div>
        </div>
        <div class="container bg-white">
            <div class="container-fluid flex-column">
                <p class="mb-1 mt-5 text-center">filter :</p>
                <div class="d-flex flex-wrap justify-content-center mb-5">
                <?php
                    include 'koneksi.php';
                    $brands	= "SELECT * FROM brand";
                    $q_brand	= mysqli_query($conn, $brands);
                    while($brand = mysqli_fetch_array($q_brand)) {
                ?>
                      <div class="btn-ored-active rounded-5 fw-bold py-2 px-3 me-2 mb-2 text-center toggle text-capitalize" style="width: fit-content;" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $brand['brand_name'] ?>_data" aria-controls="<?= $brand['brand_name'] ?>_data">
                         <?= $brand['brand_name'] ?>
                     </div>
                <?php
                    }
                ?>
                </div>
                <?php
                    $brands	= "SELECT * FROM brand";
                    $q_brand	= mysqli_query($conn, $brands);
                    while($brand_list = mysqli_fetch_array($q_brand)) {
                ?>
                <div class="d-flex flex-wrap justify-content-center mb-3">
                    <div class="accordion">
                        <div class="accordion-item border-0">
                            <div id="<?= $brand_list['brand_name'] ?>_data" class="accordion-collapse collapse show text-capitalize" aria-labelledby="<?= $brand['brand_name'] ?>_head">
                                <h3 class="red fw-bold text-center"><?= $brand_list['brand_name'] ?></h3>
                                <div class="accordion-body d-flex justify-content-center flex-wrap">
                                    <?php
                                        $products = "SELECT * FROM $brand_list[brand_name]";
                                        $q_product = mysqli_query($conn, $products);
                                        while($product = mysqli_fetch_array($q_product)) {
                                    ?>
                                    <div class="ccard me-4 mb-4">
                                        <div class="ccard-head">
                                            <div class="ccard-img-wrapper">
                                                <img src="<?= $product['product_pict'] ?>" alt="">
                                            </div>
                                            <div class="ccard-action hover-red">
                                                <a href="favorite-add.php?i=i&b=<?= $brand_list['brand_name'] ?>&p=<?= $product['id_product'] ?>" class=" pointer white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ccard-text">
                                            <a href="product.php?b=<?= $brand_list['brand_name'] ?>&p=<?= $product['id_product'] ?>" class="hover-red pointer">
                                                <p class="mb-0 fw-bold"><?php echo "$product[name] $product[variant]" ?></p>
                                            </a>
                                            <p class="price"><?= $product['price'] ?></p>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        const btns = document.querySelectorAll('.toggle');
        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                console.log("a")
                btn.classList.toggle("btn-outline-red");
                btn.classList.toggle("btn-ored-active");
            })
        })
    </script>
</body>

</html>