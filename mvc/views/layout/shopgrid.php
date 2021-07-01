
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>

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
                                <h5>+84 123 456 789</h5>
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
                        <h2 style="color: #000">Categories</h2>
                        <div class="breadcrumb__option">
                            <a href="" style="color: #000">Home</a>
                            <span style="color: #000">Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                               
                        <h4>Khoảng giá</h4>
                            <div class="list-group">
                                <input type="hidden" id="hidden_minimum_price" value="0">
                                <input type="hidden" id="hidden_maximum_price" value="5000000">
                                <p id="price_show">Từ 50 nghìn - 100 triệu</p>
                                <div id="price_range"></div>
                            </div>

                        

                        </div>
                        <div class="sidebar__item">
                            <h4>Thương hiệu sản phẩm</h4>
                            <div class="list-group"> 
                                <?php 
                                    foreach ($data['product'] as $key => $value) {
                                ?>
                                <div class="list-group-item">
                               
                                    <input type="checkbox" class="common_selector brand" value="<?php echo $value['category']; ?>"><?php echo $value['category']; ?>
                                </div>
                                
                                <?php 
                                   }
                                ?>
                            </div>
                        </div>
                        
                        <div class="sidebar__item">
                            <h4>Sản phẩm phổ biến</h4>
                            <div class="sidebar__item__size">
                                <label for="large">
                                    Phấn mắt
                                    <input type="radio" >
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="medium">
                                    Son môi
                                    <input type="radio" >
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="small">
                                    Kem nền
                                    <input type="radio">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="tiny">
                                    Kem lót
                                    <input type="radio">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                            <?php 
                                foreach ($data['product'] as $key => $value) {
                                ?>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="<?php echo URL_LAYOUT .'img/product/'.$value['img'];?>">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="<?php echo URL.'layout/detail/'.$value['id']; ?>"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="<?php echo URL.'cart1/store/'.$value['id'];?>" class="addCart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span<a href="#"><?php echo $value['tensp']; ?></span>
                                            <h5><a href="#"><?php echo $value['xuatxu']; ?></a></h5>
                                            <div class="product__item__price"><?php echo number_format($value['gia']).'VND'; ?> <span>990,000 VND</span></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php } ?>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">sản phẩm nổi bật</option>
                                        <option value="0">Giá thấp đến cao</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-3">
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    

                    <?php 
                    foreach ($data['product'] as $key => $value) {
                    ?>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?php echo URL_LAYOUT .'img/product/'.$value['img'];?>">
                                <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="<?php echo URL.'layout/detail/'.$value['id']; ?>"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="<?php echo URL.'cart1/store/'.$value['id'];?>" class="addCart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                                </div>
                                <div class="product__item__text">
                                <h6><a href="#"><?php echo $value['tensp']; ?></a></h6>
                            <h6><a href="#"><?php echo $value['xuatxu']; ?></a></h6>
                            <h5><?php echo number_format($value['gia']).'VND'; ?></h5>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <?php
    require_once('home/footer.php');
    ?> 
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php
    require_once('home/js.php');
    ?> 


</body>

</html>