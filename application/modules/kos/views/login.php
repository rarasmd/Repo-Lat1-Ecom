<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="<?=base_url('assets/')?>style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <div class="login">

          <h2>Login</h2>
          <form action="<?=base_url('kos/auth/login')?>" method="POST">
          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="email" placeholder="Email" name="email" require>
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" require>
          </div>

          <button type="submit" name="login" class="btn-login">Login</button>
          </form>
          
          <div class="bottom">
            <a href="#">Register</a>
            <a href="#">Lupa Password</a>
          </div>
      </div>
  </head>
  </html>