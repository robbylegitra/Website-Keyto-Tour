<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login Admin</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style_login.css'); ?>">
</head>
<body>
 <div class="main">
    <p class="sign" align="center">Login Admin</p>
    <form class="form1" action="<?= base_url('c_login/aksi_login'); ?>" method = "post">
      <input class="un " type="text" align="center" placeholder="Username" name="username_admin">
      <input class="pass" type="password" align="center" placeholder="Password" name="password_admin">
      <input type="submit" class="submit" align="center"></a>                
    </div>
  </form>
</body>
</html>