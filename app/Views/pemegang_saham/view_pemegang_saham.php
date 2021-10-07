<?= $this->extend('layout/template/sb-admin'); ?>

<!-- content -->
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pemegang Saham</h1>
    <p class="mb-4">Halaman ini menampilkan daftar pemegang saham perusahaan LETMI</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemegang Saham</h6>
            <a href="" class="btn btn-primary mt-3">Tambah <i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>NPWP</th>
                            <th>Alamat</th>
                            <th>Lembar Saham</th>
                            <th>Jumlah Saham</th>
                            <th>Persentase</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>071401001</td>
                            <td>Ridayanti</td>
                            <td>20</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>
                                <button class="btn btn-warning mt-2">Edit <i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger mt-2">Delete <i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </thead>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>