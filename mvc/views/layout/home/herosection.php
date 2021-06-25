<section class="hero" style="font-family: 'Baloo Tammudu 2', cursive;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Tất cả sản phẩm</span>
                        </div>
                        <ul>
                       <li>
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
                       </li>
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
                    <div class="hero__item set-bg" data-setbg="<?php echo URL_LAYOUT; ?>img/hero/banner2.jpg">
                        <div class="hero__text">
                            
                            <h2 style="color: green">Săn mỹ phẩm <br />nhận ngay quà hay</h2>
                            <h6>Khuyến mãi chỉ hôm nay.</h6><br>
                            <a href="#" class="btn btn-warning">Đặt hàng ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>