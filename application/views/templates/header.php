<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?= base_url(); ?>assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/JS/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <title><?php echo $judul ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <img src="<?php echo base_url() ?>/assets/icon/bioskop.png" alt="" width="60">
    <a class="navbar-brand" href="#">Bioskop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item d-flex justify-content-center">
            <img src="<?php echo base_url() ?>/assets/icon/11.png" alt="" width="80">
          <a class="nav-link active" aria-current="page" href="<?= base_url('home/index'); ?>">Home</a>
        </li>
        <li class="nav-item d-flex justify-content-center">
            <img src="<?php echo base_url() ?>/assets/icon/12.png" alt="" width="45">
          <a class="nav-link active" aria-current="page" href="<?= base_url('now/index'); ?>">Now Playing</a>
        </li>
        

        <li class="nav-item d-flex justify-content-center">
        <img src="<?php echo base_url() ?>/assets/icon/up.png" alt="" width="45">
          <a class="nav-link active" href="<?= base_url('nowplay/index'); ?>">Input Now Playing</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>