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
      <br>
    </nav>

    <div class="container">
    	<h2 class="text-center">Tambah Artikel</h2>
    	<br>
    	<?php echo form_open_multipart('c_tbartikel/tambah');?>
		  <div class="form-group row">
		    <label for="nama_banner" class="col-sm-2 col-form-label">Id Artikel</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nama_banner" name="id_artikel">
		    </div>
		  </div>
		  <br>
		  <div class="form-group row">
		    <label for="nama_banner" class="col-sm-2 col-form-label">Judul Artikel</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nama_banner" name="judul_artikel">
		    </div>
		  </div>
		  <br>
		  <div class="form-group row">
		    <label for="nama_banner" class="col-sm-2 col-form-label">Waktu Artikel</label>
		    <div class="col-sm-10">
		      <input type="date" class="form-control" id="nama_banner" name="waktu_artikel">
		    </div>
		  </div>		  
		<br>		  
		  <div class="form-group row">
		    <label for="nama_banner" class="col-sm-2 col-form-label">Isi Artikel</label>
		    <div class="col-sm-10">
		      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_artikel"></textarea>
		    </div>
		  </div>  <br> 
		  <br>
		  		  <div class="form-group row">
		  	<label class="col-sm-2 col-form-label">Pilih File</label>
		  	<div class="col-sm-10">
			  <?php echo form_upload('gambar_artikel'); ?>
			</div>
		  </div>
		  <div class="form-group row">
		    <div class="col-sm-12">
		    	<br>
		      <button type="submit" class="btn btn-success float-right">Simpan</button>
		      <a href="<?= base_url('c_admartikel'); ?>"><button type="button" class="btn btn-danger float-right">Batalkan</button></a>
		    </div>
		  </div><br>		  
		<?php echo form_close();?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>