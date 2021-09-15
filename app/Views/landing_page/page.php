<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url() ?>/bs5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/bs5/scss/bootstrap.scss" rel="stylesheet">
    <link href="<?= base_url() ?>/css/navbar.css" rel="stylesheet">

    <title>Landing Page</title>
</head>

<body>


    <!-- navbar -->
    <header>
        <nav class=" navbar navbar-expand-lg navbar-light bg-white fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="<?= base_url() ?>/assets/logo-letmi.png" alt="" width="50%"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="nav nav-pills ">
                        <li class="nav-item">
                            <a class="nav-link link tebel-sedang" href="#">Profil Perusahaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link tebel-sedang" href="#">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link tebel-sedang" href="#">Kelola Data</a>
                        </li>
                    </ul>
                    <a class="btn bg-custom rounded-pill tebel-sedang shadow" href="<?= site_url('auth/logout') ?>" role="button">Logout</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- end of navbar -->

    <!-- content -->
    <main class="carousel">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#777" />
                                <img class="bd-placeholder" width="100%" height="100%" src="<?= base_url() ?>/assets/logo-letmi.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                            </svg>

                            <div class="container">
                                <div class="carousel-caption text-start">
                                    <h1>Example headline.</h1>
                                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#777" />
                            </svg>

                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Another example headline.</h1>
                                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#777" />
                            </svg>

                            <div class="container">
                                <div class="carousel-caption text-end">
                                    <h1>One more for good measure.</h1>
                                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
    <!-- end ofcontent -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url() ?>/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>