<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>View Barang</h1>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <img class="img-fluid" alt="image" src="<?= base_url('uploads/' . $barang->gambar) ?>" />

                </div>

            </div>

        </div>
        <div class="col-6">
            <h1 class="text-info"><?= $barang->nama ?></h1>
            <h4>Harga : <?= $barang->harga ?></h4>
            <h4>stok : <?= $barang->stok ?> </h4>
            <br>
            <br>
            <a href="<?= site_url('Barang/create') ?>" class="btn btn-info">Tambah Barang lagi</a> <a href="<?= site_url('barang/index') ?>" class="btn btn-info">List Barang</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>