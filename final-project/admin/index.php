<?php
    session_start();
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
        
        .fold {
            width: 35px;
            overflow: hidden;
        }

        #geser_kiri_kidz {
            position: relative;
        }
        #pencetan_ngelipet {
            position: absolute;
            top: 5px;
            right: 5px;
        }
        .rotate-180 {
            transform: rotate(180deg);
        }

    </style>
</head>

<body class="bg-light">

    <div class="row" style="height:100%; width: 100%;">
        <div class="col-2 bg-dark d-flex flex-column justify-content-start text-center" id="geser_kiri_kidz">
            <div class="hover-red rotate-180" id="pencetan_ngelipet">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-skip-forward" width="15" height="15" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 5v14l12 -7z"></path>
                    <line x1="20" y1="5" x2="20" y2="19"></line>
                </svg>
            </div>
            <div class="d-block" id="dashboard">
                <a href="index.php" class="" style="text-decoration: none;">
                    <h1 class="text-light mt-5 hover-red text-center">Dashboard</h1>
                </a>
                <h3 class="text-light mt-5 mb-1 text-center">Add Brand</h3>
                <div class="mx-auto">
                    <form action="addprocess.php" method="POST" style="width: 100%;">
                        <div class="my-3">
                            <input name="brand_name" type="text" class="form-control bg-dark text-center" id="exampleInputEmail1" aria-describedby="" placeholder="Input Merk" style="width: 100%; color: white;" required>
                        </div>
                        <button name="menu" value="brand" type="submit" class="btn btn-dark btn-outline-light" style="text-align: center; width: 100%;">Submit</button>
                    </form>
                </div>
                <div class="container-fluid mt-4 px-5 text-white text-start">
                    <tbody>
                        <tr>
                            <h4  class="fw-bold mb-2" >List Merk :</h4>
                        </tr>
                        <?php
                        include "sqlconnect.php";

                        $query = "SELECT * FROM brand";
                        $sql = $connect->query($query);

                        while ($data = $sql->fetch_object()) {
                        ?>
                            <tr>
                                <a href="index.php?b=<?= $data->brand_name ?>" style="text-decoration: none;">
                                    <h5  class="text-capitalize red fw-bold hover-red mb-2" >
                                        <?= $data->brand_name ?>
                                    </h5>
                                </a>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </div>
            </div>
        </div>
        <!-- table -->
        <div class="col-8">
            <style>
                .admin-table {
                    height: 100vh; 
                    overflow: scroll;
                }
                ::-webkit-scrollbar {
                    display: none;
                }
            </style>
            <div class="col d-flex flex-column align-items-start admin-table">
                <?php
                include "sqlconnect.php";

                if (isset($_GET['b'])) {
                    $brand = $_GET['b'];
                    $query = "SELECT * FROM $brand";
                    $sql = $connect->query($query);
                    $num = 1;
                ?>
                <h1 class="text-capitalize red fw-bold my-4" ><?=$brand?></h1>
                <table class="table table-dark rounded-4 overflow-hidden text-center">

                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Variant</th>
                            <th scope="col">Color</th>
                            <th scope="col">Details</th>
                            <th scope="col">Price</th>
                            <!-- <th scope="col">Picture</th> -->
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                        <?php
                            while ($data = $sql->fetch_object()) {
                                ?>

                            <tr>
                                <th scope="row"><?= $num ?></th>
                                <td><?= $data->name ?></td>
                                <td><?= $data->variant ?></td>
                                <td><?= $data->color ?></td>
                                <td id="detail" class="text-start"><?= $data->details ?></td>
                                <td><?= $data->price ?></td>
                                <!-- <td><?php //$data->product_pict ?></td> -->
                                <td><a href="edit.php?b=<?= $brand ?>&i=<?= $data->id_product ?>"><button type="button" class="btn btn-light">Edit</button></a></td>
                                <td><a href="eraseprocess.php?eproduct=<?= $data->id_product ?>&b=<?= $brand ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                            </tr>

                            <?php
                            $num++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- input new -->
        <div class="col mx-1">
                <h1 class="text-capitalize red fw-bold my-4" >Add</h1>
                <div class="card login-form bg-dark bg-dark rounded-4" style="width:110%;">
                    <div class="card-body" style="width:100%;">
                        <div class="card-text">
                            <form action="addprocess.php" method="POST">
                                <div class="mb-3">
                                    <input type="text" name="brand" value="<?=$brand?>" hidden>
                                    <input name="name" type="text" class="form-control bg-dark text-center" placeholder="Nama" style="width: 100%; color: white;" required>
                                </div>
                                <div class="mb-3">
                                    <input name="variant" type="text" class="form-control bg-dark text-center" placeholder="Variant" style="width: 100%; color: white;" required>
                                </div>
                                <div class="mb-3">
                                    <input name="color" type="text" class="form-control bg-dark text-center" placeholder="Color" style="width: 100%; color: white;" required>
                                </div>
                                <div class="mb-3">
                                    <input name="details" type="text" class="form-control bg-dark text-center" placeholder="Details" style="width: 100%; color: white;" required>
                                </div>
                                <div class="mb-3">
                                    <input name="price" type="text" value="Rp. " class="form-control bg-dark text-center" placeholder="Price" style="width: 100%; color: white;" required>
                                </div>
                                <div class="mb-3">
                                    <input name="pict" type="text" class="form-control bg-dark text-center" placeholder="link Picture" style="width: 100%; color: white;" required>
                                </div>
                                <br>
                                <button name="menu" value="xiaomi" type="submit" class="btn btn-dark btn-outline-light" style="text-align: center; width: 100%;">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript">
        const els = document.querySelectorAll('#detail');
        els.forEach ( el => {
            for (let i = 0; i<3; i++)
                el.innerHTML = el.innerHTML.replace('\n', '<br>');
        });

        const dashboard = document.querySelector('#dashboard');
        const collapseEl = document.querySelector('#geser_kiri_kidz');
        const collapseBtn = document.querySelector('#pencetan_ngelipet');
        collapseBtn.addEventListener('click', () => {
            collapseEl.classList.toggle('fold');
            collapseBtn.classList.toggle('rotate-180');
            dashboard.classList.toggle('opacity-0');
            collapseEl.style.transition = "all .5s";
            collapseBtn.style.transition = "all .5s";
            dashboard.style.transition = "all .2s";
        })
    </script>
</body>

</html>