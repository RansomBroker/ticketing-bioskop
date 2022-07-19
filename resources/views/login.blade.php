<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class=" container-fluid d-flex justify-content-center align-items-center flex-column min-vh-100 ">
        <div class="card row shadow rounded col-lg-4 bg-black">
            <div class="card-body text-white">
                <h1 class="text-center text-uppercase fw-bold fs-4">Login To Ticket</h1>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="email@mail.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="password">
                    </div>
                    <div class="mb-3 from-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label">Remember Me</label>
                    </div>
                    <div class="mb-3">
                        <a href="register"><small class="text-warning">Belum Punya Akun ? buat akun di
                                sini</small></a>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-warning ">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>