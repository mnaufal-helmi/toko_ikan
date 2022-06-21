<?php
$session = session();
?>
<nav class="navbar navbar-expand-md navbar-dark  bg-info fixed-top">
  <a class="navbar-brand" href="C:\xampp\htdocs\landing-page\index.html">Bratayudha Fish</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <?php if ($session->get('isLoggedIn')) : ?>

      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= site_url('home/index') ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php if (session()->get('role') == 0) : ?>
          <li class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Barang
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="<?= site_url('barang/index') ?>">List Barang</a></li>
              <li><a class="dropdown-item" href="<?= site_url('barang/create') ?>">Tambah Barang</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('transaksi/index') ?>">Transaksi </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user/index') ?>"> User </a>
          </li>

          <!-- <li class="nav-item dropdo  wn">
          <a class="nav-link dropwdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Barang</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href=" site_url('barang/index') ?>">List Barang</a>
            <a class="dropdown-item" href=" site_url('barang/create') ?>">Tambah Barang</a>
          </div>
        </li> -->
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('etalase/index') ?>">Etalase </a>
          </li>
        <?php endif ?>
      </ul>
    <?php endif ?>
    <div class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <?php if ($session->get('isLoggedIn')) : ?>
          <li class="nav-item">
            <a class="btn btn-light" href="<?= site_url('auth/logout') ?>">Logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="btn btn-light" href="<?= site_url('auth/login') ?>">login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-light" href="<?= site_url('auth/register') ?>">Register</a>
          </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>