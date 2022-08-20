<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>Transaksi</h1>
<table class="table">
    <thead>
        <th>No</th>
        <th>Nama Dompet Digital</th>
        <?php if (session()->get('role') != 1) : ?>
            <th>id user</th>
        <?php endif ?>
        <th>created </th>
        <th>update </th>
        <th>Gambar</th>
        <th>Aksi</th>
    </thead>

    <tbody>
        <!-- get id -> session -> id = filter di transaksi -->

        <?php

        use App\Controllers\Transaksi;


        foreach ($pembayarans as $index => $pembayaran) : ?>

            <tr>
                <td><?= ($index + 1) ?></td>
                <td><?= $pembayaran->nama ?> </td>

                <?php if (session()->get('role') != 1) : ?>
                    <td><?= $pembayaran->created_by ?> </td>
                <?php endif ?>

                <td><?= $pembayaran->created_date ?></td>
                <td> <?= $pembayaran->updated_date ?></td>
                <td>
                    <img class="img-fluid" width="200px" alt="gambar" src="<?= base_url('uploads/' . $pembayaran->gambar) ?>" />
                </td>
                <td>
                    <?php if (session()->get('role') != 0) : ?>

                        <a href="<?= site_url('pembayaran/view/' . $pembayaran->id) ?>" class="btn btn-outline-info">view </a>

                    <?php else : ?>

                        <a href="<?= site_url('pembayaran/view/' . $pembayaran->id) ?>" class=" btn btn-secondary">view </a>
                        <a href="<?= site_url('pembayaran/invoice/' . $pembayaran->id) ?>" class="btn btn-outline-info">invoice </a>
                        <a href="<?= site_url('pembayaran/delete/' . $pembayaran->id) ?>" class="btn btn-info">Delete</a>
                    <?php endif ?>
                </td>
            </tr>

        <?php endforeach ?>
    </tbody>




</table>
</div>
</div>
</div>

<?= $this->endSection() ?>