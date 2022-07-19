<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
<div class="container-fluid d-flex justify-content-center align-items-center flex-column min-vh-100">
        <div class="card row shadow rounded col-lg-4">
            <div class="card-body text-white bg-black" >
                <h1 class="text-center text-uppercase fw-bold fs-4">Register To Ticket</h1>
                <form>
                    <div class="mb-3"> 
                        <label class="form-label">Name</label>
                        <input type="name" class="form-control" placeholder="Type Your Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="name" class="form-control" placeholder="Type Your Username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Type your email@mail.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Type your password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password Verification</label>
                        <input type="password" class="form-control" placeholder="Type Again your password">
                    </div>
                    <div class="mb-3">
                        <a class="text-warning" href="login"><small>Sudah punya akun ? login di sini</small></a>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-warning">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>