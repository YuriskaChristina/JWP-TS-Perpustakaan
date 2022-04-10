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
  <h3>Edit Data</h3>
  </div>
  <div class="card-body">
    <div class="row">
        <form action="<?php echo base_url('Koleksi/update')?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input value="<?php echo ($edit['judul']);?>" type="text" name="judul" class="form-control" id="judul">
                                </div>
                                <div class="mb-3">
                                    <label for="penulis" class="form-label">Penulis</label>
                                    <input value="<?php echo ($edit['penulis']);?>" type="text" name="penulis" class="form-control" id="penulis">
                                </div>
                                <div class="mb-3">
                                    <label for="penerbit" class="form-label">Penerbit</label>
                                    <input value="<?php echo ($edit['penerbit']);?>" type="text" name="penerbit" class="form-control" id="penerbit">
                                </div>
                                <div class="mb-3">
                                    <label for="cover" class="form-label">Cover</label>
                                    <input type="file" value="<?php echo ($edit['cover']);?>" name="cover" class="form-control" id="cover">
                                </div>
                                <input type="hidden" value="<?php echo ($edit['ID']);?>" name="ID">                             
                                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
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