<footer>
 
    <ul>
        <li>
       
             <div class="icon" data-icon="HT SHOP"></div>
            <p>Túi xách - Phụ kiện không thể thiếu của phái đẹp</p>
        </li>
        <li>
            <div class="text">
                <h4>LIÊN HỆ</h4>
                <div>Kênh mua sắm trực tuyến giá tốt hàng đầu Việt Nam</div>
                <br>
                <img alt="" src="<?php echo $base; ?>/images/icon/pre_footer_icon_address.png">
                <span>Thủ Dầu Một, Bình Dương</span><br>
                <img alt="" src="<?php echo $base; ?>/images/icon/pre_footer_icon_phone.png">
                <span>0978973382</span><br>
                <img alt="" src="<?php echo $base; ?>/images/icon/pre_footer_icon_email.png">
                <span><a href="Thiend17pm03@gmail.com">   Thiend17pm03@gmail.com</a></span>
            </div>
        </li>
        <li>
            
            <div class="text">
                <h4>HỖ TRỢ KHÁCH HÀNG</h4>
                <a href="#">Quy định hình thức thanh toán</a><br>
                <a href="#">Chính sách vận chuyển, giao nhận</a><br>
                <a href="#">Chính sách đổi/trả hàng và hoàn tiền</a><br>
                <a href="#">Chính sách bảo mật</a>
            </div>
        </li>
    </ul>

    
</footer>
<a class="on_top" href="#top" style="display: block;"><i class="fa-arrow-circle-up fa"></i></a>
<script src="<?php echo $base ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo $base ?>/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?php echo $base ?>/js/jquery.scrollUp.min.js" type="text/javascript"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        dots:true,
        navText: ["<img src='<?php echo $base?>/images/icon/prev.png'>","<img src='<?php echo $base?>/images/icon/next.png'>"],
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:1
            }
        }
    })
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 600) {
                $('.on_top').fadeIn();
            } else {
                $('.on_top').fadeOut();
            }
        });
        $('.on_top').click(function(){
            $("html, body").animate({scrollTop: 0}, 700);
            return false;
        });
    });
</script>


 