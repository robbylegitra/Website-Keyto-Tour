<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <style type="text/css">
      .item {
        transition: .5% ease-in-out;
      }

      .item img{
        width: 175px;
        height: 175px;
        border-width: 1px;
        padding: 1px;
        border-style: dotted solid;
        border-color: black;

      }
      .item:hover {
        filter: brightness(80%);
      }
    </style>

    <title>Keyto Tour & Travel</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-sm" id="mainNav">
      <div class="container">
        <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
        <a class="navbar-brand ml-3" href="#">Keyto Tour & Travel</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse mr-1 " id="navbarNav">
          <ul class="navbar-nav ms-auto"> 
            <li class="nav-item active font-weight-bold text-white">
                <a href="<?= base_url('c_home'); ?>" class="btn btn-warning fw-bold text-white">Beranda</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url('page_tour'); ?>">Paket Tour</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Blog
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= base_url('c_artikel'); ?>">Artikel</a></li>
                <li><a class="dropdown-item" href="<?= base_url('c_galeri'); ?>">Galeri</a></li>
                <li><hr class="dropdown-divider"></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url('c_tentangkami'); ?>">Tentang Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav><br><br><br>
  <!-- Navbar End -->

    <div class="container">
    <h1 class="text-center mb-3">Galeri Perjalanan Keyto Tour & Travel</h1>      
      <div class="row mt-2">
        <?php
          $no = 1;
          foreach($galeri as $gl){
        ?>  
        <div class="item col-sm-6 col-md-2 mb-3">
          <a href="<?= base_url(); ?>uploads/<?php echo $gl->foto_galeri; ?>" class="fancybox" data-fancybox="gallery1">
            <img src="<?= base_url(); ?>uploads/<?php echo $gl->foto_galeri; ?>">
          </a>
        </div><?php } ?>
    </div>

 <!-- Footer --></div>
    <footer class="bg-dark text-white pt-5 pb-4">

            <!-- BAGIAN MAP -->
      <div class="container-fluid">
        <div class="row align-items-start">
          <div class="col">
            <div class="mapouter">
                <div class="gmap_canvas">
                  <iframe width="280" height="180" id="gmap_canvas" src="https://maps.google.com/maps?q=keyto%20tour&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                  </iframe>
                  <a href="https://fmovies-online.net"></a>
                  <br>
                  <style>.mapouter{position:relative;text-align:right;height:200px;width:300px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:300px;}
                  </style>
                </div>
              </div>
          </div>
          <div class="col">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Product</h5>
            <p><a href="" class="text-white" style="text-decoration: none;">Beranda</a></p>
            <p><a href="" class="text-white" style="text-decoration: none;">Paket Tour</a></p>
            <p><a href="" class="text-white" style="text-decoration: none;">Blog</a></p>
            <p><a href="" class="text-white" style="text-decoration: none;">Tentang Kami</a></p>
          </div>
          <div class="col">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful Links</h5>
            <p><a href="" class="text-white" style="text-decoration: none;">Beranda</a></p>
            <p><a href="" class="text-white" style="text-decoration: none;">Paket Tour</a></p>
            <p><a href="" class="text-white" style="text-decoration: none;">Blog</a></p>
            <p><a href="" class="text-white" style="text-decoration: none;">Tentang Kami</a></p>
          </div>
          <div class="col">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contacts</h5>
            <p><i class="fas fa-home mr-3"></i> Bandar Lampung, Indonesia</p>
            <p><i class="fas fa-phone mr-3"></i> +62 xxx xxx xxx</p>
            <p><i class="fas fa-envelope mr-3"></i> mail@mail.com</p>
            <p><i class="fa fa-whatsapp" aria-hidden="true"></i> +62 xxx xxx xxx</p>
          </div>
        </div>
      </div>
      <hr class="mb-4">
      <div class="row text-center">
        <p>Copyright @2021 All right reserved</p>
      </div>
    </footer>
  <!-- Footer End -->

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>