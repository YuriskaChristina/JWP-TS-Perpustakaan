<?php $this->load->view('layout/header.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
<div class="container">
<div class="card mt-5">
  <div class="card-header">
  <h3>Peminjaman</h3>
  </div>
  <div class="card-body">
    <div class="row">
        <form action="<?php echo base_url('Pinjam/add_pinjam')?>" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="IDuser" class="form-label">ID User</label>
                                    <input value="<?php echo $this->session->userdata('ID')?>" type="text" name="IDuser" class="form-control" id="IDuser">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input value="<?php echo $this->session->userdata('nama')?>" type="text" name="nama" class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="IDbuku" class="form-label">ID Buku</label>
                                    <input type="text" name="IDbuku" class="form-control" id="IDbuku" value="<?php echo $koleksi->ID?>">
                                </div>
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" name="judul" class="form-control" value="<?php echo $koleksi->judul?>" id="judul">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal Peminjaman</label>
                                    <input type="date" name="tanggal" class="form-control" id="tanggal">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status Peminjaman</label>
                                    <input type="text" name="status" class="form-control" id="status" list="suggestions">
                                    <datalist id="suggestions">
                                        <select class="form-control">
                                        <option selected="0">Masa Peminjaman</option>
                                    </select>
                                    </datalist>
                                </div>
                                <button type="submit" class="btn btn-primary">Pinjam Buku</button>
        </form>
        </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php $this->load->view('layout/footer.php'); ?>