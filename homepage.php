<?php get_header();
?>

<h1 class="hidden-xs hidden-sm hidden-md hidden-lg">Kidshop
      </h1>
      <div class="container">
	  
       <div class="home-slider col-md-offset-3 col-md-6 col-sm-8 col-xs-12"><?php 
			echo do_shortcode("[metaslider id=17]"); 
		?>
		</div> 
		<div class="home-policy policy col-md-3 col-sm-4 col-xs-12 hidden-xs">
		<div class="main-categories">
              <div class="block-title-a">Hỗ trợ trực tuyến
              </div>
              <div class="ho-tro">
					
<?php dynamic_sidebar('ho-tro-home'); ?>
					
              </div>
            </div>
		</div>
      </div>
	  <div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php dynamic_sidebar('product-rela'); ?>
			</div>
		</div>
	  </div>
      <div class="sk-homepage-layout-leftSidebar">
        
		<div class="container">
			<div class="row">
				  
				  
				  <aside class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<?php dynamic_sidebar('sidebar-left'); ?>
				  </aside>
				  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					
					<section class="sk-home-main-block sk-tab-product">
					<?php dynamic_sidebar('product-girl'); ?>
					</section>
				  </div>
				</div>

		</div>
        <div class="sk-news-section">
          <div class="container">
            <?php dynamic_sidebar('new-home'); ?>
            
          </div>
        </div>
      </div>
<?php get_footer(); ?>