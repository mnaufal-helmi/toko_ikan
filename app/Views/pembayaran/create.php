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
    'id' => 'gambar',
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

<h1> Upload konfirmasi pembayaran </h1>
<?= form_open_multipart('Pembayaran/create') ?>
<div class="form-group">
    <?= form_label("Nama Dompet Digital", "nama") ?>
    <?= form_input($nama) ?>
</div>


<div class="form-group">
    <?= form_label("Gambar", "gambar") ?>
    <?= form_upload($gambar) ?>
</div>
<div class="text-right">
    <?= form_submit($submit) ?>
</div>


<?= form_close() ?>
<?= $this->EndSection() ?>