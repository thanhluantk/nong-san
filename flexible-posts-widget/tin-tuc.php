<?php
/**
 * Flexible Posts Widget: Old Default widget template
 * 
 * @since 1.0.0
 *
 * This is the ORIGINAL default template used by the plugin.
 * There is a new default template (default.php) that will be 
 * used by default if no template was specified in a widget.
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

echo $before_widget;
?>
<div class="section-header">
              <div class="product-care-title">
              
				<h2><?php echo $title;?></h2>
              </div>
            </div>

<?php
if( $flexible_posts->have_posts() ):
?>
 <div class="sk-news-list">
              <div class="row-new">
	<?php while( $flexible_posts->have_posts() ) : $flexible_posts->the_post(); global $post; ?>
		<div class="col-md-4 col-sm-4 sk-news-item">
		  <div class="sk-news-item-inner">
			<div class="col-md-6 col-sm-6 sk-news-image no-padding-left">
			  <a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) {
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
						?>
					  <img src="<?php echo $large_image_url[0] ;?>" alt="<?php the_title();?>" class="img-responsive">
					   <?php } ?>
			  </a>
			</div>
			<div class="col-md-6 col-sm-6 sk-news-content no-padding">
			  <h5>
				<a href="<?php the_permalink(); ?>"><?php the_title();?>
				</a>
			  </h5>
			  <div class="sk-news-description">
				<?php the_content_rss('', TRUE, '', 20); ?>
			  </div>
			</div>
			<div class="clearfix">
			</div>
		  </div>
		</div>
	<?php endwhile; ?>
	<div class="clearfix">
                </div>
              </div>
            </div>
<?php else: // We have no posts ?>
<?php	
endif; // End have_posts()
	
echo $after_widget;
