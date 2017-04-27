<?php get_header();?>
<div class="space20 full"></div>
<div class="full">
  <div class="container ">
   <div class="+row full rows1">
    <div id="left-panel" class="col-lg-9 col-md-9">

      <div class="full status border bg_white">
      <?php echo do_shortcode('[show_testimonials]'); ?>
      </div>
      <div id="list_product_thumb_id-2" class="LProdT homebox">
        <h2 class="tit_box">Sản phẩm tiêu biểu</h2>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        
        <div class="+row full mar10 ">
        
         <div class=" item3  col-lg-4 col-sm-4 text-center">
           <div class="items full bg_white border">
             <a class="img full" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
               <?php if(has_post_thumbnail() ) { ?>
                 <?php $large_image_url = wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ); ?> 
                 <img width="960" height="640" src="<?php echo $large_image_url ;?>" class="img-responsive center-block wp-post-image" alt="<?php the_title();?>" />
               <?php } ?> 

             </a>

             <div class="clear"></div>
             <div class="wr_right full">    
               <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><h3 class="font14 full cl_xanh6 title-items text-uppercase"><?php the_title(); ?></h3></a>
               <div class="text-justify excerpt-items full">
                 <?php the_excerpt(); ?>
               </div>       
               <div class="wd50 left price text-uppercase font16 robotoCondensed">2.599.000/100kg</div>
               <!-- <div class="wd50 right"><span class="btn_dathang cl_white" data-id="1956">Đặt hàng</span></div> -->
               <div class="wd50 right"><button data-id="1956" onclick="quickbuy(this, '1956')" data-toggle="modal" data-target="#checkout-che-sach" class="+btn +btn-primary no-border btn_dathang transition cl_white +center-block robotoCondensed" >Đặt hàng</button></div>
             </div> 
           </div> <!--/ .items  -->
         </div>
         <?php endwhile; ?>           
          <?php endif; ?>
         <div class="clear"></div>

       </div> <!--/ .items  -->
     </div>   <div class="clear"></div>       
   </div>

 </div><div class="clear space20"></div><div id="list_post_thumb_id-3" class="LPT homebox"><h2 class="tit_box">Hướng dẫn sử dụng chè</h2>

 <div class="row full mart20 ">



   <div class="news_item_content first">
    <div class="news_item_content_img"><a href="https://che-sach.com/tin-tuc/huong-dan-phan-biet-tra-pho-nhi/" title="Hướng dẫn phân biệt Trà Phổ Nhĩ" ><img src="https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3-188x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" srcset="https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3-188x250.jpg 188w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3-400x533.jpg 400w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3-450x600.jpg 450w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3.jpg 720w" sizes="(max-width: 188px) 100vw, 188px" /></a></div>
    <div class="news_item_content_right">
      <a href="https://che-sach.com/tin-tuc/huong-dan-phan-biet-tra-pho-nhi/" title="Hướng dẫn phân biệt Trà Phổ Nhĩ" ><h3 class="news_item_content_title">Hướng dẫn phân biệt Trà Phổ Nhĩ</h3></a>
      <span class="date">Monday, 17/04/2017</span>
      <span class="short_content">Trong tuần trước, Người quản trị Diễn đàn Uống Trà Đi đã có buổi gặp gỡ với trà hữu Tiến Vũ, gương mặt trẻ rất yêu trà Việt Nam. Bạn này còn hoan hỉ gửi tặng hai gói trà...</span>
      <a href="https://che-sach.com/tin-tuc/huong-dan-phan-biet-tra-pho-nhi/" title="Hướng dẫn phân biệt Trà Phổ Nhĩ" class="detail">Xem tiếp</a>
    </div>
  </div>



  <div class="news_item_content">
    <div class="news_item_content_img"><a href="https://che-sach.com/tin-tuc/phan-biet-tra-shan-tuyet-co-thu-va-tra-shan-tuyet/" title="Phân biệt trà shan tuyết cổ thụ và trà shan tuyết" ><img src="https://che-sach.com/wp-content/uploads/2017/03/phan-biet-tra-shan-tuyet-co-thu-that-va-gia-479x250.png" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="phan-biet-tra-shan-tuyet-co-thu-that-va-gia" srcset="https://che-sach.com/wp-content/uploads/2017/03/phan-biet-tra-shan-tuyet-co-thu-that-va-gia-479x250.png 479w, https://che-sach.com/wp-content/uploads/2017/03/phan-biet-tra-shan-tuyet-co-thu-that-va-gia-400x209.png 400w, https://che-sach.com/wp-content/uploads/2017/03/phan-biet-tra-shan-tuyet-co-thu-that-va-gia-768x401.png 768w, https://che-sach.com/wp-content/uploads/2017/03/phan-biet-tra-shan-tuyet-co-thu-that-va-gia-600x313.png 600w, https://che-sach.com/wp-content/uploads/2017/03/phan-biet-tra-shan-tuyet-co-thu-that-va-gia.png 808w" sizes="(max-width: 479px) 100vw, 479px" /></a></div>
    <div class="full">
      <a href="https://che-sach.com/tin-tuc/phan-biet-tra-shan-tuyet-co-thu-va-tra-shan-tuyet/" title="Phân biệt trà shan tuyết cổ thụ và trà shan tuyết" ><h3 class="news_item_content_title">Phân biệt trà shan tuyết cổ thụ và trà shan tuyết</h3></a>
      <span class="date">Sunday, 26/03/2017</span>

    </div>
  </div>



  <div class="news_item_content">
    <div class="news_item_content_img"><a href="https://che-sach.com/tin-tuc/se-duyen-tra-cung-hoa-buoi-thang-3/" title="Se duyên Trà cùng hoa Bưởi tháng 3" ><img src="https://che-sach.com/wp-content/uploads/2017/03/Se-Duyen-tra-cung-hoa-buoi-thang-3-15-375x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="Se-Duyen-tra-cung-hoa-buoi-thang-3-25" srcset="https://che-sach.com/wp-content/uploads/2017/03/Se-Duyen-tra-cung-hoa-buoi-thang-3-15-375x250.jpg 375w, https://che-sach.com/wp-content/uploads/2017/03/Se-Duyen-tra-cung-hoa-buoi-thang-3-15-400x267.jpg 400w, https://che-sach.com/wp-content/uploads/2017/03/Se-Duyen-tra-cung-hoa-buoi-thang-3-15-768x512.jpg 768w, https://che-sach.com/wp-content/uploads/2017/03/Se-Duyen-tra-cung-hoa-buoi-thang-3-15-600x400.jpg 600w, https://che-sach.com/wp-content/uploads/2017/03/Se-Duyen-tra-cung-hoa-buoi-thang-3-15.jpg 960w" sizes="(max-width: 375px) 100vw, 375px" /></a></div>
    <div class="full">
      <a href="https://che-sach.com/tin-tuc/se-duyen-tra-cung-hoa-buoi-thang-3/" title="Se duyên Trà cùng hoa Bưởi tháng 3" ><h3 class="news_item_content_title">Se duyên Trà cùng hoa Bưởi tháng 3</h3></a>
      <span class="date">Friday, 03/03/2017</span>

    </div>
  </div>



  <div class="news_item_content">
    <div class="news_item_content_img"><a href="https://che-sach.com/tin-tuc/huong-dan-su-dung-che-dung/" title="Hướng dẫn sử dụng Chè Dung" ><img src="https://che-sach.com/wp-content/uploads/2017/02/cach-pha-che-dung-tot-nhat-1-333x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="cach-pha-che-dung-tot-nhat-2" srcset="https://che-sach.com/wp-content/uploads/2017/02/cach-pha-che-dung-tot-nhat-1-333x250.jpg 333w, https://che-sach.com/wp-content/uploads/2017/02/cach-pha-che-dung-tot-nhat-1-400x300.jpg 400w, https://che-sach.com/wp-content/uploads/2017/02/cach-pha-che-dung-tot-nhat-1-768x576.jpg 768w, https://che-sach.com/wp-content/uploads/2017/02/cach-pha-che-dung-tot-nhat-1-600x450.jpg 600w" sizes="(max-width: 333px) 100vw, 333px" /></a></div>
    <div class="full">
      <a href="https://che-sach.com/tin-tuc/huong-dan-su-dung-che-dung/" title="Hướng dẫn sử dụng Chè Dung" ><h3 class="news_item_content_title">Hướng dẫn sử dụng Chè Dung</h3></a>
      <span class="date">Friday, 03/02/2017</span>

    </div>
  </div>
  <div class="clear"></div>     


