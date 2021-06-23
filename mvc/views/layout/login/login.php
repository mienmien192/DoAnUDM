<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo URL_ADMIN; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo URL_ADMIN; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo URL_ADMIN; ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
  <style>
    .login-page{
      background: url(../DOANUDM/public/layout/img/banner/banner5.jpg);
      background-size:cover;

    }
    
    .login-card-body{
      background: rgba(255, 255, 255, .5);
      border-radius: 10px;
    }
    .login-logo b{
        font-weight: bold;
        color: #000;
        font-family: 'Sacramento', cursive; 
        font-size: 40px;
    }
    
    .mb-0 b{
        color: green;
   }
  </style>
</head>
<body class="login-page">
	<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Adela Cosmetic Xin chào</b></a>
  </div>
  <!-- /.login-logo -->
 
    <div class="card-body login-card-body">
      <p class="login-box-msg" style="color: red">
      	<?php 
      	if(isset($_SESSION['thongbao'])){
      		echo $_SESSION['thongbao'];
      		unset($_SESSION['thongbao']);
      	} ?>
      </p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="password" name ="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-warning " name="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->
        <?php 
        if (isset($_GET["newpwd"])) {
          if ($_GET["newpwd"] == "passwordupdated") {
            echo '<p > Your password has been </p>';
          }
        }
        ?>
      <p class="mb-1">
        <a href="reset-password.php" style="color: #000"  >Quên mật khẩu? </a>
      </p>
      <p class="mb-0">
        <a href="register" style="color: #000" class="text-center">Chưa có tài khoản? <b>Đăng ký ngay</b></a>
      </p>
    
    <!-- /.login-card-body -->
  </div>
</div>
</body>
</html>