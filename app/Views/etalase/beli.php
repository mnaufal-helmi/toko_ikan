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
    'class' => 'btn btn-info',
];
?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <img class="img-fluid" src="<?= base_url('uploads/' . $model->gambar) ?>">
                    <h1 class="text-success, text-info"><?= $model->nama ?></h1>
                    <h4 class=""> Harga : <?= $model->harga ?></h4>
                    <h4> Stok : <?= $model->stok ?></h4>
                </div>
            </div>
        </div>
        <div class="col-6">
            <h4>Pengiriman</h4>
            <div class="form-group">
                <label for="provinsi">Pilih provinsi</label>
                <select class="form-control" id=" provinsi">
                    <option> select Provinsi</option>
                    <?php foreach ($provinsi as $p) : ?>
                        <option value="<?= $p->province_id ?>"> <?= $p->province ?> </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="kabupaten">Pilih Kabupaten/kota</label>
                <select class="form-control"" id=" kabupaten">
                    <option> select Kabupaten/kota</option>
                </select>
            </div>
            <div class="form-group">
                <label for="service">Pilih service</label>
                <select class="form-control"" id=" service">
                    <option> select service</option>
                </select>
            </div>

            <strong> Estimasi : <span id="estimasi"></span></strong>
            <hr>
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
<?= $this->section('script') ?>
<script>
    $('document').ready(function() {
        $("#provinsi").on('change', function() {
            $("#kabupaten").empty();
            var id_province = $(this).val();

            $.ajax({
                url: "<?= site_url('etalase/getCity') ?>",
                type: 'GET',
                data: {
                    'id_province': id_province,
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    var results = data["rajaongkir"]["results"];
                    for (var i = 0; i < results.length; i++) {
                        $("#kabupaten").append($('<option>', {
                            value: results[i]["city_id"],
                            text: results[i]['city_name']
                        }));
                    }
                },
            });
        });
    });
</script>
<?= $this->endSection() ?>