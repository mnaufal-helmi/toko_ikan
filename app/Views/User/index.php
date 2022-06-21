<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>barang</h1>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Username</th>
        <th>Created By</th>
        <th>created Date</th>
        <th>stok</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach ($data as $index => $user) : ?>
            <tr>
                <td><?= $user->id ?></td>
                <td> <?= $user->username ?></td> 
                <td><?= $user->created_by ?></td>
                <td><?= $user->created_date ?></td>
            </tr>
        <?php endforeach  ?>
    </tbody>
</table>
<?= $this->endSection() ?>