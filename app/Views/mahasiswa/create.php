<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="row mb-3">
    <a href="/mahasiswa" class="text-reset fs-6 d-flex align-items-center">
        <ion-icon name="chevron-back-outline" class="me-1"></ion-icon>
        Back
    </a>
</div>
<form action="/store" method="post">
    <div class="row">
        <div class="col-6">
            <div class="row mb-3">
                <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                <div class="col-sm-8">
                    <input type="text" name="npm" class="form-control" id="npm" autofocus>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-8">
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <input type="text" name="alamat" class="form-control" id="alamat">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-8">
                    <textarea name="deskripsi" class="form-control" id="deskripsi"></textarea>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?= $this->endSection() ?>