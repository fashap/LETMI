<?= $this->extend('layout/template/sb-admin'); ?>

<!-- content -->
<?= $this->section('content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tambah Kontrak</h1>
    <p class="mb-4">Silahkan Masukkan Data Dengan Benar!</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kontrak</h6>
        </div>
        <div class="card-body">
            <form>
                <h5>A. Pekerjaan</h5>
                <div class="form-group col-sm-6">
                    <label for="namaPaketPekerjaan">Nama Paket Pekerjaan</label>
                    <input type="text" class="form-control" id="namaPaketPekerjaan" name="namaPaketPekerjaan" placeholder="Masukkan Nama Paket Pekerjaan">
                </div>
                <div class="form-group col-sm-6">
                    <label for="ringkasanLingkupPekerjaan">Ringkasan Lingkup Pekerjaan</label>
                    <textarea type="text" class="form-control" id="ringkasanLingkupPekerjaan" name="ringkasanLingkupPekerjaan" placeholder="Masukkan Ringkasan Lingkup Pekerjaan"></textarea>
                </div>
                <div class="mt-4">
                    <h5>B. Pemberi Pekerjaan</h5>
                    <div class="form-group col-sm-6">
                        <label for="nama">Nama Pemberi Pekerjaan</label>
                        <input type="text" class="form-control" id="namaPemberiPekerjaan" name="namaPemberiPekerjaan" placeholder="Masukkan Nama Pemberi Pekerjaan">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="kota">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukkan Kota Pemberi Pekerjaan">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Pemberi Pekerjaan">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="noTelp">No Telfon</label>
                        <input type="text" class="form-control" id="noTelp" name="noTelp" placeholder="Masukkan No Telfon Pemberi Pekerjaan">
                    </div>
                </div>
                <div class="mt-4">
                    <h5>C. Kontrak</h5>
                    <div class="form-group col-sm-6">
                        <label for="noKontrak">No Kontrak</label>
                        <input type="text" class="form-control" id="noKontrak" name="noKontrak" placeholder="Masukkan No Kontrak">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Pilih Tanggal">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="nilai">Nilai</label>
                        <input type="text" class="form-control" id="nilai" name="nilai" placeholder="Masukkan Nilai">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="BASerahterima">BA Serah Terima</label>
                        <input type="date" class="form-control" id="BASerahterima" placeholder="">
                    </div>
                    <div class="mt-4">
                        <h5>D. Detail Pekerjaan</h5>
                        <div class="form-group col-sm-6">
                            <label for="penyedia">Penyedia</label>
                            <input type="text" class="form-control" id="penyedia" name="penyedia" placeholder="Masukkan Penyedia">
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h5>E. Tenaga Ahli</h5>
                    <div class="form-group col-sm-6">
                        <label for="tenagaAhli">Tenaga Ahli</label>
                        <input type="text" class="form-control" id="penyedia" name="penyedia" placeholder="Masukkan No Kontrak">
                    </div>
                </div>
            </form>
            <a href="" class="btn btn-primary mt-3">Simpan <i class="fas fa-save"></i></a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>