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
    	<h2 class="text-center">Tambah Banner</h2>
    	<br>
    	<form>
		  <div class="form-group row">
		    <label for="nama_banner" class="col-sm-2 col-form-label">ID Carousel</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="id_carousel">
		    </div>
		  </div>
		  <br>
		  <div class="form-group row">
		  	<label class="col-sm-2 col-form-label">Pilih File</label>
		  	<div class="col-sm-10">
			  <input type="file" name="gambar_carousel" id="input-file-now-custom-1" class="dropify">
			</div>
		  </div>
		  <br>
		  <div class="form-group row">
		    <div class="col-sm-12">
		    	<br>
		      <button type="submit" class="btn btn-success float-right">Simpan</button>
		      <a href="<?= base_url(); ?>admin_dok"><button type="button" class="btn btn-danger float-right">Batalkan</button></a>
		    </div>
		  </div>
		</form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>