    <script src="<?php echo URL_LAYOUT; ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>js/jquery.nice-select.min.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>js/jquery-ui.min.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>js/jquery.slicknav.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>js/mixitup.min.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>js/main.js"></script> 
    <script type="text/javascript">
    	$('a.addCart').click(function(event){
    		event.preventDefault(); //vô hiệu hóa sự load lại trang
    		 
    		var href=$(this).attr("href");
    		$.ajax({
    			url:href,
    			type:'GET',
    			data:{},
    			success:function(res){
    				swal("Đã thêm vào giỏ hàng của bạn", "Vui lòng tới giỏ hàng kiểm tra!", "success");
                     $("#num_cart").load("http://localhost:8080/codePHP/DOANUDM/ #num_cart");
    			}
    		});
    	});
        $('a.logout').click(function(event)
        {
            event.preventDefault();
            var makh=('#makh').val();
            var tensp1=('#tensp1').val();
            var tensp2=('#tensp2').val();
            var href=$(this).attr("href");
            $.ajax({
                url:href,
                type:'GET',
                data:{ho:ho,ten:ten,email:email},
                success:function(){
                    $("#login1").load("http://localhost:8080/codePHP/DOANUDM/ #login2");
                }
            });
        });
    </script>