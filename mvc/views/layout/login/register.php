<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Register</title>
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
</head>
<body >
	<div class="content_register">
		<p class="trangchu"><a href="#">Home</a><span style="color:#000!important;">/</span> Đăng ký tài khoản</p>
		<h1 class="register_account">ĐĂNG KÝ TÀI KHOẢN</h1>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form">
				<div class="page_login">
					<div class="login">
						<form action=" <?php echo URL ?>Register/register " method="POST">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<label>Họ:</label><br>
									<input name="ho" type="text" class="form-control form-control-lg" placeholder="Họ">
								</div>

								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<label>Tên:</label><br>
									<input name="ten" type="text" class="form-control form-control-lg" placeholder="Tên">
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<label>Email:</label><br>
									<input name="email" type="text" class="form-control form-control-lg" placeholder="Email">
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<label>Điện thoại:</label><br>
									<input name="phone" type="text" class="form-control form-control-lg" placeholder="Số điện thoại">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<label>Mật Khẩu:</label><br>
									<input name="password" type="password" class="form-control form-control-lg" placeholder="Mật khẩu">
								</div>
							</div>
							<button name="register" class="btn_login mb-2 mt-3" type="submit" value="Đăng ký">Đăng ký</button>
						</form>
						<div class="register_ex">
							<p class="login_here mt-2">Bạn đã có tài khoản, hãy Đăng nhập <a href="" style="color:#ef7147; text-decoration: none;">tại đây</a></p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>