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
    <a href="#"><b>Adela Cosmetic Xin ch??o</b></a>
         </div>
        <div class="card-body login-card-body">
        <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form">
				<div class="page_login">
					<div class="login">
						<form name="register" id="register" method="POST">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									 <input name="ho" type="text" class="form-control form-control-md" placeholder="H???">
								</div>

								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
									<input name="ten" type="text" class="form-control form-control-md" placeholder="T??n">
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								
									<input name="username" type="email" class="form-control form-control-md" placeholder="Email">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
									<input name="phone" type="text" class="form-control form-control-md" placeholder="S??? ??i???n tho???i">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
									<input id="password" name="password" type="password" class="form-control form-control-md" placeholder="M???t kh???u">
								</div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
									<input name="cpassword" id="cpassword" type="password" class="form-control form-control-md" placeholder="X??c nh???n m???t kh???u">
								</div>
							</div>
                            <div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
									<input name="diachi" id="diachi" type="text" class="form-control form-control-md" placeholder="?????a ch???">
								</div>
							</div>
							<button name="register" class="btn btn-warning mb-2 mt-3" type="submit" value="????ng k??">????ng k??</button>

						</form>
						
                        <p class="mb-0">
                            <a href="<?php echo URL.'login'; ?>" style="color: #000" class="text-center">???? c?? t??i kho???n? <b>????ng nh???p</b></a>
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
                       required: "Vui lo??ng nh???p h???",
                       minlength: "H??? kh??ng c??"
                   },"ten": {
                       required: "Vui lo??ng nh???p t??n",
                       minlength: "T??n kh??ng c??"
                   },
                   "username": {
                       required: "Vui lo??ng nh????p email",
                       email: "Vui lo??ng nh????p ??u??ng ??i??a chi?? email"
                   },
                   "phone": {
                       required: "Vui lo??ng nh????p s???? ??i????n thoa??i",
                       digits: "S???? ma??y quy?? kha??ch v????a nh????p kh??ng ????ng",
                       maxlength: "S???? ma??y quy?? kha??ch v????a nh????p kh??ng ????ng",
                       minlength: "S???? ma??y quy?? kha??ch v????a nh????p kh??ng ????ng"
                   },
                   "password": {
                       required: "Vui lo??ng nh???p password",
                       minlength: "Vui lo??ng nh???p ??t nh???t 5 ki?? t???"
                   },
                   "diachi": {
                       required: "Vui lo??ng nh???p ?????a ch???",
                       minlength: "Vui lo??ng nh???p ????ng ?????a ch???"
                   },
                   "cpassword": {
                    required: "Vui lo??ng nh???p password ",
                       equalTo: "M????t kh????u kh??ng tru??ng",
                   }
               }
           });
       });
   </script>
</body>
</html>