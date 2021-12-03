<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

      <style type="text/css">
      /*Style Jumbotron*/
      .jumbotron {
        background-image: url(pic2.jpg);
        background-size: cover;
        height: 400px;
        text-align: center;
      }
      .jumbotron .display-4 {
        color: white;
        padding-top: 60px;
        font-weight: bold;
      }
      .jumbotron p {
        color: white;
      }

      /*Style Carousel*/
      .carousel-item {
        height: 500px;
      }
      .carousel-item .display-4 {
        margin-top: -350px;
      }

      .mapalign {
        align-content: left;
      }
    </style>  

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-sm" id="mainNav">
      <div class="container">
        <img src="<?= base_url('assets/image/logo.PNG'); ?>" alt="" width="30" height="24">
        <a class="navbar-brand ml-3" href="#">Keyto Tour & Travel</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse mr-1 " id="navbarNav">
          <ul class="navbar-nav ms-auto"> 
            <li class="nav-item active font-weight-bold text-white">
              <a href="<?= base_url('c_home'); ?>" class="btn btn-warning fw-bold text-white">Beranda</a>
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
                <li><a class="dropdown-item" href="#">Something else here</a></li>
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
  <!-- Artikel Card -->
  <h2 class="mb-4 mt-2 text-center">Artikel</h2>
      <?php
          $no = 1;
          foreach($artikel as $ar){
        ?>
  <div class="container"> 
   <div class="card m-3 no-gutters justify-content-center" style="max-width: 800px;">
      <div class="row g-0">
        <div class="col-md-3">
          <img src="<?= base_url(); ?>uploads/<?php echo $ar->gambar_artikel; ?>" class="img-fluid rounded-start" style="max-width: 200px;" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $ar->judul_artikel ?></h5>
            <p class="card-text"><small class="text-muted"><?php echo $ar->waktu_artikel ?></small></p>
          </div>
          <a href="<?= base_url('c_artikel/detail/'.$ar->id_artikel);?>" class='btn btn-primary'>Lihat Artikel</a>
        </div>
      </div>
    </div>
  </div><?php } ?>
    <!-- Card End -->

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
                  <style>.mapouter{position:relative;text-align:right;height:200px;width:300px;}</style><a href="https://www.embedgooglemap.net">how to add map to website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:300px;}
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

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>
</html>