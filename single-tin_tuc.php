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
    <div class="boxgiua_wrap">
      <div class="header_layer_1">
        <div class="header_layer_2"> 
          <h1 class="header  headline">
            <span>
              <label><?php the_title();?>
              </label>
            </span>
          </h1>
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
                
                <div class="noidungchitiet">  
				 <div class="detail" style="margin: 15px 0px 30px; padding: 0px; border: 0px; float: left; width: 100%; overflow: hidden; color: #010101; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 15px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;" >
					 <?php if (have_posts()) : ?>

							<?php while (have_posts()) : the_post(); ?> 
					<?php the_content();?>
					<?php endwhile; ?>
							
							<?php else : ?>
							<h1>Chưa có nội dung</h1>
							<?php endif; ?>
                    </div>
				<div class="fb-comments" data-href="<?php the_permalink();?>" data-numposts="5"></div>
                </div>
                
                <br>
                <br>
                <br style="clear:both">
               
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
