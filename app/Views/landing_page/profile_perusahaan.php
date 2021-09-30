<?= $this->extend('layout/pages/template'); ?>

<!-- content -->
<?= $this->section('content'); ?>
<!-- background -->
<div class="bg-3"></div>

<!-- end of background -->
<div class="container">
    <div class="row">
        <div class="mb-5">
            <img src="<?= base_url() ?>/assets/sabuga-1.jpg" style="z-index: 2;" class="img-fluid" alt="...">
        </div>
        <div class="title mb-5">
            <h2>Profile Perusahaan</h2>
            <table>
                <tbody>
                    <tr>
                        <td><i class="fa fa-building" aria-hidden="true"></i> Nama Perusahaan</td>
                        <td> : </td>
                        <td> PT. Lembaga Teknik dan Manajemen Industri</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-calendar" aria-hidden="true"></i> Tahun Berdiri</td>
                        <td> : </td>
                        <td> 1973</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-map-marker" aria-hidden="true"></i> Alamat</td>
                        <td> : </td>
                        <td> SABUGA CONVENTION HALL Jl. Tamansari No. 73 Bandung 40132</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr size="5px">
        <div class="col-md-6 col-sm-4 mt-5">
            <div class="title">
                <h2>Visi Dan Misi</h2>
                <div class="visi">
                    <h3>Visi :</h3>
                    <p>Menjadi konsultan handal dan terpilih dalam bidang Teknik dan Manajemen Industri serta sistem operasionalnya</p>
                </div>
                <div class="misi">
                    <h3>Misi :</h3>
                    <ul>
                        <li>Menyebarluaskan pengetahuan dan keterampilan dalam bidang teknik dan manajemen industri di Indonesia.</li>
                        <li>Membantu mengembangkan sektor industri dan sektor bisnis lain yang memerlukan melalui jasa konsultasi dan pelatihan.</li>
                        <li>Melakukan penelitian dan pelatihan, baik secara sendiri maupun bekerja sama dengan instansi lain, dalam rangka mengembangkan keilmuan dan praktek manajemen bisnis dan industri.</li>
                        <li>Membantu ITB dalam melaksanakan Tri Dharma Perguruan Tinggi dan misi lainnya.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-4 mt-5 mb-5">
            <div class="title">
                <img src="<?= base_url() ?>/assets/maps-letmi.png" class="img mt-4 ms-5" alt="...">
            </div>
        </div>
        <hr size="5px">
        <div class="struktur-organisasi">
            <div class="title mt-5">
                <h2>Struktur Organisasi</h2>
                <img src="<?= base_url() ?>/assets/struktur-organisasi.png" class="img-so mb-5 mt-3" width="10%">
            </div>
        </div>
        <a class="btn btn-primary btn-lg mb-5 mt-3" name="view" href="<?= base_url("pdf/company-profile.pdf"); ?>" role="button">Lihat Detail <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
</div>
</div>
<!-- end of content -->

<?= $this->endSection(); ?>