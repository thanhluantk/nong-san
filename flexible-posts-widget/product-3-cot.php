<?php
/**
 * Flexible Posts Widget: Default widget template
 * 
 * @since 3.4.0
 *
 * This template was added to overcome some often-requested changes
 * to the old default template (widget.php).
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');
echo $before_widget;?>

<div class="main-block-title pink-title">
                 <?php if ( !empty($title) )?>
	<h2><a href="<?php echo $link;?>"><?php echo $title;?></a></h2>
                  <div class="clearfix">
                  </div>
                </div>
  

<?php
if ( $flexible_posts->have_posts() ):
?>
<div id="exTab3" class="sk-tab-product sk-block-with-border-triangle">	
                  <div class="tab-content clearfix">
                    <div class="tab-pane active" id="1b">
	<?php while ( $flexible_posts->have_posts() ) : $flexible_posts->the_post();  global $product; ?>
		<div class="col-md-4 col-sm-4 col-xs-6">
			<div class="discounts-product-right">
			<?php if($product->is_on_sale() && $product->product_type == 'simple') : ?>
			<div class="sale-box">
                      <span class="price">- 
                       <?php 
							$percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
							echo $price . sprintf( __('%s', 'woocommerce' ), $percentage . '%' ); ?>
                      </span>
                    </div>
					<?php endif; ?>
			  <div class="discounts-product-image">
				<a href="<?php the_permalink();?>">
				  <?php if ( has_post_thumbnail() ) {
									$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
									?>
				  <img src="<?php echo $large_image_url[0] ;?>" alt="<?php the_title();?>" class="img-responsive">
				   <?php } ?>
				</a>
				
			  </div>
			  <div class="price-box"> 
				  <span class="price"><?php echo $product->get_price_html(); ?>
				  </span>
				</div>
			  <div class="discounts-product-info">
				<h3 class="item-title"> 
				  <a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?>
				  </a>
				</h3>
			  </div>
			  <div class="text-center">
                    <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                      </div>
			</div>
		  </div>
	
	<?php endwhile; ?>
	</div>
	</div>
	</div>
<?php	
endif; // End have_posts()
echo $after_widget;