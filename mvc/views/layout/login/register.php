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
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link href="<?php echo URL_ADMIN; ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
	*{
		padding: 2.5px;
        
	}
    body{
        background: url(../DOANUDM/public/layout/img/banner/banner5.jpg);
        background-size: cover;
    }
	.error {
        color: red;
        display: block;
        
        }
        .login .row{
            color: #000;
        }

        .register_account{
            font-family: 'Sacramento', cursive;
            font-weight:bold;
            font-size: 50px;
        }
        .login-card-body{
      background: rgba(255, 255, 255, .5);
      border-radius: 10px;
      

    }
    .login-logo b{
        font-weight: bold;
        color: #000;
        font-family: 'Sacramento', cursive; 
        font-size: 38px;
    }

   .mb-0 b{
        color: green;
   }
   .login-box{
       margin-top: 40px;
   }
</style>
<body >
	<div class="content_register">
	
   
		<center><div class="login-box">
        <div class="login-logo">
    <a href="#"><b>Adela Cosmetic Xin chào</b></a>
         </div>
        <div class="card-body login-card-body">
        <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form">
				<div class="page_login">
					<div class="login">
						<form name="register" id="register" method="POST">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									 <input name="ho" type="text" class="form-control form-control-md" placeholder="Họ">
								</div>

								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
									<input name="ten" type="text" class="form-control form-control-md" placeholder="Tên">
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								
									<input name="username" type="email" class="form-control form-control-md" placeholder="Email">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
									<input name="phone" type="text" class="form-control form-control-md" placeholder="Số điện thoại">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
									<input id="password" name="password" type="password" class="form-control form-control-md" placeholder="Mật khẩu">
								</div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
									<input name="cpassword" id="cpassword" type="password" class="form-control form-control-md" placeholder="Xác nhận mật khẩu">
								</div>
							</div>
                            <div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
									<input name="diachi" id="diachi" type="text" class="form-control form-control-md" placeholder="Địa chỉ">
								</div>
							</div>
							<button name="register" class="btn btn-warning mb-2 mt-3" type="submit" value="Đăng ký">Đăng ký</button>

						</form>
						
                        <p class="mb-0">
                            <a href="<?php echo URL.'login'; ?>" style="color: #000" class="text-center">Đã có tài khoản? <b>Đăng nhập</b></a>
                        </p>
						
					</div>
				</div>
			</div>
		</div>
        </div>
        </div></center>
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