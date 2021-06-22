<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Register</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>   
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo URL_ADMIN; ?>plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo URL_ADMIN; ?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo URL_ADMIN; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo URL_ADMIN; ?>dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="<?php echo URL_ADMIN; ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
	*{
		padding: 2.5px;
        
	}
    body{
        background-image:url(.//public/layout/img/banner/register.jpg);
        background-size: cover;
    }
	.error {
        color: red;
        display: block;
        
        }
        .login .btn_login{
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
        .login .row{
            color: #fff;
        }
        .login .btn_login:hover{
            background: olivedrab;
            transition: 0.5s;
        }
        .login .register_ex{
            font-size: 24px;
            color: #fff;
        }
</style>
<body >
	<div class="content_register">
	
		<h1 class="register_account">ĐĂNG KÝ TÀI KHOẢN</h1>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form">
				<div class="page_login">
					<div class="login">
						<form name="register" id="register" method="POST">
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
									<input name="username" type="email" class="form-control form-control-lg" placeholder="Email">
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<label>Điện thoại:</label><br>
									<input name="phone" type="text" class="form-control form-control-lg" placeholder="Số điện thoại">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<label>Mật Khẩu:</label><br>
									<input id="password" name="password" type="password" class="form-control form-control-lg" placeholder="Mật khẩu">
								</div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<label>Nhập lại mật Khẩu:</label><br>
									<input name="cpassword" id="cpassword" type="password" class="form-control form-control-lg" placeholder="Xác nhận mật khẩu">
								</div>
							</div>
                            <div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<label>Địa chỉ:</label><br>
									<input name="diachi" id="diachi" type="text" class="form-control form-control-lg" placeholder="Địa chỉ">
								</div>
							</div>
							<button name="register" class="btn_login mb-2 mt-3" type="submit" value="Đăng ký">Đăng ký</button>
						</form>
						<div class="register_ex">
							<p class="login_here mt-2">Bạn đã có tài khoản, hãy Đăng nhập <a href="<?php echo URL.'login'; ?>" style="color:#ef7147; text-decoration: none;">tại đây</a></p>
        	                <p class="trangchu"><a href="<?php echo URL; ?>">Home</a><span style="color:#000!important;">/</span>Quay lại trang chủ </p>
                        </div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

    

    <script>
        $().ready(function () {
           $("#register").validate({
               onfocusout: false,
               onkeyup: false,
               onclick: false,
               rules: {
                    "ho": {
                       required: true,
                       minlength: 1
                   },"ten": {
                       required: true,
                       minlength: 1
                   },
                   "username": {
                       required: true,
                       email: true
                   },
                   "phone": {
                       required: true,
                       digits: true,
                       maxlength: 10,
                       minlength: 10,
                   },
                   "password": {
                       required: true,
                       minlength: 5
                   },
                   "diachi": {
                       required: true,
                       minlength: 5
                   },
                   "cpassword": {
                    required: true,
                       equalTo: "#password",
                       minlength: 5
                   }
               },
               messages: {
                   "ho": {
                       required: "Vui lòng nhập họ",
                       minlength: "Họ không có"
                   },"ten": {
                       required: "Vui lòng nhập tên",
                       minlength: "Tên không có"
                   },
                   "username": {
                       required: "Vui lòng nhập email",
                       email: "Vui lòng nhập đúng địa chỉ email"
                   },
                   "phone": {
                       required: "Vui lòng nhập số điện thoại",
                       digits: "Số máy quý khách vừa nhập không đúng",
                       maxlength: "Số máy quý khách vừa nhập không đúng",
                       minlength: "Số máy quý khách vừa nhập không đúng"
                   },
                   "password": {
                       required: "Vui lòng nhập password",
                       minlength: "Vui lòng nhập ít nhất 5 kí tự"
                   },
                   "diachi": {
                       required: "Vui lòng nhập địa chỉ",
                       minlength: "Vui lòng nhập đúng địa chỉ"
                   },
                   "cpassword": {
                    required: "Vui lòng nhập password ",
                       equalTo: "Mật khẩu không trùng",
                   }
               }
           });
       });
   </script>
</body>
</html>