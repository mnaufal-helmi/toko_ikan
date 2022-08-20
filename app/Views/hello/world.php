<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<h4 style="font-family: 'Joan', serif">Selamat Datang di Toko Bratayudha Aquarium </h4>
<h4>
    <?php

    echo session()->get('username');

    ?>

</h4>


<?= $this->endSection() ?>