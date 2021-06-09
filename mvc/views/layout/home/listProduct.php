 <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter="">Phấn má</li>
                            <li data-filter="">Son môi</li>
                            <li data-filter="">Kem nền</li>
                            <li data-filter="">Nước hoa</li>
                            <li data-filter="">Mascara</li>
                            <li data-filter="">Kẻ mắt</li>
                        </ul>
                    </div>
                </div>
            </div>
 <div class="row featured__filter">
            <?php 
            foreach ($data['product'] as $key => $value) {
             ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
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
                            <h5><?php echo '$'.number_format($value['gia']); ?></h5>
                        </div>
                    </div>
                </div>
                 <?php } ?>
            </div>
        </div>
    </section>