<?php 
	include ("Database.php");

	if(isset($_POST["search"])){
		$tensp=$_POST['tensp'];
		$sql = "select * from sanpham where tensp like '%$tensp%'";
		mysqli_query($con,$sql);
	}
	else{
		$sql ="select * from sanpham";
	}
	$result = mysqli_query($connect,$sql);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
 </head>
 <body>
     <center><h2>Kết quả tìm kiếm</h2></center>
     <div class="info">
        <form action="search.php" method="post">
        <input type="text" placeholder="Tìm sản phẩm..." name="tensp">
        <button type="submit" class="site-btn" value="Search" name="search1"><i class="fa fa-search"></i></button>
                            
        </form>
        <div class="row featured__filter">
            <?php 
            foreach ($data['product'] as $key => $value) {
             ?>
             <?php 
			while($row=mysqli_fetch_array($result)){
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
                 <?php }
            }
                 ?>
        </div>   
     </div>
 </body>
 </html>