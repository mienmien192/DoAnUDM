<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
    
    <title>Adela Cosmetic</title>

    <style>
    html, body{
        font-family: 'Baloo Tammudu 2', cursive;
    }
    </style>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

     <?php
    require_once('home/css.php');
    ?> 
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
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
    <?php
    require_once('home/herosection.php');
    ?> 

    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <?php
    require_once('home/categories.php');
    ?> 
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
            <?php
    require_once('home/listProduct.php');
    ?> 

    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?php echo URL_LAYOUT; ?>img/hero/banner3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?php echo URL_LAYOUT; ?>img/hero/banner4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <?php
    require_once('home/latestProduct.php');
    ?>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
     <?php
    require_once('home/blog.php');
    ?>
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