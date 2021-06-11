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
    .login-box{
      
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
    .card{
      background: none;
    }
  </style>
</head>
<body class="login-page">
	<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Nhập mật khẩu mới</b></a>
    <p> Quên mật khẩu? Nhập địa chỉ email của bạn vào bên dưới và chúng tôi sẽ gửi email hướng dẫn để thiết lập một địa chỉ mới.</p>
    <form action="controllers/reset-request.inc.php" method="post">
        <input type="text" name="email" placeholder="Enter your email address">
        <button type="submit" name="reser-request-submit">Submit</button>
    </form>
    <?php 
        if (isset($_GET["reset"])){
            if($_GET["reset"] == "success"){
                echo '<p>Check your email address!</p>'
            }
        }
    ?>
</div>
</body>
</html>