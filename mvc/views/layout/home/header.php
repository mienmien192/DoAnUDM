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
                    <a href="./index.html"><img src="<?php echo URL_LAYOUT; ?>img/logo1.png" alt=""></a>
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