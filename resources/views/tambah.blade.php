<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Film</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="m-0">

    <div class="container-fluid p-5 min-vh-100">
        <div class="card row shadow rounded col-lg-12">
            <div class="card-body">
                <h1 class="text-start text-uppercase fw-bold fs-4 mb-3">Tambah Film Baru</h1>
                <form>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Judul Film</label>
                        <input type="text" class="form-control" placeholder="judul film">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Sinposis Film</label>
                        <textarea class="form-control" placeholder="sinopsis film"></textarea>
                    </div>
                    <div class="mb-3">
                        <p class="mb-0 fw-bold">Tanggal Penayangan</p>
                        <label class="form-label">Dari</label>
                        <input type="date" class="form-control">
                        <label class="form-label">Sampai</label>
                        <input type="date" class="form-control">
                    </div>
                    <p class="mb-3 fw-bold">Theater dan Studio</p>
                    <div class="mb-3">
                        <select class="form-select">
                            <option selected>Pilih Theater</option>
                            <option class="1">Ayani</option>
                            <option class="2">Transmart</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select">
                            <option selected>Pilih Studio</option>
                            <option class="1">Studio 1</option>
                            <option class="2">Studio 2</option>
                        </select>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary">Tambah Film Baru</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>