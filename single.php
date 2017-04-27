<?php get_header(); ?>
<div class="title">
		<div class="overlay">
			<div class="container overlay-content">
				<h1 class="cat-title"><span><?php echo the_title(); ?></span></h1>
				
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="content col-xs-12 col-sm-6 col-md-9">
			<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?> 
				
					<?php the_content();?>
				
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