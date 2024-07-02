<?php
	session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk - erafine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <style>
        #product_img {
            width: 200px;
        }
    </style>
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
        <div class="container py-5 px-4">
            <div class="row">
                <?php
                    include 'koneksi.php';
                    $brand = $_GET['b'];
                    $model = $_GET['p'];

                    $sql = "SELECT * FROM $brand WHERE id_product='$model'";
                    $query = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($query);
                ?>
                <img src="<?= $data['product_pict']; ?>" alt="" class="col" id="product_img">
                <div class="col-7 flex-column container-fluid">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex flex-column">
                            <h1 class="mb-1"><?php echo "$data[name] $data[variant]"; ?></h1>
                            <h5 class="mb-0 green"><?= $data['price'] ?></h5>
                        </div>
                        <a href="favorite-add.php?b=<?= $brand; ?>&p=<?= $model; ?>" class="pointer red mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="36" height="36" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                            </svg>
                        </a>
                    </div>
                    <p id="detail"><?= $data['details']; ?></p>
                        
                    <div class="mt-5">
                        <a target="_BLANK" href="https://wa.me/send?phone=6289670365413&text=Halo%2C+apakah+stok+barang+masih%3F"><button class="container-fluid btn btn-red rounded-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                            <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path>
                        </svg>
                            <p class="fw-bold ms-2 mb-0">Cek Stok</p>
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript">
        const el = document.querySelector('#detail');
        // const string = el.innerHTML;
        const keys = ["CHIPSET", "MEMORY", "DISPLAY", "CAMERA", "BATTERY"];
        keys.forEach( key => {
            el.innerHTML = el.innerHTML.replace(key, `<span class="red fw-bold">${key}</span>`);
        })
        for(let i = 0; i<5; i++) {
            el.innerHTML = el.innerHTML.replace('\n', '<br>');
        }
    </script>
</body>

</html>