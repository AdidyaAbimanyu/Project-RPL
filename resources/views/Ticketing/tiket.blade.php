<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,
                   initial-scale=1.0">
    <title>Bootstrap5 Sidebar</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <div class="container-fluid p-0 d-flex h-100">
        <div class="position-absolute end-0 top-0 text-center mt-4 me-4">
            <a href="" class="text-decoration-none text-black">
                <i class="fa-regular fa-circle-question" style="font-size: 40px;"></i>
                <h5>Bantuan</h5>
            </a>
        </div>

        <div id="bdSidebar" 
             class="d-flex flex-column 
                    p-3 bg-white
                    justify-content-center">
            <h1 class="navbar-brand position-absolute top-0 mt-5 fs-3 fw-bold">Progress</h1>
            <ul class="mynav nav nav-pills flex-column">
                <li class="nav-item mb-3">
                    <span class="active">
                        <i class="fa-solid fa-ticket"></i>
                        Pesan Tiket
                    </span>
                </li>

                <li class="nav-item mb-3">
                    <span>
                        <i class="fa-solid fa-credit-card"></i>
                        Pembayaran
                        <!-- <span class="notification-badge">5</span> -->
                    </span>
                </li>
                <li class="nav-item">
                    <span>
                        <i class="fa-solid fa-print"></i>
                        Cetak Tiket
                    </span>
                </li>
            </ul>
        </div>

        <div class="bg-success-2 flex-fill">
                <div class="row d-flex h-100 align-items-center">
                    <div class="col-6 d-flex flex-column align-items-center">
                        <div class="card text-center border-0 rounded-4" style="width: 18rem;">
                            <div class="card-header border-0 bg-success rounded-4 text-white">
                                <h3>Anak-Anak</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-circle-minus"></i>
                                    </div>
                                    <div class="col-8 border-bottom border-black border-3">
                                        <span class="h-100 fw-bold">0</span>
                                    </div>
                                    <div class="col-2">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card text-center border-0 my-5" style="width: 18rem;">
                            <div class="card-header border-0 bg-success text-white">
                                <h3>Dewasa</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-circle-minus"></i>
                                    </div>
                                    <div class="col-8 border-bottom border-black border-3">
                                        <span class="h-100 fw-bold">0</span>
                                    </div>
                                    <div class="col-2">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="pembayaran.html" class="btn btn-success px-4 fw-bold fs-5">Selanjutnya</a>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <div class="card text-center border-0 rounded-4" style="width: 18rem;">
                            <div class="card-header border-0 bg-success text-white rounded-4 py-3">
                                <h3>Solo Zoo</h3>
                            </div>
                            <div class="card-body">
                                <div class="bg-success text-white rounded-4 py-3 my-4">
                                    <h4>Anak-Anak</h4>
                                    <h5>Rp 5.000,-/Orang</h5>
                                </div>
                                <div class="bg-success text-white rounded-4 py-3 my-3">
                                    <h4>Dewasa</h4>
                                    <h5>Rp 10.000,-/Orang</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
