<?php get_header();?>
<div class="full">
  <div class="container ">
    <div class="+row full rows1">
      <div id="left-panel" class="col-lg-9 col-md-9">

        <div class="full status border bg_white">
          <?php echo do_shortcode('[show_testimonials]'); ?>
        </div>
        <div id="list_product_thumb_id-2" class="LProdT homebox"><h2 class="tit_box">Sản phẩm tiêu biểu</h2>

          <div class="+row full mar10 ">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <div class=" item0  col-lg-4 col-sm-4 text-center">
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
               </div>  <!--/ .items  -->
             </div> 
           <?php endwhile; ?>           
         <?php endif; ?>                       
    </div>

  </div><div class="clear space20"></div><div id="list_post_thumb_id-3" class="LPT homebox"><h2 class="tit_box">Hướng dẫn sử dụng chè</h2>

  <div class="row full mart20 ">
 <?php 
  $cat_query = new WP_Query('posts_per_page=4 & category_name=tin tức' );
  ?>
  <?php 
    $i = 1;
    if ( have_posts() ) : ?>
     <?php while ($cat_query -> have_posts() ) : $cat_query->the_post(); ?> 
    <?php if ( 1 === $i ) : ?>
      
         <div class="news_item_content first">
          <div class="news_item_content_img">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
              <?php if(has_post_thumbnail() ) : ?>
                <?php $large_image_url = wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ); ?> 
                <img width="960" height="640" src="<?php echo $large_image_url ;?>" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="<?php the_title(); ?>" />
              <?php endif; ?>
            </a>
          </div>
          <div class="news_item_content_right">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><h3 class="news_item_content_title"><?php the_title(); ?></h3></a>
            <span class="date"><?php echo get_the_date(); ?></span>
            <span class="short_content"><?php the_content_rss('', TRUE, '', 40); ?></span>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="detail">
              <?php lktheme_readmore(); ?></a>
            </div>
          </div>
      <?php $i++ ?>  
    <?php else : ?>
        <div class="news_item_content">
          <div class="news_item_content_img">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
              <?php if(has_post_thumbnail() ) : ?>
                <?php $large_image_url = wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ); ?> 
                <img width="960" height="640" src="<?php echo $large_image_url ;?>" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="<?php the_title(); ?>" />
              <?php endif; ?>
            </a></div>
            <div class="full">
              <a href="<?php the_permalink(); ?>" title="Phân biệt trà shan tuyết cổ thụ và trà shan tuyết" ><h3 class="news_item_content_title"><?php the_title(); ?></h3></a>
              <span class="date"><?php echo get_the_date(); ?></span>
            </div>
          </div>
      <?php endif; ?>
      <?php endwhile; ?>           
    <?php endif; ?>
  
    <div class="clear"></div>     
    
  </div>

</div>

<div class="clear space20"></div><div id="get_khach_hang_id-2" class="khach-hang homebox"><h2 class="tit_box">Ý kiến khách hàng</h2>

<div class="full customer" style="opacity: 1; display: block;">
<?php
wp_reset_postdata();


  $args = array(
    
    
    //Type & Status Parameters
    'post_type'   => 'starter_testimonial',
    // 'post_status' => 'public',
    

    
    //Pagination Parameters
    'posts_per_page'         => 8,
    
    
    //Taxonomy Parameters
    'tax_query' => array(
        array(
          'taxonomy'         => 'starter_testimonial_cat',
          'field'            => 'slug',
          'terms' => array('y-kien-khach-hang'),
        
        ),
    ),
  );

$query = new WP_Query( $args );

echo '<div data-init="slick" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="" data-owl-nav="true" data-owl-dots="true" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="3" data-owl-item-lg="1" data-owl-nav-left="&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;" data-owl-counter="true" data-target="2" class="ac-owlslider ac-owl-slider-section ac-owlslider--center">';

if ( $query->have_posts() ) :
  while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="item">
      <div class="nongsan_avatar">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="nongsan_desc">
        <?php the_content(); ?>
      </div> 
      
    </div>
  <?php
 endwhile;
endif;
 echo '</div>';

// wp_reset_postdata();

