<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" >
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Check out</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo URL_LAYOUT;?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URL_LAYOUT;?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URL_LAYOUT;?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URL_LAYOUT;?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URL_LAYOUT;?>css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URL_LAYOUT;?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URL_LAYOUT;?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URL_LAYOUT;?>css/style.css" type="text/css">
    <script src="https://smtpjs.com/v3/smtp.js">
    </script>
    <style type="text/css">
        input{
            color: #000 !important;
        }
        
    body{
        font-family: 'Baloo Tammudu 2', cursive;
    }
    .site-btn:hover{
        background: green;
    }
    
    </style>
</head>

<body>
  
    <!-- Humberger Begin -->
 
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> adelacomestic@gmail.com</li>
                            <li>Mi???n ph?? ship cho h??a ????n tr??n 300.000 VND</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="<?php echo URL.'login/logout' ?>" ><i class="fa fa-sign-out "></i></a>
                        </div>
                       
                        <div class="header__top__right__auth" id="login1">
                            <a href="<?php echo URL.'login' ?>" id="login2"><i class="fa fa-user"></i>
                           
                                <?php 
                                if (isset($_SESSION['username'])){
                                    echo $_SESSION['username'];
                                } else
                                { 
                                    echo "Login";
                                }
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./index.html"><img src="<?php echo URL_LAYOUT; ?>img/logo3.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
            <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="<?php echo URL?>">Home</a></li>
                        <li><a href="<?php echo URL.'layout/shopgrid'?>">Shop</a></li>
                        <li><a href="#">Category</a>
                            <ul class="header__menu__dropdown">
                                    
                                <li><a href="<?php echo URL.'Detail/1' ?>">N?????c Hoa</a></li>
                                <li><a href="<?php echo URL.'Detail/2' ?>">M??? ph???m x??ch tay</a></li>
                                <li><a href="<?php echo URL.'Detail/3' ?>">Son</a></li>
                                <li><a href="<?php echo URL.'Detail/4' ?>">Toners</a></li>
                                <li><a href="<?php echo URL.'Detail/5' ?>">Ph???n M??</a></li>
                                <li><a href="<?php echo URL.'Detail/6' ?>">K??? m???t</a></li>
                                <li><a href="<?php echo URL.'Detail/7' ?>">Kem n???n</a></li>
                                <li><a href="<?php echo URL.'Detail/8' ?>">Mascara</a></li>
                                <li><a href="<?php echo URL.'Detail/9' ?>">N?????c t???y trang</a></li>
                                <li><a href="<?php echo URL.'Detail/10' ?>">Ph???n m???t</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Beauty Tips</a></li>
                        <li><a href="<?php echo URL.'layout/contactUs'?>">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="<?php echo URL.'cart1/index' ?>"><i class="fa fa-shopping-bag"><span>1</span></i>
                            <span id="num_cart">
                                <?php
                                if(isset($_SESSION['cart'])){
                                    echo count($_SESSION['cart']);
                                }
                                else{
                                 echo "0"; 
                                 
                             }
                             ?>
                         </span>
                     </a></li>
                 </ul>
                 <div class="header__cart__price"><span></span>
                 </div>
             </div>
         </div>
     </div>
     <div class="humberger__open">
        <i class="fa fa-bars"></i>
    </div>
