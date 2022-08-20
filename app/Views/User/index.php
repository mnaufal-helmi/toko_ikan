<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>User</h1>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Username</th>
        <th>created Date</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach ($data['users'] as $index => $user) : ?>

            <tr>
                <td><?= $user->id ?></td>
                <td> <?= $user->username ?></td>
                <td><?= $user->created_date ?></td>


                <td>

                   
                    <a href="<?= site_url('user/delete/' . $user->id) ?>" class="btn btn-outline-info">Delete</a>
                   
                </td>

            </tr>

        <?php endforeach  ?>

    </tbody>
</table>
<div style="float:right">
    <?= $data['pager']->links('default', 'custom_pagination') ?>
</div>
<?= $this->endSection() ?>
