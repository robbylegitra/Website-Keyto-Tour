<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css?v=1.1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</head>

<body>
  <div id="wrapper">
    <header>
    <img class="logo_keyto_header" src="<?php echo base_url(); ?>assets/image/keyto_text.png">
      <hgroup>
        <img class="logo" src="<?php echo base_url(); ?>assets/image/logo.png">
      </hgroup>
      <nav>
        <ul>
          <li><a href="<?= base_url('c_home'); ?>">Beranda</a></li>
          <li><a href="<?= base_url('page_tour'); ?>">Paket Tour</a></li>
          <li><a href="<?= base_url('c_artikel'); ?>">Blog &#9662;</a>
          <ul class="sub1">
          <li><a href="<?= base_url('c_galeri'); ?>">Gallery</a>
                </ul></li>
          <li><a href="<?= base_url('c_tentangkami'); ?>">Tentang Kami</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </header>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
    <footer>
     <img class="logo_keyto" src="<?php echo base_url(); ?>assets/image/keyto_text.png">
      <!-- google maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.9873608010453!2d105.25118761425763!3d-5.418889596069829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da4541c476e3%3A0xaf066465d369d952!2sKantor%20PT.Keyto%20Tour%20and%20Travel!5e0!3m2!1sid!2sid!4v1631262910718!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <img class="logo_hp" src="<?php echo base_url(); ?>assets/image/log_hp.png">
                <div class="text_nohp">
                  +62 (0)6969 6969 69
                </div>
        <img class="logo_email" src="<?php echo base_url(); ?>assets/image/logo_email.png">
        <div class="text_email">inigmail@gmail.com</div>

        <div class="text_keyto">TENTENG PT. KEYTO TOUR &amp; TRAVEL LAMPUNG</div>
        <div class="text_tentangkami">&gt;   Tentang Kami</div>
        <div class="text_hubkami">&gt;   Hubungi Kami</div>
        <div class="text_faq">&gt;   F.A.Q</div>
        <div class="text_copyright">© Copyright - 14117177</div>

        <div class="text_followus">FOLLOW US</div>
        <img class="logo_fb" src="<?php echo base_url(); ?>assets/image/logo_fb.png">
        <img class="logo_twitter" src="<?php echo base_url(); ?>assets/image/logo_twitter.png">

    </footer>
  </div>
</body>

</html>