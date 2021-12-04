<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- CSS Page Home -->
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

    <title>Keyto Tour & Travel</title>

  </head>

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
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url('c_tentangkami'); ?>">Tentang Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- Navbar End -->
  


  <!-- Carousel -->      
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/image/haha.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4">Keyto Tours & Travel</h1>
              <p class="lead">Not Just a Travel</p>
              <hr class="my-4">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <a class="btn btn-primary btn-lg" href="<?= base_url('c_tentangkami'); ?>" role="button">Selengkapnya</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/image/pic1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/image/pic2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/image/pic1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/image/pic2.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
  <!-- Carousel End -->
  


  <!-- Jumbotron statis -->
    <div class="container bg-light text-center mt-5">
      <div class="row">
        <div class="col">
          <h1>Kenapa Harus Keyto?</h1>
        </div>
      </div>
      <div class="row" style="text-align: justify;">
        <div class="col-md">
          <img src="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md">
          <img src="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col">
          <img src="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  <!-- Jumbotron End -->



  <!-- Card Group Paket -->
    <div class="container mt-5">
      <div class="row mb-2">
        <div class="col text-center mb-2"><h3>Rekomendasi Paket Perjalanan</h3></div>
      </div>   
      <div class="row mb-4">
        <?php
          $no = 1;
          foreach($paket_tour as $pt){
        ?>                 
        <div class="col-md-3">          
            <div class="card" style="width: 14rem;">
            <img src="<?= base_url(); ?>uploads/<?php echo $pt->foto_paket; ?>" class="card-img-top" alt="..." width = 259 height = 180>
            <div class="card-body">
              <p class="card-text"><?php echo $pt->label_paket ?></p>
            </div>
          </div>
        </div> <?php } ?>                              
    </div>
    <a class="btn btn-primary btn-lg text-white mb-2 ms-auto" href="<?= base_url('page_tour'); ?>" role="button">Selengkapnya</a>
</div>

  <!-- Paket End -->


  <!-- Card Group Artikel-->

    <div class="container mt-5">
      <div class="row mb-2">
        <div class="col text-center mb-2"><h3>Artikel Pilihan</h3></div>
      </div>
      <div class="row mb-4">
                   <?php
          $no = 1;
          foreach($artikel as $ar){
        ?>               
        <div class="col-md-3">
            <div class="card" style="width: 14rem;">
            <img src="<?= base_url(); ?>uploads/<?php echo $ar->gambar_artikel; ?>" class="card-img-top" alt="..." width = 259 height = 180>
            <div class="card-body">
              <p class="card-text"><?php echo $ar->judul_artikel ?></p>
            </div>
          </div>
        </div><?php } ?> 
    </div>
    <a class="btn btn-primary btn-lg text-white mb-2" href="<?= base_url('c_artikel'); ?>" role="button">Selengkapnya</a>                               
</div>
  <!-- Artikel End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
  </body>

<!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4">

            <!-- BAGIAN MAP -->
      <div class="container-fluid">
        <div class="row align-items-start">
          <div class="col">
            <div class="mapouter">
                <div class="gmap_canvas">
                  <iframe width="280" height="180" id="gmap_canvas" src="https://maps.google.com/maps?q=keyto%20tour&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                  </iframe>
                  <br>
                  <style>.mapouter{position:relative;text-align:right;height:200px;width:300px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:300px;}
                  </style>
                </div>
              </div>
          </div>
          <div class="col">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Keyto Tours & Travel</h5>
            <p><a href="" class="text-white" style="text-decoration: none;">Jln. KH Ahmad Dahlan no. 18, Tanjung Karang Timur</a></p>
            </div>
          <div class="col">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contacts</h5>
            <p><i class="fas fa-home mr-3"></i> Bandar Lampung, Indonesia</p>
            <p style="font-size: 30px;"><a href="https://wa.me/6282184016785"><i class="fab fa-whatsapp mr-3"></i></a>
              <a href="https://www.facebook.com/keytotours.lampung"><i class="fab fa-facebook-f mr-3"></i></a>
              <a href="https://www.instagram.com/keyto.tourtravel/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            </p>
            <p><a href=""><i class="fas fa-envelope mr-3"></i></a> mail@mail.com </p>
          </div>
        </div>
      </div>
      <hr class="mb-4">
      <div class="row text-center">
        <p>Copyright @2021 All right reserved</p>
      </div>
    </footer>

</html>