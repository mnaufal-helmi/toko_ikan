<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>View konfirmasi Pembayaran </h1>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <img class="img-fluid" alt="image" src="<?= base_url('uploads/' . $pembayaran->gambar) ?>" />

                </div>

            </div>

        </div>
        <div class="col-6">
            <h1 class="text-info"><?= $pembayaran->nama ?></h1>
            <br>
            <br>
            <a href="<?= site_url('pembayaran/index') ?>" class="btn btn-info">List konfirmasi</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>