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
        <div class="row">
        <div class="col-12">
            <?php if ($this->session->flashdata('msg') != '') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
        <div class="card mt-5">
        <div class="card-header">
        <h3>User</h3>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <h4>Tabel User</h4>
            <a href="User/add" class="btn btn-success">Tambah User</a>
            <table class="table table bordered table stripped">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th style="width:25%">Aksi</th>
                </tr>

                <?php foreach ($list as $item){?>
                <tr>
                    <td><?php echo $item->ID?></td>
                    <td><?php echo $item->nama?></td>
                    <td><?php echo $item->email?></td>
                    <td>
                    <a href="User/detail/<?php echo $item->ID?>" type="button" class="btn btn-info">Detail</a>
                    <a href="User/edit/<?php echo $item->ID?>" type="button" class="btn btn-warning">Edit</a>
                    <a onclick="konfirmasi(<?php echo $item->ID?>)" type="button" class="btn btn-danger">Hapus</a>
                </td>
                </tr>
                <?php }?>
            </table>
            </blockquote>
        </div>
        </div>
        </div>
        <script>
            function konfirmasi(id){
                let text = "Apakah Anda yakin akan menghapus data?";
                if (confirm(text)==true){
                    window.location.href = "user/delete/"+id;
                }

            }
        </script>
</body>
</html>