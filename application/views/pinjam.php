<?php $this->load->view('layout/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="<?= base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
        <div class="container">
        <!-- <div class="row">
        <div class="col-12">
            <?php if ($this->session->flashdata('pesan') != '') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?> -->
        <div class="card mt-5">
        <div class="card-header">
        <h3>Peminjaman</h3>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <h4>Daftar Koleksi</h4>
            <a href="Pinjam/detail" class="btn btn-success">Detail Peminjaman</a>
            <table class="table table bordered table stripped">
                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Cover</th>
                    <th style="width:25%">Aksi</th>
                </tr>
                </tr>
                    <?php foreach($koleksi as $row){ ?>
                        <tr>
                            <td><?php echo $row->ID?></td>
                            <td><?php echo $row->judul?></td>
                            <td><?php echo $row->penulis?></td>                                     
                            <td><img style="width:150px;"src="<?php echo base_url('/assets/image/cover/' . $row->cover);?>" /></td>                                      
                            <td>
                            <a href="http://localhost/perpustakaan/Pinjam/peminjaman?id=<?php echo htmlspecialchars($row->ID) ?>" type="button" class="btn btn-info">Pinjam Buku</a>
                            </td>                                      
                        </tr>
                    <?php }?>
                </table>
            </blockquote>
        </div>
        </div>
        </div>
</body>
</html>