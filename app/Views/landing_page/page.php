<?= $this->extend('layout/pages/template'); ?>

<!-- content -->
<?= $this->section('content'); ?>
<!-- carousel -->
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
                            <img class="bd-placeholder" width="100%" height="100%" src="<?= base_url() ?>/assets/sabuga.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                        </svg>

                        <div class="container">
                            <div class="carousel-caption" style="text-shadow: 1.5px 1.5px 1.5px black">
                                <h1>Web Penyimpanan Data</h1>
                                <p>PT. LETMI ITB</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <img class="bd-placeholder" width="100%" height="100%" src="<?= base_url() ?>/assets/itb.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption" style="text-shadow: 1.5px 1.5px 1.5px black">
                                <h1>PT. LETMI ITB</h1>
                                <p>Top Ten Best Performance Supplier 2011</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <img class="bd-placeholder" width="100%" height="100%" src="<?= base_url() ?>/assets/konsultasi.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-end" style="text-shadow: 1.5px 1.5px 1.5px black">
                                <h1>Konsultasi Dan Pelatihan</h1>
                                <p>Memberikan Layanan Pelatihan Dan Konsultasi Manajemen Industri</p>
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
<!-- end of carousel -->

<!-- Start Service Section -->
<div class="container mb-5">
    <div class="title">
        <h2>Layanan Kami</h2>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6"></div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body ms-5">
                    <img src="<?= base_url() ?>/assets/talking.png" class="card-img-top" alt="...">
                    <h5 class="card-title mt-3">Konsultasi</h5>
                    <p class="card-text">Layanan jasa konsultasi untuk mengembangkan sektor industri dan sektor bisnis</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body ms-5">
                    <img src="<?= base_url() ?>/assets/training.png" class="card-img-top" alt="...">
                    <h5 class="card-title mt-3">Pelatihan</h5>
                    <p class="card-text">Layanan jasa pelatihan dalam bidang teknik dan manajemen industri</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6"></div>
    </div>
</div>
<!-- End Service Section -->

<!-- start of about us -->
<div class="container">
    <div class="title">
        <hr size="5px">
        <h2 class="mt-5">Sekilas Tentang Kami</h2>
    </div>
    <div class="isi mb-5">
        <p>
            LETMI ITB didirikan pada tahun 1973 dengan misi untuk mengabdikan kepakaran dan teknologi yang dimiliki Jurusan Teknik dan Manajemen Industri (sebutan Departemen Teknik Industri pada waktu itu) kepada masyarakat umum. Selama lebih dari 35 tahun LETMI ITB melayani masyarakat tercatat tidak kurang dari 50 perusahaan menikmati jasa pelatihan dan jasa konsultan manajemen yang diberikan oleh para pakar yang tergabung dalam LETMI ITB.
            <br>
            <br>
            Pada tanggal 29 Agustus 2005 LETMI ITB berubah dari yayasan menjadi perusahaan komersial bernama PT. LETMI ITB dengan kepemilikan saham sepenuhnya dimiliki oleh ITB dan unsur-unsur didalam ITB. Dengan dukungan seribu lebih pakar dan ratusan laboratorium yang dimiliki oleh ITB, PT. LETMI ITB siap berperan dalam membentuk kehidupan bangsa yang lebih baik melalui jasa-jasa pelatihan dan jasa-jasa konsultan manajemen yang kami tawarkan.
        </p>
    </div>
</div>
<!-- end of about us -->

<!-- start of award -->
<div class="container">
    <div class="title">
        <hr size="5px">
        <h2 class="mt-5">Penghargaan</h2>
        <h3>Top Ten Best Performance Supplier 2011</h3>
    </div>
    <div>
        <img src="<?= base_url() ?>/assets/penghargaan.png" class="img-penghargaan mb-5 mt-3" width="10%">
    </div>
</div>
<!-- end of award -->

<!-- end of content -->
<?= $this->endSection(); ?>