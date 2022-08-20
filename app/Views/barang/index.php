<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<div class="bg-light">
    <div class="">
        <div class="col-lg-12">
            <h1>Barang</h1>
            <table class="table" id="table1">
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
                                <a href="<?= site_url('barang/view/' . $barang->id) ?>" class="btn btn-secondary">View</a>
                                <a href="<?= site_url('barang/update/' . $barang->id) ?>" class="btn btn-outline-info">Update</a>
                                <a href="<?= site_url('barang/delete/' . $barang->id) ?>" class="btn btn-info">Delete</a>

                            </td>
                        </tr>
                    <?php endforeach  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#table1').DataTable();
    });
</script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
<?= $this->endSection() ?>