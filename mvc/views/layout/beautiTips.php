<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>

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
    .site-btn:hover{
        background: green;
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
                        <h2  style="color: #000">Mẹo làm đẹp</h2>
                        <div class="breadcrumb__option">
                            <a href=""  style="color: #000">Home</a>
                            <span  style="color: #000">Beauty Tips</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    
<!-- Blog Section Begin -->
<section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        
                        <div class="blog__sidebar__item">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">All</a></li>
                                <li><a href="#">Beauty (20)</a></li>
                                <li><a href="#">Food (5)</a></li>
                                <li><a href="#">Life Style (9)</a></li>
                                <li><a href="#">Travel (10)</a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Tin tức gần đây</h4>
                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="<?php echo URL_LAYOUT; ?>img/anh/traicay.jpg" alt="" style="width: 110px; height:110px"> 
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>9 Loại trái cây <br /> bảo vệ cuộc sống </h6>
                                        <span>JUL 1, 2021</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="<?php echo URL_LAYOUT; ?>img/anh/soda.jpg" alt="" style="width: 110px; height:110px">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Baking soda là gì? <br /> Tìm hiểu về Baking soda</h6>
                                        <span>JUL 1, 2021</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="<?php echo URL_LAYOUT; ?>img/anh/mun-nuoc.jpg" alt="" style="width: 110px; height:110px">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Mụn nước là gì? <br /> Nguyên nhân, triệu chứng của mụn nước</h6>
                                        <span>MAR 05, 2021</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Mỹ phẩm</a>
                                <a href="#">Beauty</a>
                                
                                <a href="#">Fruit</a>
                                <a href="#">Healthy Food</a>
                                <a href="#">Lifestyle</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?php echo URL_LAYOUT; ?>img/anh/mun-nuoc.jpg" alt="" style="width: 100%; height: 200px">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>MAR 5, 2O21</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Mụn nước là gì? Nguyên nhân, triệu chứng của mụn nước</a></h5>
                                    <p>Khi da bắt đầu xuất hiện những nốt mụn nước đầu tiên, đừng chủ quan bỏ qua bởi nó liên quan đến nhiều vấn đề sức khỏe khác nhau.
                                     Tình trạng này gây nên cảm giác khó chịu, đau đớn ở chỗ mụn mọc... </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?php echo URL_LAYOUT; ?>img/anh/traicay.jpg" alt="" style="width: 100%; height: 200px">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> JUL 1, 2021</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">9 Loại trái cây bảo vệ cuộc sống </a></h5>
                                    <p>Trái cây không chỉ cung cấp nhiều loại vitamin cho cơ thể mà còn có khả năng chữa bệnh rất diệu kỳ. Vậy hãy dành chút thời gian cùng chuyên mục Mẹo vào bếp của ADELA
                                     tìm hiểu ngay 10 loại trái cây hỗ trợ trị bệnh và tốt cho sức khỏe mà bạn bất ngờ đấy!... </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?php echo URL_LAYOUT; ?>img/anh/soda.jpg" alt="" style="width: 100%; height: 200px">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> JUL 1, 2021</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Baking Soda là gì? Tìm hiểu về baking Soda</a></h5>
                                    <p>BS được xếp vào list danh sách “những siêu anh hùng” trong gia đình bởi là loại nguyên liệu vừa rẻ, 
                                    vừa chất lượng, an toàn. Với những ưu điểm tuyệt vời mà nó mang lại baking soda được sử dụng rộng rãi...
                                    </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?php echo URL_LAYOUT; ?>img/anh/massage.jpg" alt="" style="width: 100%; height: 200px">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2021</li>
                                        <li><i class="fa fa-comment-o"></i> 0</li>
                                    </ul>
                                    <h5><a href="#">Massage Mặt – Bí Quyết Giúp Bạn Có Được Làn Da Mãi Tươi Trẻ</a></h5>
                                    <p>Massage mặt giúp tăng cường lưu thông máu, tăng lực co giãn và cơ đàn hồi,
                                     tăng cường cơ năng thần kinh, kích thích máu tuần hoàn giúp cơ được cung cấp đủ máu và chất dinh dưỡng...</p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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