</div>

</div><div class="clear space20"></div><div id="get_khach_hang_id-2" class="khach-hang homebox"><h2 class="tit_box">Ý kiến khách hàng</h2>

<div class="full customer">


 <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
   <div class="img-status"><img src="https://che-sach.com/wp-content/uploads/2017/04/khach-nhat-ban-che-duy-thinh.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" /></div>
 </div>   
 <div class="col-lg-8 col-md-8 col-sm-8 +right">              
  <div class=" full "><p>Mr Keitantakatan</p>
  </div>
  <div class=" full bold"><p>Tokyo &#8211; Japan</p>
  </div>
  <div class="short_content full text-justify">Đi rất nhiều vùng trà nhưng tôi đã dừng lại ở Suối Giàng với những búp trà mập mạp, hậu vị tốt nhất mà tôi thường thấy.</div>
</div>
</div>


<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
   <div class="img-status"><img src="https://che-sach.com/wp-content/uploads/2017/03/1234631_1378503919047084_1294441687_n.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" /></div>
 </div>   
 <div class="col-lg-8 col-md-8 col-sm-8 +right">              
  <div class=" full "><p><strong>Anh: Thanh Toàn</strong></p>
  </div>
  <div class=" full bold"><p>Nguyễn Thị Định &#8211; Hà Nội</p>
  </div>
  <div class="short_content full text-justify">Tôi đã thử qua rất nhiều loại trà , trước đây tôi có quen sử dụng trà Tà Xùa .Dùng rất lâu sản phẩm này này, nhưng bén duyên thế nào hôm đó Chè Duy Thịnh hết Tà Xùa...</div>
