<?php get_header(); ?>
<div class="title">
		<div class="overlay">
			<div class="container overlay-content">
				<h1 class="cat-title"><span><?php echo single_cat_title(); ?></span></h1>
				<div class="text-center"><?php echo category_description(); ?></div>
				<div class="center-block rating-block">
					
					<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif; ?>
					<!-- kk-star-ratings -->
					<br clear="both" />
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="content col-xs-12 col-sm-6 col-md-9">
			<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?> 
				<div class="list-post wow fadeInDown animated">
					<a class="col-xs-12 col-sm-12 col-md-3 img-tin-tuc" href="<?php the_permalink();?>" title="<?php the_title();?>">
					  <?php if ( has_post_thumbnail() ) {
									$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
									?>
				<img width="960" height="640" src="<?php echo $large_image_url[0] ;?>" class="img-responsive center-block wp-post-image" alt="<?php the_title();?>" />
				  <?php } ?>
					 </a>
					<div class="col-xs-12 col-sm-12 col-md-9"> <a class="post-title" href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
						<div class="post-meta"><span>Đăng vào: </span><?php the_time(); ?> - <span> Bởi: </span><?php the_author_posts_link(); ?></div>
						<p class="post-content"><?php the_content_rss('', TRUE, '', 60); ?></p>
						
					</div>
				</div>
				<?php endwhile; ?>
					<div class='wp-pagenavi'>
				<?php wp_pagenavi()?>		
					</div>
					<?php else : ?>

						<h2>Đang cập nhật</h2>

					<?php endif; ?>
				
			</div>
			<?php get_sidebar();?>
		</div>
	</div>
<?php get_footer(); ?>