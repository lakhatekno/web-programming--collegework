<?php
    session_start();
    $brand = $_GET['b'];
    $id = $_GET['i'];

    include 'sqlconnect.php';
    $sql = "SELECT * FROM $brand WHERE id_product=$id";
    $query = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($query);

    if (empty($_SESSION['admin'])) {
        header("location: login.php?message=belum_login");
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="style\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        ::-webkit-scrollbar {
            background-color: #FFFFFA;
            width: 10px;        }
        ::-webkit-scrollbar-thumb {
            background-color: #FF312E;
        }
        textarea[name="details"] {
            height: 300px;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="container rounded-4 p-5 bg-dark d-flex flex-column mt-3 mb-0">
        <h1 class=" text-center white fw-bold">Edit <span class="red">Product</span></h1><br>
        <form action="editprocess.php" method="POST">
            <div class="mb-3">
                <input type="text" name="brand" value="<?=$brand?>" hidden>
                <input type="text" name="id" value="<?=$data['id_product']?>" hidden>
                <p class="fw-bold mb-1 red">Product Name</p>
                <input name="name" value="<?= $data['name'] ?>" type="text" class="form-control bg-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Nama" style="width: 100%; color: white;" required>
            </div>
            <div class="mb-3">
                <p class="fw-bold mb-1  red">Variant</p>
                <input name="variant" value="<?= $data['variant'] ?>" type="text" class="form-control bg-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Variant" style="width: 100%; color: white;" required>
            </div>
            <div class="mb-3">
                <p class="fw-bold mb-1  red">Color</p>
                <input name="color" value="<?= $data['color'] ?>" type="text" class="form-control bg-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Color" style="width: 100%; color: white;" required>
            </div>
            <div class="mb-3">
                <p class="fw-bold mb-1  red">Details</p>
                <textarea name="details" class="form-control bg-dark" placeholder="Input Details" style="width: 100%; color: white;" required><?=$data['details']?></textarea>
            </div>
            <div class="mb-3">
                <p class="fw-bold mb-1  red">Product Picture Link</p>
                <textarea name="pict" type="text" class="form-control bg-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input link Picture" style="width: 100%; color: white;" required><?=$data['product_pict']?></textarea>
            </div>
            <div class="mb-3">
                <p class="fw-bold mb-1  red">Price</p>
                <input name="price" value="<?= $data['price'] ?>" type="text" class="form-control bg-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Color" style="width: 100%; color: white;" required>
            </div>
            <!-- <input type="submit" value="Edit Profil" class="btn-red fw-bold py-2 px-3 white rounded-5 border-0"> -->
            <button type="submit" class="btn-red fw-bold py-2 px-5 white rounded-5 border-0" style="width: fit-content;">Edit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>