?>

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
      <a href="https://che-sach.com/tin-tuc/tra-co-thu-suoi-giang-voi-nguoi-hmong-noi-day/" title="Trà cổ thụ Suối Giàng với người H’mong nơi đây"><img src="https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-12-375x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="kham-pha-oc-dao-che-thanh-chuong-nghe-an-26" srcset="https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-12-375x250.jpg 375w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-12-400x267.jpg 400w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-12-768x512.jpg 768w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-12-600x400.jpg 600w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-12.jpg 960w" sizes="(max-width: 375px) 100vw, 375px"></a>
    </div>
    <div class="wr-right">
      <p><a href="https://che-sach.com/tin-tuc/tra-co-thu-suoi-giang-voi-nguoi-hmong-noi-day/" title="Trà cổ thụ Suối Giàng với người H’mong nơi đây" class="cl_tinnoibat">Trà cổ thụ Suối Giàng với người H’mong nơi đây</a></p>
      <p class="date cl_tinnoibat">Thursday, 20/04/2017</p>
    </div>

  </li>
  <li class="full">

    <div class="img left">
      <a href="https://che-sach.com/tin-tuc/tra-shan-tuyet-khau-mut-can-lam-nhung-ba-do/" title="Trà shan tuyết Khau Mút cần lắm những bà đỡ"><img src="https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-1-188x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" srcset="https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-1-188x250.jpg 188w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-1-400x533.jpg 400w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-1-450x600.jpg 450w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-1.jpg 720w" sizes="(max-width: 188px) 100vw, 188px"></a>
    </div>
    <div class="wr-right">
      <p><a href="https://che-sach.com/tin-tuc/tra-shan-tuyet-khau-mut-can-lam-nhung-ba-do/" title="Trà shan tuyết Khau Mút cần lắm những bà đỡ" class="cl_tinnoibat">Trà shan tuyết Khau Mút cần lắm những bà đỡ</a></p>
      <p class="date cl_tinnoibat">Tuesday, 18/04/2017</p>
    </div>

  </li>
  <li class="full">

    <div class="img left">
      <a href="https://che-sach.com/tin-tuc/huong-dan-phan-biet-tra-pho-nhi/" title="Hướng dẫn phân biệt Trà Phổ Nhĩ"><img src="https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3-188x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="" srcset="https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3-188x250.jpg 188w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3-400x533.jpg 400w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3-450x600.jpg 450w, https://che-sach.com/wp-content/uploads/2017/04/doi-che-yen-bai-3.jpg 720w" sizes="(max-width: 188px) 100vw, 188px"></a>
    </div>
    <div class="wr-right">
      <p><a href="https://che-sach.com/tin-tuc/huong-dan-phan-biet-tra-pho-nhi/" title="Hướng dẫn phân biệt Trà Phổ Nhĩ" class="cl_tinnoibat">Hướng dẫn phân biệt Trà Phổ Nhĩ</a></p>
      <p class="date cl_tinnoibat">Monday, 17/04/2017</p>
    </div>

  </li>
  <li class="full">

    <div class="img left">
      <a href="https://che-sach.com/tin-tuc/kham-pha-nhung-cho-tra-o-thai-nguyen/" title="Khám phá những chợ trà ở Thái Nguyên"><img src="https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-375x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="kham-pha-oc-dao-che-thanh-chuong-nghe-an-26" srcset="https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-375x250.jpg 375w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-400x267.jpg 400w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-768x512.jpg 768w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-600x400.jpg 600w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13.jpg 960w" sizes="(max-width: 375px) 100vw, 375px"></a>
    </div>
    <div class="wr-right">
      <p><a href="https://che-sach.com/tin-tuc/kham-pha-nhung-cho-tra-o-thai-nguyen/" title="Khám phá những chợ trà ở Thái Nguyên" class="cl_tinnoibat">Khám phá những chợ trà ở Thái Nguyên</a></p>
      <p class="date cl_tinnoibat">Saturday, 15/04/2017</p>
    </div>

  </li>
  <li class="full">

    <div class="img left">
      <a href="https://che-sach.com/tin-tuc/hoang-su-phi-huong-den-phat-trien-ben-vung-tra-huu-co/" title="Hoàng Su Phì: Hướng đến phát triển bền vững trà hữu cơ"><img src="https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-375x250.jpg" class="attachment-thumb-cat size-thumb-cat wp-post-image" alt="kham-pha-oc-dao-che-thanh-chuong-nghe-an-26" srcset="https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-375x250.jpg 375w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-400x267.jpg 400w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-768x512.jpg 768w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13-600x400.jpg 600w, https://che-sach.com/wp-content/uploads/2017/04/kham-pha-oc-dao-che-thanh-chuong-nghe-an-13.jpg 960w" sizes="(max-width: 375px) 100vw, 375px"></a>
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
<div id="text-2" class="widget_text full sb-box">     <div class="textwidget"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fchesachvn%2F&amp;tabs=timeline&amp;width=255&amp;height=500&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
</div>
</div>
<!-- /sidebar -->
</div>
</div>
</div>
<?php get_template_part('parter','') ?>
<?php get_template_part('footer','content') ?>
<?php get_footer(); ?>