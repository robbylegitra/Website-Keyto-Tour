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
        <?php
          $no = 1;
          foreach($artikel as $ar){
        ?>       
      <h2 class="text-center"><?php echo $ar->judul_artikel ?></h2>
      <br>
      <div class="row">
        <div class="col-md-4">
          <img src="<?= base_url(); ?>uploads/<?php echo $ar->gambar_artikel; ?>" alt="..." style="max-width: 300px;">
        </div>
        <div class="col-md-8">
          <div class="isi-artikel">
          <p><?php echo $ar->isi_artikel ?></p>
          </div>
        </div>
      </div><?php } ?>  
    </div>

 <!-- Footer --></div><br>
    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4">

            <!-- BAGIAN MAP -->
      <div class="container">
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
            <p><a href="" class="text-white" style="text-decoration: none;">Jln. KH Ahmad Dahlan no. 18, Pahoman</a></p>
            </div>
          <div class="col">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contacts</h5>
            <p><i class="fas fa-home mr-3"></i> Bandar Lampung, Indonesia</p>
            <p class="text-white"><a href="('wa.me/6282184016785')"><i style="font-size:30px;" class="fab fa-whatsapp mr-3"></i></a>
              <a href="https://www.facebook.com/keytotours.lampung"><i style="text-indent: 5px; font-size:30px" class="fab fa-facebook-f mr-3"></i></a>
              <a href="<https://www.instagram.com/keyto.tourtravel/?"><i style="text-indent: 5px; font-size:30px" class="fab fa-instagram" aria-hidden="true"></i></a>
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
  <!-- Footer End -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>
</html>