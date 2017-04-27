<?php get_header();
?>
<div class="main_panel_margin">
  <div id="container3">
    <div id="container2">
      <div id="container1">
        <div id="cot_trai">
          <div id="cot_trai_inner_div">
          </div>
        </div>
        <div id="cot_giua">
          <div id="cot_giua_inner_div">
            <div class="boxgiua_wrap_117 header_danhmuc_7">
              <div class="header_layer_1">
                <div class="header_layer_2"> 
                  <h2 class="header">
                    <span>
                      <label>
                        <a class="tab_current_gianhang" href="http://localhost/vietkien/category/nha-pho/thiet-ke-nha-pho-dep/">THIẾT KẾ NHÀ PHỐ                                  
                        </a>
                      </label>
                    </span>
                  </h2>
                </div> 
              </div>
              <div class="boxgiua_tren">
                <span>
                  <label>
                  </label>
                </span>
              </div> 
              <div class="box_content_layer_l">
                <div class="box_content_layer_2">
                  <div class="boxgiua">
                    <div class="boxgiua_lop1">
                      <div class="boxgiua_lop2">
                       
						<div class="baiviet_danhsach"> 
						  <div class="baiviet_table"> 
							<div class="baiviet_row">
							  <?php if (have_posts()) : ?>

							<?php while (have_posts()) : the_post(); ?> 
							  <div class="baiviet_cell">
								<h2>
								  <a class="tin_danhsach" href="<?php the_permalink();?>"><?php the_title();?>
								  </a>
								</h2>
								<div>
								</div>
								<a class="nut_xem_them_tin_tuc" href="<?php the_permalink();?>">Xem chi tiết
								</a>
								<br class="clear1px">
							  </div>
							 <?php endwhile; ?>
							<div class='wp-pagenavi'>
								<?php wp_pagenavi()?>		
							</div>
							<?php else : ?>
							<?php endif; ?>
							</div>
						  </div>
						</div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer_layer_l">
                <div class="footer_layer_2">
                  <div class="boxgiua_chan">
                    <span>
                      <label>
                      </label>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div id="mystickytooltip" class="stickytooltip">
              <div style="padding:5px">
              </div>
              <div class="stickystatus">
              </div>
            </div>
          </div>
        </div>
        <?php get_sidebar();?>
      </div>
    </div> 
  </div>
</div> 
<?php get_footer(); ?>
