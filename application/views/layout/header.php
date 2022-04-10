<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
  <img src="<?= base_url('assets/image/logo.png');?>" width="120" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= base_url('dashboard');?>">Dashboard</a>
      <a class="nav-item nav-link active" href="<?= base_url('koleksi');?>">Koleksi</a>
      <a class="nav-item nav-link active" href="<?= base_url('pinjam');?>">Peminjaman</a>
      <a class="nav-item nav-link active" href="<?= base_url('user');?>">User</a>
      <a class="nav-item nav-link active" href="<?= base_url('about');?>">About</a>
      <a class="nav-item nav-link active" href="<?= base_url('login/logout');?>">Logout</a>
    </div>
  </div>
</nav>