</div>
</div>


<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
   <div class="img-status"><img src="https://che-sach.com/wp-content/uploads/2016/12/k-hong-lam-250x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" srcset="https://che-sach.com/wp-content/uploads/2016/12/k-hong-lam-250x250.jpg 250w, https://che-sach.com/wp-content/uploads/2016/12/k-hong-lam-400x400.jpg 400w, https://che-sach.com/wp-content/uploads/2016/12/k-hong-lam.jpg 592w" sizes="(max-width: 250px) 100vw, 250px" /></div>
 </div>   
 <div class="col-lg-8 col-md-8 col-sm-8 +right">              
  <div class=" full "><p>Chị : <strong>Hồng</strong></p>
  </div>
  <div class=" full bold"><p>Lạc Long Quân &#8211; Hà Nội</p>
  </div>
  <div class="short_content full text-justify">Tôi quen thưởng trà cổ thụ suối giàng gần 10 năm nay.Mọi lần hay có người nhà đặt hộ, uống cũng ổn, nhưng do đợt này muốn tự tay chọn sản phẩm ưng ý.Cũng có qua mấy shop bán...</div>
</div>
</div>


<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
   <div class="img-status"><img src="https://che-sach.com/wp-content/uploads/2016/12/k-hieu-royal-333x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" srcset="https://che-sach.com/wp-content/uploads/2016/12/k-hieu-royal-333x250.jpg 333w, https://che-sach.com/wp-content/uploads/2016/12/k-hieu-royal-400x300.jpg 400w, https://che-sach.com/wp-content/uploads/2016/12/k-hieu-royal-768x576.jpg 768w, https://che-sach.com/wp-content/uploads/2016/12/k-hieu-royal-600x450.jpg 600w, https://che-sach.com/wp-content/uploads/2016/12/k-hieu-royal.jpg 960w" sizes="(max-width: 333px) 100vw, 333px" /></div>
 </div>   
 <div class="col-lg-8 col-md-8 col-sm-8 +right">              
  <div class=" full "><p>Anh: <strong>Hiếu</strong></p>
  </div>
  <div class=" full bold"><p>Royal City &#8211; HN</p>
  </div>
  <div class="short_content full text-justify">Vợ tôi mới sinh cháu, muốn tìm chè vằng lợi sữa cho vợ.Nhưng do không có thời gian đun nấu nên tôi chọn sản phẩm cao chè vằng để tiện cho vợ sử dụng .Tôi có tìm trên mạng...</div>
