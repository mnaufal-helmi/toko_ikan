<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>barang</h1>
<table class="table">
    <thead>
        <th>No</th>
        <th>Barang</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>stok</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach ($barangs as $index => $barang) : ?>
            <tr>
                <td><?= ($index + 1) ?></td>
                <td><?= $barang->nama ?> </td>
                <td>
                    <img class="img-fluid" width="200px" alt="gambar" src="<?= base_url('uploads/' . $barang->gambar) ?>" />
                </td>
                <td><?= $barang->harga ?></td>
                <td><?= $barang->stok ?></td>
                <td>
                    <a href="<?= site_url('barang/view/' . $barang->id) ?>" class="btn btn-primary">View</a>
                    <a href="<?= site_url('barang/update/' . $barang->id) ?>" class="btn btn-succsess">Update</a>
                    <a href="<?= site_url('barang/delete/' . $barang->id) ?>" class="btn btn-danger">Delete</a>

                </td>
            </tr>
        <?php endforeach  ?>
    </tbody>
</table>
<?= $this->endSection() ?>