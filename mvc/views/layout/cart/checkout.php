<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
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
    
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
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
                            <li>Miễn phí ship cho hóa đơn trên 300.000 VND</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="<?php echo URL.'login/logout' ?>" class="logout"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="<?php echo URL_LAYOUT; ?>img/language.png" alt="">
                            <div>Vietnam</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Vie</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
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
                             <!-- <a href="<?php echo URL.'register'?>" id="register">Register</a>     -->
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
                        <li class="active"><a href="./index.html">Home</a></li>
                        <li><a href="./shop-grid.html">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="./shop-details.html">Shop Details</a></li>
                                <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                <li><a href="./checkout.html">Check Out</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Beauty Tips</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="<?php echo URL.'cart1/index' ?>"><i class="fa fa-shopping-bag"></i>
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
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Tất cả sản phẩm</span>
                        </div>
                        <ul>
                            <li><a href="#">Nước Hoa</a></li>
                            <li><a href="#">Mỹ phẩm xách tay</a></li>
                            <li><a href="#">Son</a></li>
                            <li><a href="#">Toners</a></li>
                            <li><a href="#">Phấn Má</a></li>
                            <li><a href="#">Kẻ mắt</a></li>
                            <li><a href="#">Kem nền</a></li>
                            <li><a href="#">Mascara</a></li>
                            <li><a href="#">Nước tẩy trang</a></li>
                            <li><a href="#">Phấn mắt</a></li>
                            <li><a href="#">Hoa tai</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                               
                            <input type="text" placeholder="Tìm sản phẩm...">
                                <button type="submit" class="site-btn"><i class="fa fa-search"></i></button>
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
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
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
                <h4>Thông tin khách hàng</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ<span>*</span></p>
                                        <input type="text" value="<?php echo $data['user']['ho']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Tên<span>*</span></p>
                                        <input type="text" value="<?php echo $data['user']['ten']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add" value="<?php echo $data['user']['diachi']; ?>">
                                
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại<span>*</span></p>
                                        <input type="text" value="<?php echo $data['user']['phone']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="email" value="<?php echo $data['user']['username']; ?>" id="emailCustom">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Đơn đặt hàng</h4>
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

                             <button type="submit" class="site-btn datHang">ĐẶT HÀNG</button>
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
                            <li>Email: adelacosmetic@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Về Chúng tôi</h6>
                        <p>Adela Cosmetic tự hào là một trong những chuỗi cửa hàng mỹ phẩm lớn và đáng tin cậy nhất tại Sài Gòn,
                         nơi có thể thỏa mãn niềm đam mê trong cuộc chơi phấn son của hàng triệu tín đồ yêu shopping từ Nam ra Bắc.
                          Được ưu ái với tên gọi “Thiên Đường Mỹ Phẩm Triệu Like”, Adela luôn được xem là mái nhà chung của hàng nghìn
                           mặt hàng mỹ phẩm thuộc rất nhiều thương hiệu lớn nhỏ, hội tụ từ khắp các quốc gia trên thế giới.
                         Adela luôn sẵn sàng đáp ứng mọi nhu cầu làm đẹp cho phái đẹp lẫn phái mạnh mà không cần phải lo về giá và chất lượng sản phẩm.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Contact Us</h6>
                        <p>Liên hệ với chúng tôi bằng Email.</p>
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
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Adela Cosmetic. This template is made by AdelaTeam.
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="<?php echo URL_LAYOUT; ?>img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 <!-- Footer Section Begin -->
 
  <!-- Footer Section End -->

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
      $('button.datHang').click(function(event)
      {
        var emailCustom=$('input#emailCustom').val();
        var valu = "<?php echo $tensp ?>";
        alert(emailCustom);
        Email.send({
           SecureToken: "05527685-4711-43ab-b78c-df89be4e44f2",
            To : emailCustom,
            From : "adelacosmetic.vlog@gmail.com",
            Subject : "Xác nhận đơn hàng",
            Body : "Chúc mừng bạn đã đặt"+ valu + " thành công hehe!"
        }).then(
        message => alert("Đặt hàng thành công!")
        );
    });
</script>

</body>

</html>