<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url() ?>/bs5/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/bs5/scss/bootstrap.scss" rel="stylesheet">
    <link href="<?= base_url() ?>/css/navbar.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/bootstrap/css/custom.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/css/my.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <title><?= $title; ?></title>
</head>

<body>


    <!-- navbar -->

    <header class="header">
        <nav class=" navbar navbar-expand-lg navbar-light bg-white fixed-top d-flex" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="<?= base_url() ?>/assets/logo.png" alt="" width="50%"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link link tebel-sedang ms-5" href="<?= site_url('landingPage/index') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link tebel-sedang ms-5" href="<?= site_url('landingPage/profilePerusahaan') ?>">Profile Perusahaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link tebel-sedang ms-5 pe-5" href="<?= site_url('dashboard/index') ?>">Kelola Data</a>
                        </li>
                    </ul>
                </div>
                <a class="nav-link link tebel-sedang ms-5 me-5 ps-5"><?= session('username'); ?></a>
                <a class="btn bg-custom rounded-pill tebel-sedang shadow" href="<?= site_url('auth/logout') ?>" role="button">Logout</a>
            </div>
        </nav>
    </header>
    <!-- end of navbar -->

    <?= $this->renderSection('content'); ?>

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 mt-5">
                    <span class="logo"><img src="<?= base_url() ?>/assets/logo.png" alt="" width="50%"></span>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="menu">
                        <span>Menu</span>
                        <li>
                            <a href="<?= site_url('landingPage/index') ?>">Home</a>
                        </li>

                        <li>
                            <a href="<?= site_url('landingPage/profilePerusahaan') ?>">Profile Perusahaan</a>
                        </li>

                        <li>
                            <a href="#">Kelola Data</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="address">
                        <span>Contact</span>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="#">(022) 2511546</a>
                        </li>
                        <li>
                            <i class="fa fa-fax" aria-hidden="true"></i>
                            <a href="#">(022) 2511546</a>
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <a href="https://www.google.com/maps/place/Sabuga+Convention+Hall/@-6.8862581,107.6056452,17z/data=!3m2!4b1!5s0x2e68e6f7c27370d1:0xfae971339e9d9000!4m5!3m4!1s0x2e68e64557f442e3:0xc0e5915be0bedccb!8m2!3d-6.8862581!4d107.6078339">SABUGA ITB CONVENTION HALL <br> Jl. Tamansari No. 73 Bandung 40132</a>
                        </li>
                        <li>
                            <i class="fa fa-cloud" aria-hidden=" true"></i>
                            <a href="http://letmi-itb.com/">www.letmi-itb.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->
    <section>
        <div class="container-footer">
            <footer class="footer">
                <p style="text-align: center;">Copyright © 2021 PT. LETMI ITB.</p>
            </footer>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" <?= base_url() ?>/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?= base_url() ?>/bootstrap/js/onscroll.js"></script>
</body>

</html>