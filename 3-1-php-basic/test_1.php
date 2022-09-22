<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasar-dasar PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="jumbotron d-flex justify-content-center align-items-center  mb-5 text-dark">
        <form action="action.php" method="POST" class="rounded-5 bg-white border p-4 mx-3" id="signup">
          <h3 class="fw-light border-bottom pb-2">Daftar akun <span class="text-primary fw-normal">trading</span> anda</h3>
          <div class="mb-3">
            <label for="inputNama" class="form-label mb-0">Nama</label>
            <input type="text" name="nama" required class="form-control" id="inputNama" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label mb-0">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label mb-0">Password</label>
            <input type="password" required name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Saya setuju dengan <a href="">syarat & ketentuan</a><br> berlaku.</label>
          </div>
          <input type="submit" class="btn btn-primary rounded-5 w-100" value="Submit"></input>
        </form>
    </div>
</body>
</html>