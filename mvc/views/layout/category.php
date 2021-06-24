<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php 
     require_once('home/css.php')
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
    <section class="breadcrumb-section set-bg" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: #000">Sản phẩm nổi bật</h2>
                        
                    </div>
                </div>
            </div>
        </div>
        </section>
<!-- thong tin tk -->
<div class="row">
    <div class="col-lg-12">
        <div class="row ">
            <?php 
            $stt=0;
            foreach ($data['category'] as $key => $value) {
             ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo URL_LAYOUT .'img/product/'.$value['img'];?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="<?php echo URL.'layout/detail/'.$value['id']; ?>"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="<?php echo URL.'cart1/store/'.$value['id'];?>" class="addCart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?php echo $value['tensp']; ?></a></h6>
                            <h6><a href="#"><?php echo $value['xuatxu']; ?></a></h6>
                            <h5><?php echo number_format($value['gia']).'VND'; ?></h5>
                        </div>
                    </div>
                </div>
                
            <?php
         $stt++;
        } ?>
        </div>
    </div>
</div>


    <!-- Footer Section Begin -->
    <?php
     require_once('home/footer.php')
    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php
     require_once('home/js.php')
    ?>



</body>

</html>