</div>
</div>


<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
   <div class="img-status"><img src="https://che-sach.com/wp-content/uploads/2016/12/k-cam-188x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" srcset="https://che-sach.com/wp-content/uploads/2016/12/k-cam-188x250.jpg 188w, https://che-sach.com/wp-content/uploads/2016/12/k-cam-400x533.jpg 400w, https://che-sach.com/wp-content/uploads/2016/12/k-cam-450x600.jpg 450w, https://che-sach.com/wp-content/uploads/2016/12/k-cam.jpg 720w" sizes="(max-width: 188px) 100vw, 188px" /></div>
 </div>   
 <div class="col-lg-8 col-md-8 col-sm-8 +right">              
  <div class=" full "><p>Chị: <strong>Cẩm</strong></p>
  </div>
  <div class=" full bold"><p>KCN Đồng Văn Hà Nam</p>
  </div>
  <div class="short_content full text-justify">Thời gian làm trong cty bận quá chúng tôi không có thời gian đi ra chợ hoặc những nơi bán quanh cty. Nghe bạn mách cho số Chè Duy Thịnh để mua hàng , rất tiên lợi với phương...</div>
</div>
</div>


<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
   <div class="img-status"><img src="https://che-sach.com/wp-content/uploads/2016/12/k-trang-246x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" srcset="https://che-sach.com/wp-content/uploads/2016/12/k-trang-246x250.jpg 246w, https://che-sach.com/wp-content/uploads/2016/12/k-trang-400x406.jpg 400w, https://che-sach.com/wp-content/uploads/2016/12/k-trang-768x780.jpg 768w, https://che-sach.com/wp-content/uploads/2016/12/k-trang-591x600.jpg 591w, https://che-sach.com/wp-content/uploads/2016/12/k-trang.jpg 944w" sizes="(max-width: 246px) 100vw, 246px" /></div>
 </div>   
 <div class="col-lg-8 col-md-8 col-sm-8 +right">              
  <div class=" full "><p>Chị : Vân Trang</p>
  </div>
  <div class=" full bold"><p>Quy Nhơn &#8211; Bình Định</p>
  </div>
  <div class="short_content full text-justify">Bên Trang chuyên chế biến trà túi lọc và trà thảo dược xuất đi các nước . Thời gian vừa qua thị trường biến động về giá và chất lượng, vậy nên phải rà soát lại các mối hàng...</div>
</div>
</div>


<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
   <div class="img-status"><img src="https://che-sach.com/wp-content/uploads/2016/12/k-van-188x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" srcset="https://che-sach.com/wp-content/uploads/2016/12/k-van-188x250.jpg 188w, https://che-sach.com/wp-content/uploads/2016/12/k-van-400x533.jpg 400w, https://che-sach.com/wp-content/uploads/2016/12/k-van-450x600.jpg 450w, https://che-sach.com/wp-content/uploads/2016/12/k-van.jpg 720w" sizes="(max-width: 188px) 100vw, 188px" /></div>
 </div>   
 <div class="col-lg-8 col-md-8 col-sm-8 +right">              
  <div class=" full "><p>Chị: Vẫn</p>
  </div>
  <div class=" full bold"><p>Thái Thụy &#8211; Thái Bình</p>
  </div>
  <div class="short_content full text-justify">Đang có nhu cầu tặng sếp món quà tân gia mà không biết cho sản phẩm gì.Được người bạn ở cty mách mua bộ bàn trà , có vẻ sếp cũng thưởng trà chuyên nghiệp. Vậy bén duyên với...</div>
