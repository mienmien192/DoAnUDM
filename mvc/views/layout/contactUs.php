<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
    
    <!-- Css Styles -->
    <?php
    require_once('home/css.php');
    ?> 
    <style>
    body{
        font-family: 'Baloo Tammudu 2', cursive;
    }
    </style>
</head>

<body>
   
    <!-- Humberger Begin -->
    <?php
    require_once('home/menu.php');
    ?> 
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php
    require_once('home/header.php');
    ?> 
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Tất cả sản phẩm</span>
                        </div>
                        <ul>
                                <li><a href="<?php echo URL.'Detail/1' ?>">Nước Hoa</a></li>
                                <li><a href="<?php echo URL.'Detail/2' ?>">Mỹ phẩm xách tay</a></li>
                                <li><a href="<?php echo URL.'Detail/3' ?>">Son</a></li>
                                <li><a href="<?php echo URL.'Detail/4' ?>">Toners</a></li>
                                <li><a href="<?php echo URL.'Detail/5' ?>">Phấn Má</a></li>
                                <li><a href="<?php echo URL.'Detail/6' ?>">Kẻ mắt</a></li>
                                <li><a href="<?php echo URL.'Detail/7' ?>">Kem nền</a></li>
                                <li><a href="<?php echo URL.'Detail/8' ?>">Mascara</a></li>
                                <li><a href="<?php echo URL.'Detail/9' ?>">Nước tẩy trang</a></li>
                                <li><a href="<?php echo URL.'Detail/10' ?>">Phấn mắt</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                    <div class="hero__search__form">
                            <form action="<?php echo URL ?>Search" method="POST" enctype="multipart/form-data">
                                
                                <input type="text" placeholder="Tìm sản phẩm..." name="name_search">
                                <button type="submit" class="site-btn" value="Search" name="search1"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: #000">Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a style="color: #000"href="./index.html">Home</a>
                            <span style="color: #000">Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Điện thoại</h4>
                        <p>+84 123 123 123</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>164 Nguyen Thi Minh Khai, 1st District, Ho Chi Minh City</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Giờ mở cửa</h4>
                        <p>24/7</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>adelacosmetic.vlog@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Form Begin -->
    
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                    
                        <h2>Liên hệ chúng tôi</h2>
                    </div>
                </div>
            </div><h4 class="sent-notification"></h4>
            <form action="#" id="contactUs">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input id="name" type="text" placeholder="Your name">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input id="email" type="text" placeholder="Your Email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea id="body" placeholder="Your message"></textarea>
                        <button type="button" onclick="sendEmail()" value="Send your contact" class="site-btn">Gửi</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
    <?php
    require_once('home/footer.php');
    ?> 
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php
    require_once('home/js.php');
    ?> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
   function sendEmail()
    {
        var name = $("#name");
        var email = $("#email");
        var body = $("#body");

        if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(body)){
            $.ajax({
                url: 'sendEmail.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name:name.val(),
                    email:email.val(),
                    body:body.val(),
                }, success: function(response){
                    $('#contactUs')[0].reset();
                    $('.sent-notification').text("Message sent successfully.");
                }
            });
        }
    }
    

    function isNotEmpty(caller){
        if(caller.val() == ""){
            caller.css('border', '2px solid red');
            return false;
        }
        else{
            caller.css('border', '');
            return true;
        }
    }
</script>


</body>
 
</html>








