<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style type="text/css">
      .jumbotron {
        height: 250px;
        padding-top: 60px;
        text-align: center;
      }
    </style>

    <title>Keyto Tour & Travel - Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary">
      <a href="<?= base_url('c_login/logout'); ?>" class="text-right"><button class="btn btn-warning">Logout</button></a>
      <br>
    </nav>

    <div class="jumbotron jumbotsron-fluid bg-light">
      <div class="container">
        <h1 class="display-4">Keyto Tour & Travel</h1>
        <p class="lead">Sukses Berawal Dari Mimpi</p>
      </div>
    </div>



    <div class="container">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('c_admartikel'); ?>">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('c_admpakettour'); ?>">Paket Tour</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url('c_admgaleri'); ?>">Galeri</a>
            </li>
          </ul>
      <br>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama Foto</th>
            <th scope="col">Deskripsi Foto</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
          <?php
          $no = 1;
          foreach($galeri as $gl){
        ?>  
        <tbody>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><img src="<?= base_url(); ?>uploads/<?php echo $gl->foto_galeri; ?>" width="150" height="110"></td>
            <td><?php echo $gl->label_galeri ?></td>
            <td><?php echo $gl->tentang_galeri ?></td>
            <td><a href="<?=  base_url('c_tbgaleri/hapus/') . $gl->id_galeri; ?>" class="btn btn-small text-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><i class="fas fa-trash"></i> Hapus</a></td>                                                 
          </tr>
        </tbody><?php } ?>
      </table>
      <br>
       <a href="<?= base_url('c_tbgaleri'); ?>" class="text-right"><button class="btn btn-warning">Tambah Gambar</button></a>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>