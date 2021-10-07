<?= $this->extend('layout/template/sb-admin'); ?>

<!-- content -->
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Kontrak</h1>
    <p class="mb-4">Halaman ini menampilkan daftar kontak perusahaan LETMI</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kontrak</h6>
            <a href="<?= site_url('kontrak/create') ?>" class="btn btn-primary mt-3">Tambah Kontrak <i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Nama Paket Pekerjaan</th>
                            <th rowspan="2">Ringkasan Lingkup Pekerjaan</th>
                            <th rowspan="2">Lokasi</th>
                            <th colspan="2">Pemberi Pekerjaan</th>
                            <th colspan="3">Kontrak</th>
                            <th rowspan="2">Status Penyedia Dalam Pelaksanaan Pekerjaan</th>
                            <th colspan="3">Tanggal Selesai Pekerjaan Berdasarkan</th>
                            <th rowspan="2">Aksi</th>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat/Telfon</th>
                            <th>No/Tanggal</th>
                            <th>Nilai</th>
                            <th>File Kontrak</th>
                            <th>Kontrak</th>
                            <th>BA Serah Terima</th>
                            <th>File BAST</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>071401001</td>
                            <td>Ridayanti</td>
                            <td>dasdas/td>
                            <td>sdsad</td>
                            <td>dasjgjd</td>
                            <td>dkalshdlkas</td>
                            <td>asndlsanfsa</td>
                            <td>daspdsaf</td>
                            <td>jdlasflsalf</td>
                            <td>jsadojsaf</td>
                            <td>ks[djas[pf</td>
                            <td>ajsfogasofgois</td>
                            <td>
                                <button class="btn btn-warning mt-2">Edit <i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger mt-2">Delete<i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </thead>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>