</div>
</header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>T???t c??? s???n ph???m</span>
                        </div>
                        <ul>
                            <li><a href="#">N?????c Hoa</a></li>
                            <li><a href="#">M??? ph???m x??ch tay</a></li>
                            <li><a href="#">Son</a></li>
                            <li><a href="#">Toners</a></li>
                            <li><a href="#">Ph???n M??</a></li>
                            <li><a href="#">K??? m???t</a></li>
                            <li><a href="#">Kem n???n</a></li>
                            <li><a href="#">Mascara</a></li>
                            <li><a href="#">N?????c t???y trang</a></li>
                            <li><a href="#">Ph???n m???t</a></li>
                            <li><a href="#">Hoa tai</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                    <div class="hero__search__form">
                            <form action="<?php echo URL ?>Search" method="POST" enctype="multipart/form-data">
                                
                                <input type="text" placeholder="T??m s???n ph???m..." name="name_search">
                                <button type="submit" class="site-btn" value="Search" name="search1"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 123 123 123</h5>
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
                    <div  class="breadcrumb__text">
                        <h2 style="color: #000">Checkout</h2>
                        <div class="breadcrumb__option">
                            <a style="color: #000" href="./index.html">Home</a>
                            <span style="color: #000">Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
            <div class="checkout__form">
                <h4>Th??ng tin kh??ch h??ng</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>H???<span>*</span></p>
                                        <input type="text" value="<?php echo $data['user']['ho']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>T??n<span>*</span></p>
                                        <input type="text" value="<?php echo $data['user']['ten']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="checkout__input">
                                <p>?????a ch???<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add" value="<?php echo $data['user']['diachi']; ?>">
                                
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>S??? ??i???n tho???i<span>*</span></p>
                                        <input type="text" value="<?php echo $data['user']['phone']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="mail" value="<?php echo $data['user']['email']; ?>" id="emailCustom">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>????n ?????t h??ng</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <?php 
                                foreach ($data['cart'] as $value) {


                                 ?>
                                 <ul>
                                    <li> <?php echo $value['tensp']."(".$value['count'].")"; ?> <span><?php echo $value['count']*$value['gia']; ?></span></li>
                                <?php } ?>
                            </ul>
                            <div class="checkout__order__subtotal">Ship <span><?php 
                            $num = 25000;
                            $formattedNum = number_format($num);
                            echo $formattedNum;
                            ?></span></div>
                            <div class="checkout__order__total">Total <span>
                                <?php 
                                $tong=25000;
                                foreach ($data['cart'] as $value) {
                                 $tong += $value['count']*$value['gia'];
                                 $formattedNum = number_format($tong);

                             } echo $formattedNum;
                                 // echo $tong; ?>
                             </span></div>

                             <button type="submit" class="site-btn Order">?????T H??NG</button>
                         </div>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </section>
 <!-- Checkout Section End -->
 <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="<?php echo URL_LAYOUT; ?>img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 164 Nguyen Thi Minh Khai, 1st District, Ho Chi Minh City</li>
                            <li>Phone: 123 123 123</li>
                            <li>Email: adelacosmetic.vlog@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>V??? Ch??ng t??i</h6>
                        <p>Adela Cosmetic t??? h??o l?? m???t trong nh???ng chu???i c???a h??ng m??? ph???m l???n v?? ????ng tin c???y nh???t t???i S??i G??n,
                         n??i c?? th??? th???a m??n ni???m ??am m?? trong cu???c ch??i ph???n son c???a h??ng tri???u t??n ????? y??u shopping t??? Nam ra B???c.
                          ???????c ??u ??i v???i t??n g???i ???Thi??n ???????ng M??? Ph???m Tri???u Like???, Adela lu??n ???????c xem l?? m??i nh?? chung c???a h??ng ngh??n
                           m???t h??ng m??? ph???m thu???c r???t nhi???u th????ng hi???u l???n nh???, h???i t??? t??? kh???p c??c qu???c gia tr??n th??? gi???i.
                         Adela lu??n s???n s??ng ????p ???ng m???i nhu c???u l??m ?????p cho ph??i ?????p l???n ph??i m???nh m?? kh??ng c???n ph???i lo v??? gi?? v?? ch???t l?????ng s???n ph???m.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Contact Us</h6>
                        <p>Li??n h??? v???i ch??ng t??i b???ng Email.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Adela Cosmetic. This template is made by AdelaTeam.
  </p></div>
                        <div class="footer__copyright__payment"><img src="<?php echo URL_LAYOUT; ?>img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
</footer>


  <!-- Js Plugins -->
  <script src="<?php echo URL_LAYOUT;?>js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo URL_LAYOUT;?>js/bootstrap.min.js"></script>
    <script src="<?php echo URL_LAYOUT;?>js/jquery.nice-select.min.js"></script>
    <script src="<?php echo URL_LAYOUT;?>js/jquery-ui.min.js"></script>
    <script src="<?php echo URL_LAYOUT;?>js/jquery.slicknav.js"></script>
    <script src="<?php echo URL_LAYOUT;?>js/mixitup.min.js"></script>
    <script src="<?php echo URL_LAYOUT;?>js/owl.carousel.min.js"></script>
    <script src="<?php echo URL_LAYOUT;?>js/main.js"></script>


  <script type="text/javascript">
      $('button.Order').click(function(event)
      {
        var emailCustom=$('input#emailCustom').val();
        
        // alert(emailCustom);
        Email.send({
           SecureToken: "eff372bf-2c32-47c6-a971-ef276b9a8ead",
            To : emailCustom,
            From : "adelacosmetic.vlog@gmail.com",
            Subject : "X??c nh???n ????n h??ng",
            Body : "Ch??c m???ng b???n ???? ?????t th??nh c??ng! C???m ??n ???? gh?? th??m ch??ng t??i."
        }).then(
        message => alert("Ch??ng t??i ???? x??c nh???n ????n c???a b???n. Vui l??ng ki???m tra mail!")
        );
    });
</script>

</body>


</html>