</div>
</div>


<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
   <div class="img-status"><img src="https://che-sach.com/wp-content/uploads/2016/12/k-thuy-188x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" srcset="https://che-sach.com/wp-content/uploads/2016/12/k-thuy-188x250.jpg 188w, https://che-sach.com/wp-content/uploads/2016/12/k-thuy.jpg 206w" sizes="(max-width: 188px) 100vw, 188px" /></div>
 </div>   
 <div class="col-lg-8 col-md-8 col-sm-8 +right">              
  <div class=" full "><p>Chị : <strong>Thủy</strong></p>
  </div>
  <div class=" full bold"><p>Lĩnh Nam &#8211; Hà Nội</p>
  </div>
  <div class="short_content full text-justify">Chúng tôi đang tìm kiếm sản phẩm Chè Dây cho cty sản xuất chè dây túi lọc sau khi tham khảo trên mạng có qua và làm việc với Chè Duy Thịnh .Tại đây được sự support nhiệt tình...</div>
</div>
</div>


<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
   <div class="img-status"><img src="https://che-sach.com/wp-content/uploads/2016/12/k-bien-250x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" srcset="https://che-sach.com/wp-content/uploads/2016/12/k-bien-250x250.jpg 250w, https://che-sach.com/wp-content/uploads/2016/12/k-bien-400x400.jpg 400w, https://che-sach.com/wp-content/uploads/2016/12/k-bien-600x600.jpg 600w, https://che-sach.com/wp-content/uploads/2016/12/k-bien.jpg 656w" sizes="(max-width: 250px) 100vw, 250px" /></div>
 </div>   
 <div class="col-lg-8 col-md-8 col-sm-8 +right">              
  <div class=" full "><p>Anh : <strong>Biên</strong></p>
  </div>
  <div class=" full bold"><p>Nguyên Hồng &#8211; Hà Nội</p>
  </div>
  <div class="short_content full text-justify">Có thời gia dài tôi dùng trà Tà Xùa, nhưng do nhiêu đơn vị cung cấp sản phẩm này không được ổn định chất lượng.Vậy nên tôi luôn phải tìm những nơi cung cấp trà mới.Tình cờ có người...</div>
</div>
</div>


<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
   <div class="img-status"><img src="https://che-sach.com/wp-content/uploads/2016/12/k-tan-250x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" srcset="https://che-sach.com/wp-content/uploads/2016/12/k-tan-250x250.jpg 250w, https://che-sach.com/wp-content/uploads/2016/12/k-tan-400x399.jpg 400w, https://che-sach.com/wp-content/uploads/2016/12/k-tan-600x600.jpg 600w, https://che-sach.com/wp-content/uploads/2016/12/k-tan.jpg 671w" sizes="(max-width: 250px) 100vw, 250px" /></div>
 </div>   
 <div class="col-lg-8 col-md-8 col-sm-8 +right">              
  <div class=" full "><p>Bs : <strong>Lê Thành Tân</strong></p>
  </div>
  <div class=" full bold"><p>DH Y Khoa Phạm Ngọc Thạch</p>
  </div>
  <div class="short_content full text-justify">Với sở thích thưởng trà tôi đã sử dụng qua các sản phẩm trà và chỉ ưng nhất sản phầm trà cổ thụ của Chè Duy Thịnh.Sản phẩm đầu tiên làm tôi bén duyên với trà cổ thụ là...</div>
</div>
</div>


</div>

