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
                    <span>
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
                    <span class="active">
                        <i class="fa-solid fa-print"></i>
                        Cetak Tiket
                    </span>
                </li>
            </ul>
        </div>

        <div class="bg-success-2 flex-fill d-flex justify-content-center align-items-center">
            <a href="" class="text-decoration-none">
                <div class="card text-center border-0 rounded-4" style="width: 36rem;">
                    <div class="card-body">
                        <h1 class="fw-bold my-5">Cetak Tiket</h1>
                        <i class="fa-solid fa-ticket mb-5" style="font-size: 200px;"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</body>

</html>
