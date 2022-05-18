<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php

use Kint\Zval\Value;

use function PHPSTORM_META\type;

$id_barang = [
    'name' => 'id_barang',
    'id' => 'id_barang',
    'value' => $model->id,
    'type' => 'hidden'
];
$id_pembeli = [
    'name' => 'id_pembeli',
    'id'   => 'id_pembeli',
    'value' => session()->get('id'),
    'type' => 'hidden'
];
$jumlah = [
    'name' => 'jumlah',
    'id'   => 'jumlah',
    'value' => 1,
    'min' => 1,
    'class' => 'form-control',
    'type' => 'number',
    'max' => $model->stok,
];
$total_harga = [
    'name' => 'total_harga',
    'id' => 'total_harga',
    'value' => null,
    'class' => 'form-control',
    'readonly' => true,
];
$ongkir = [
    'name' => 'ongkir',
    'id' => 'ongkir',
    'value' => null,
    'class' => 'form-control',
    'readonly' => true,
];
$alamat = [
    'name' => 'alamat',
    'id' => 'alamat',
    'class' => 'form-control',
    'value' => null,
];
$submit = [
    'name' => 'submit',
    'id' => 'Submit',
    'type' => 'submit',
    'value' => 'Beli',
    'class' => 'btn btn-success',
];
?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <img class="img-fluid" src="<?= base_url('uplods/' . $model->gambar) ?>">
                    <h1 class="text-success"><?= $model->nama ?></h1>
                    <h4> Harga : <?= $model->harga ?></h4>
                    <h4> Stok : <?= $model->stok ?></h4>
                </div>
            </div>
        </div>
        <div class="col-6">
            <?= form_open('Etalase/beli') ?>
            <?= form_input($id_barang) ?>
            <?= form_input($id_pembeli) ?>
            <div class="form-group">
                <?= form_label('Jumlah Pembelian', 'jumlah') ?>
                <?= form_input($jumlah) ?>
            </div>
            <div class="form-group">
                <?= form_label('Ongkir', 'ongkir') ?>
                <?= form_input($ongkir) ?>
            </div>
            <div class="form-group">
                <?= form_label('Total harga', 'harga') ?>
                <?= form_input($ongkir) ?>
            </div>
            <div class="form-group">
                <?= form_label('Alamat', 'alamat') ?>
                <?= form_input($ongkir) ?>
            </div>
            <div class="text-right">
                <?= form_submit($submit) ?>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>















<?= $this->endSection() ?>