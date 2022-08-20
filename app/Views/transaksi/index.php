<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>Transaksi</h1>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Barang</th>
            <th>Pembeli</th>
            <th>Alamat</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- get id -> session -> id = filter di transaksi -->

        <?php

        use App\Controllers\Transaksi;


        foreach ($model as $index => $transaksi) : ?>

            <tr>
                <td><?= $transaksi->id ?></td>
                <td><?= $transaksi->id_barang ?></td>
                <td><?= $transaksi->id_pembeli ?></td>
                <td><?= $transaksi->alamat ?></td>
                <td><?= $transaksi->jumlah ?></td>
                <td><?= $transaksi->total_harga ?></td>
                <td>
                    <?php if (session()->get('role') != 0) : ?>

                        <a href="<?= site_url('transaksi/view/' . $transaksi->id) ?>" class="btn btn-outline-info">view </a>

                    <?php else : ?>

                        <a href="<?= site_url('transaksi/view/' . $transaksi->id) ?>" class=" btn btn-secondary">view </a>
                        <a href="<?= site_url('transaksi/invoice/' . $transaksi->id) ?>" class="btn btn-outline-info">invoice </a>
                        <a href="<?= site_url('transaksi/delete/' . $transaksi->id) ?>" class="btn btn-info">Delete</a>
                    <?php endif ?>
                </td>
            </tr>

        <?php endforeach ?>
    </tbody>




</table>

<?= $this->endSection() ?>