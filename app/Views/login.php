<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<style>
    img {
        height: 350px;
        width: 350px;

    }
</style>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'form-control'
];
$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];
$session = session();
$errors = $session->getFlashdata('errors');
?>


<div class="text-center mb-10">
    <h3> welcome to our page shop</h3>
    <div>
        <span>B</span>
        <span>R</span>
        <span>A</span>
        <span>T</span>
        <span>A</span>
        <span>Y</span>
        <span>U</span>
        <span>D</span>
        <span>A</span>
        <div>
            <span>F</span>
            <span>I</span>
            <span>S</span>
            <span>H</span>
        </div>
    </div>
</div>
<br>
<br>
<div class="row">
    <div class="col-lg-6 justify-content-center">
        <img src="<?= base_url('/assets/images/uk4.png'); ?>" alt="">
    </div>
    <div class="col-lg-6 card shadow-sm p-3 mb-5 bg-body" style="width: 18rem;  border-radius:10px; box-shadow: 5px 10px #888888;">
        <div class="mb-auto mt-auto">
            <h3> Login Form</h3>


            <?php if ($errors != null) : ?>
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Terjadi kesalahan</h4>
                    <hr>
                    <p class="mb-0">
                        <?php
                        foreach ($errors as $err) {
                            echo $err . '<br>';
                        }
                        ?>
                    </p>
                </div>
            <?php endif ?>



            <?= form_open('Auth/login') ?>
            <div class="form-group">
                <?= form_label("Username", "username") ?>
                <?= form_input($username) ?>
            </div>
            <div class="form-group">
                <?= form_label("Password", "password") ?>
                <?= form_password($password) ?>
                <div>
                    <br>
                </div>
                <div class="text-right">
                    <?= form_submit('submit', 'Submit', ['class' => 'btn btn-info']) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= form_close() ?>
<?= $this->endSection() ?>