<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <?php foreach ($model as $m) : ?>
            <div class="col-6 border-0">
                <br>
                <div class="card text-center border-1">
                    <div class="card-header">
                        <span class="text-info border-0"> <strong><?= $m->nama ?></strong></span>
                    </div>
                    <div class="card-body border-0">
                        <img class="img-thumbnail border-0" style="max-height : 200px" src="<?= base_url('uploads/' . $m->gambar) ?>" />
                        <h5 class="mt-3 text-info"><?= "Rp " . number_format($m->harga, 2, ',', '.') ?></h5>
                        <p class="text-info">Stok : <?= $m->stok ?></p>
                    </div>
                    <div class="card-footer border-0">
                        <a href="<?= site_url('etalase/beli/' . $m->id) ?>" style="width:100%" class="btn btn-info ">Pilih</a>
                    </div>
                </div>
            </div>

        <?php endforeach ?>
    </div>
</div>

<?= $this->endSection() ?>