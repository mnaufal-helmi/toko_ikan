<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->

  <title>Toko Ikan</title>
  <!-- 
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/"> -->

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('bootstrap-4.0.0/dist/css/bootstrap.min.css')  ?>" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Joan&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <!-- <link href="starter-template.css" rel="stylesheet"> -->
  <style>
    body {
      padding-top: 5rem;
    }

    .starter-template {
      padding: 3rem 1.5rem;
      text-align: center;
    }
  </style>
</head>

<body>

  <?= $this->include('navbar') ?>
  <main role="main" class="container">
    <?= $this->renderSection('content') ?>



  </main><!-- /.container -->

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

  <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
  <script src="<?= base_url('jquery-3.6.0.min.js') ?>"></script>
  <script src="<?= base_url('bootstrap-4.0.0/dist/js/bootstrap.min.js') ?>"></script>

  <?= $this->renderSection('script') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>