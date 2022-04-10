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
        <div class="card mt-5">
        <div class="card-header">
        <h3>Peminjaman</h3>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <h4>Detail Peminjaman</h4>
            <table class="table table bordered table stripped">
                <tr>
                    <th>ID User</th>
                    <th>Nama</th>
                    <th>ID Buku</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
                </tr>
                    <?php foreach($pinjam as $row){ ?>
                        <tr>
                        <td><?php echo $row->IDuser?></td>
                        <td><?php echo $row->nama?></td>
                        <td><?php echo $row->IDbuku?></td>
                        <td><?php echo $row->judul?> <br>
                        <td><?php echo $row->tanggal?></td>
                        <td><?php echo $row->status?></td>
                </tr>
                <?php }?>
            </table>
            </blockquote>
        </div>
        </div>
        </div>
</body>
</html>