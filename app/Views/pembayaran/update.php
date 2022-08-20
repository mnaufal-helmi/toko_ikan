<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
$nama = [
    'name' => 'nama',
    'id' => 'nama',
    'value' => null,
    'class' => 'form-control',
];

$gambar = [
    'name' => 'gambar',
    'id'  => 'gambar',
    'value' => null,
    'class' => 'form-control',
];

$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Submit',
    'class' => 'btn btn-info',
    'type' => 'submit',
];
?>

<h1>Update barang</h1>
<?= form_open_multipart('Pembayaran/update/' . $pembayaran->id) ?>
<div class="form-group">
    <?= form_label("Nama", "nama") ?>
    <?= form_input($nama) ?>
</div>

<img class="img-fluid" alt="image" src="<?= base_url('uploads/' . $pembayaran->gambar) ?>" />

<div class="form-group">
    <?= form_label("Gambar", "gambar") ?>
    <?= form_upload($gambar) ?>
</div>
<div class="text-right">
    <?= form_submit($submit) ?>

</div>


<?= form_close() ?>
<?= $this->endSection() ?>