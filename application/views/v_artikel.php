<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css?v=1.1">
  <title>Artikel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<div class="card text-center">
        <?php
          $no = 1;
          foreach($artikel as $ar){
        ?>    
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $ar->judul_artikel ?></h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Lihat Artikel</a>
  </div>
  <div class="card-footer text-muted">
    <?php echo $ar->waktu_artikel ?>
  </div><?php } ?>
</div>
</body>
</html>