</div><div class="clear space20"></div>   </div>
<!-- sidebar -->
<div id="sb" class="col-lg-3 col-md-3 hidden-sm hidden-xs">
  <div class="sb-box sidebar-menu">
    <div class="tit_sb_nav">Chè xanh quê hương</div>
    <ul id="sb-menu-che-xanh" class="full"><li id="menu-item-1259" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1259"><a href="https://che-sach.com/la-khoi/">Lá Khôi</a></li>
      <li id="menu-item-1251" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1251"><a href="https://che-sach.com/che-day/">Chè Dây</a></li>
      <li id="menu-item-1252" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1252"><a href="https://che-sach.com/che-dang/">Chè Đắng</a></li>
      <li id="menu-item-1260" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1260"><a href="https://che-sach.com/tao-meo/">Táo Mèo</a></li>
      <li id="menu-item-1256" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1256"><a href="https://che-sach.com/che-vang/">Chè Vằng</a></li>
      <li id="menu-item-1262" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1262"><a href="https://che-sach.com/tra-cu/">Trà Cụ</a></li>
      <li id="menu-item-1941" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1941"><a href="https://che-sach.com/che-dung/">Chè Dung</a></li>
      <li id="menu-item-1257" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1257"><a href="https://che-sach.com/hong-tra/">Hồng Trà</a></li>
      <li id="menu-item-1843" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1843"><a href="https://che-sach.com/am-tu-sa/">Ấm Tử Sa</a></li>
      <li id="menu-item-1265" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1265"><a href="https://che-sach.com/tra-o-long/">Trà Ô Long</a></li>
      <li id="menu-item-1268" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1268"><a href="https://che-sach.com/tra-ta-xua/">Trà Tà Xùa</a></li>
      <li id="menu-item-1250" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1250"><a href="https://che-sach.com/bot-tra-xanh/">Bột Trà Xanh</a></li>
      <li id="menu-item-1264" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1264"><a href="https://che-sach.com/tra-hoa-cuc/">Trà Hoa Cúc</a></li>
      <li id="menu-item-1266" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1266"><a href="https://che-sach.com/tra-sam-dua/">Trà Sâm Dứa</a></li>
      <li id="menu-item-1253" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1253"><a href="https://che-sach.com/che-suoi-giang/">Chè Suối Giàng</a></li>
      <li id="menu-item-1255" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1255"><a href="https://che-sach.com/che-thai-nguyen/">Chè Thái Nguyên</a></li>
      <li id="menu-item-1254" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1254"><a href="https://che-sach.com/che-tay-con-linh/">Chè Tây Côn Linh</a></li>
      <li id="menu-item-1263" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1263"><a href="https://che-sach.com/tra-diep-ha-chau/">Trà Diệp Hạ Châu</a></li>
      <li id="menu-item-1844" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1844"><a href="https://che-sach.com/tra-thiet-quan-am/">Trà Thiết Quan Âm</a></li>
      <li id="menu-item-1261" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1261"><a href="https://che-sach.com/thiet-bi-nganh-che/">Thiết Bị Ngành Chè</a></li>
      <li id="menu-item-1267" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1267"><a href="https://che-sach.com/tra-son-mat-hong-sam/">Trà Sơn Mật Hồng Sâm</a></li>
    </ul>  
  </div>
  <div class="sb-box sidebar-menu">
    <div class="tit_sb_nav">bàn trà điện</div>
    <ul id="sb-menu" class="full"><li id="menu-item-1940" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1940"><a href="https://che-sach.com/khay-tra-go/">Khay Trà Gỗ</a></li>
      <li id="menu-item-1241" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1241"><a title="Bàn trà điện đa năng DT01" href="https://che-sach.com/ban-tra-dien-da-nang-dt01/">Bàn trà điện đa năng DT01</a></li>
      <li id="menu-item-1240" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1240"><a title="Bàn trà điện đa năng DT02" href="https://che-sach.com/ban-tra-dien-da-nang-dt02/">Bàn trà điện đa năng DT02</a></li>
      <li id="menu-item-1239" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1239"><a title="Bàn trà điện đa năng DT03" href="https://che-sach.com/ban-tra-dien-da-nang-dt03/">Bàn trà điện đa năng DT03</a></li>
      <li id="menu-item-1403" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1403"><a href="https://che-sach.com/ban-tra-dien-dt04/">Bàn trà điện đa năng DT04</a></li>
      <li id="menu-item-1401" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1401"><a href="https://che-sach.com/ban-tra-dien-da-nang-dt05/">Bàn trà điện đa năng DT05</a></li>
      <li id="menu-item-1402" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1402"><a href="https://che-sach.com/ban-tra-dien-da-nang-dt06/">Bàn trà điện đa năng DT06</a></li>
      <li id="menu-item-1400" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1400"><a href="https://che-sach.com/ban-tra-dien-da-nang-dt07/">Bàn trà điện đa năng DT07</a></li>
      <li id="menu-item-1399" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1399"><a href="https://che-sach.com/ban-tra-dien-da-nang-dt08/">Bàn trà điện đa năng DT08</a></li>
      <li id="menu-item-1936" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1936"><a href="https://che-sach.com/bep-dun-tra-tu-dong-b21-f90/">Bếp đun trà tự động B21-F90</a></li>
      <li id="menu-item-1937" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1937"><a href="https://che-sach.com/bep-dun-tra-tu-dong-b22-k30/">Bếp đun trà tự động B22-K30</a></li>
    </ul>  
  </div>       
  <div id="list_post_id-2" class="LP full full sb-box"><div class="tit_sb ">Tin nổi bật</div>   <ul class="list_post full">
  <li class="full">

    <div class="img left">
      <a href="https://che-sach.com/tin-tuc/tra-co-thu-suoi-giang-voi-nguoi-hmong-noi-day/" title="Trà cổ thụ Suối Giàng với người H&#8217;mong nơi đây" ><img src="https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-12-375x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="kham-pha-oc-dao-che-thanh-chuong-nghe-an-26" srcset="https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-12-375x250.jpg 375w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-12-400x267.jpg 400w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-12-768x512.jpg 768w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-12-600x400.jpg 600w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-12.jpg 960w" sizes="(max-width: 375px) 100vw, 375px" /></a>
    </div>
    <div class="wr-right">
      <p><a href="https://che-sach.com/tin-tuc/tra-co-thu-suoi-giang-voi-nguoi-hmong-noi-day/" title="Trà cổ thụ Suối Giàng với người H&#8217;mong nơi đây" class="cl_tinnoibat">Trà cổ thụ Suối Giàng với người H&#8217;mong nơi đây</a></p>
      <p class="date cl_tinnoibat">Thursday, 20/04/2017</p>
    </div>

  </li>
  <li class="full">

    <div class="img left">
      <a href="https://che-sach.com/tin-tuc/tra-shan-tuyet-khau-mut-can-lam-nhung-ba-do/" title="Trà shan tuyết Khau Mút cần lắm những bà đỡ" ><img src="https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-1-188x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" srcset="https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-1-188x250.jpg 188w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-1-400x533.jpg 400w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-1-450x600.jpg 450w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-1.jpg 720w" sizes="(max-width: 188px) 100vw, 188px" /></a>
    </div>
    <div class="wr-right">
      <p><a href="https://che-sach.com/tin-tuc/tra-shan-tuyet-khau-mut-can-lam-nhung-ba-do/" title="Trà shan tuyết Khau Mút cần lắm những bà đỡ" class="cl_tinnoibat">Trà shan tuyết Khau Mút cần lắm những bà đỡ</a></p>
      <p class="date cl_tinnoibat">Tuesday, 18/04/2017</p>
    </div>

  </li>
  <li class="full">

    <div class="img left">
      <a href="https://che-sach.com/tin-tuc/huong-dan-phan-biet-tra-pho-nhi/" title="Hướng dẫn phân biệt Trà Phổ Nhĩ" ><img src="https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3-188x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" srcset="https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3-188x250.jpg 188w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3-400x533.jpg 400w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3-450x600.jpg 450w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3.jpg 720w" sizes="(max-width: 188px) 100vw, 188px" /></a>
    </div>
    <div class="wr-right">
      <p><a href="https://che-sach.com/tin-tuc/huong-dan-phan-biet-tra-pho-nhi/" title="Hướng dẫn phân biệt Trà Phổ Nhĩ" class="cl_tinnoibat">Hướng dẫn phân biệt Trà Phổ Nhĩ</a></p>
      <p class="date cl_tinnoibat">Monday, 17/04/2017</p>
    </div>

  </li>
  <li class="full">

    <div class="img left">
      <a href="https://che-sach.com/tin-tuc/kham-pha-nhung-cho-tra-o-thai-nguyen/" title="Khám phá những chợ trà ở Thái Nguyên" ><img src="https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-375x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="kham-pha-oc-dao-che-thanh-chuong-nghe-an-26" srcset="https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-375x250.jpg 375w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-400x267.jpg 400w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-768x512.jpg 768w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-600x400.jpg 600w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13.jpg 960w" sizes="(max-width: 375px) 100vw, 375px" /></a>
    </div>
    <div class="wr-right">
      <p><a href="https://che-sach.com/tin-tuc/kham-pha-nhung-cho-tra-o-thai-nguyen/" title="Khám phá những chợ trà ở Thái Nguyên" class="cl_tinnoibat">Khám phá những chợ trà ở Thái Nguyên</a></p>
      <p class="date cl_tinnoibat">Saturday, 15/04/2017</p>
    </div>

  </li>
  <li class="full">

    <div class="img left">
      <a href="https://che-sach.com/tin-tuc/hoang-su-phi-huong-den-phat-trien-ben-vung-tra-huu-co/" title="Hoàng Su Phì: Hướng đến phát triển bền vững trà hữu cơ" ><img src="https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-375x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="kham-pha-oc-dao-che-thanh-chuong-nghe-an-26" srcset="https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-375x250.jpg 375w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-400x267.jpg 400w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-768x512.jpg 768w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-600x400.jpg 600w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13.jpg 960w" sizes="(max-width: 375px) 100vw, 375px" /></a>
    </div>
    <div class="wr-right">
      <p><a href="https://che-sach.com/tin-tuc/hoang-su-phi-huong-den-phat-trien-ben-vung-tra-huu-co/" title="Hoàng Su Phì: Hướng đến phát triển bền vững trà hữu cơ" class="cl_tinnoibat">Hoàng Su Phì: Hướng đến phát triển bền vững trà hữu cơ</a></p>
      <p class="date cl_tinnoibat">Friday, 14/04/2017</p>
    </div>

  </li>
