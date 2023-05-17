<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
            <h5 class="card-header">Detail Data Mahasiswa</h5>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['Nama'];?></h5>
                    <p class="card-text"><?= $mahasiswa['Nrp'];?></p>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['Email'];?></h6>
                    <p class="card-text"><?= $mahasiswa['Jurusan'];?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>