</ul>
</div>    <div class="sb-box full tag-box">
<div class="tit_sb">Từ khóa tìm kiếm</div>
<ul id="tag-menu" class="sb-box"><li id="menu-item-1242" class="menu-item menu-item-type-taxonomy menu-item-object-post_tag menu-item-1242"><a href="https://che-sach.com/tag/cao-che-vang/">cao chè vằng</a></li>
  <li id="menu-item-1243" class="menu-item menu-item-type-taxonomy menu-item-object-post_tag menu-item-1243"><a href="https://che-sach.com/tag/cay-che-day/">cây chè dây</a></li>
  <li id="menu-item-1244" class="menu-item menu-item-type-taxonomy menu-item-object-post_tag menu-item-1244"><a href="https://che-sach.com/tag/cay-che-dang/">cây chè đắng</a></li>
  <li id="menu-item-1245" class="menu-item menu-item-type-taxonomy menu-item-object-post_tag menu-item-1245"><a href="https://che-sach.com/tag/am-chen-tu-sa/">ấm chén tử sa</a></li>
  <li id="menu-item-1246" class="menu-item menu-item-type-taxonomy menu-item-object-post_tag menu-item-1246"><a href="https://che-sach.com/tag/am-tra-tu-sa/">ấm trà tử sa</a></li>
  <li id="menu-item-1247" class="menu-item menu-item-type-taxonomy menu-item-object-post_tag menu-item-1247"><a href="https://che-sach.com/tag/ban-tra/">ban tra</a></li>
</ul>  
</div>
<div id="text-2" class="widget_text full sb-box">     <div class="textwidget"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fchesachvn%2F&tabs=timeline&width=255&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
</div>
</div>
<!-- /sidebar -->
</div>
</div>
</div>
<?php get_template_part('parter','') ?>
<?php get_template_part('footer','content') ?>
<?php get_footer(); ?>