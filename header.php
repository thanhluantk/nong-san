<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
  <link rel="pingback" type="text/css" href="<?php bloginfo('pingback_url'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if (is_search()) { ?>
  <meta name="robots" content="index, follow, all" /> 
  <?php } ?>

  <title>
   <?php
   if (function_exists('is_tag') && is_tag()) {
     single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
     elseif (is_archive()) {
       wp_title(''); echo ' Marchitect - '; }
       elseif (is_search()) {
         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
         elseif (!(is_404()) && (is_single()) || (is_page())) {
           wp_title(''); echo ' - '; }
           elseif (is_404()) {
             echo 'Not Found - '; }
             if (is_home()) {
               bloginfo('name'); echo ' - '; bloginfo('description'); }
               else {
                bloginfo('name'); }
                if ($paged>1) {
                 echo ' - page '. $paged; }
                 ?>
               </title>
               <style type="text/css">
                img.wp-smiley,
                img.emoji {
                 display: inline !important;
                 border: none !important;
                 box-shadow: none !important;
                 height: 1em !important;
                 width: 1em !important;
                 margin: 0 .07em !important;
                 vertical-align: -0.1em !important;
                 background: none !important;
                 padding: 0 !important;
               }
             </style>

             <link rel='https://api.w.org/' href='https://che-sach.com/wp-json/' />
             <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
             <?php wp_head(); ?>
           </head>

           <body data-rsssl=1 class="home">
            <div class="top_bar bg_xanh6">
              <div class="container">
                <div class="row">
                  <div class="left top_3icons">
                    <a href="" title=""><img src="<?php echo bloginfo('template_directory'); ?>/images/h-i-face.png" alt="associal"></a>
                    <a href="" title=""><img src="<?php echo bloginfo('template_directory'); ?>/images/h-i-skype.png" alt="associal"></a>
                    <a href="" title=""><img src="<?php echo bloginfo('template_directory'); ?>/images/h-i-g-plus.png" alt="associal"></a>
                  </div>
                  <div class="right"><a href="tel:0984904686" title="Hotline 0984904686" class="top_hotline font18 cl_white bg_xanh6">0984.904.686</a></div>
                </div>
              </div>
            </div>
            <header class="header">
              <div class="container">
                <div class="row">
                  <div class="col-sm-5 col-md-5 text-center logo">
                  <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>

                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                      <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                    </a>
                  <?php else : ?>
                    <hgroup>
                      <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                      <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
                    </hgroup>
                  <?php endif; ?>
                  </div>
                  <div class="destop col-sm-2 col-md-2 text-center slogan "><img class="img-max-full" src="<?php echo bloginfo('template_directory'); ?>/images/h-lache.png" alt="Nông sản đất Quảng &#8211; Đặc sản"></div>
                  <div class="col-sm-5 col-md-5 text-center info_header"><img src="<?php echo bloginfo('template_directory'); ?>/images/cod.png" alt="Nông sản đất Quảng &#8211; Đặc sản"></div>
                </div>
                <!-- /.row -->

              </div>
            </header>

            <!-- Navigation -->
            <div class="wr-nav bg_white">
              <div class="container">
                <nav class="row navbar ">
                  <div class="navbar-header bg_xanh6">
                    <div class="left hotline_bar_mobile mobile"><a href="tel:0984904686" class="top_hotline font18 cl_white bg_xanh6">0984.904.686</a></div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainnav">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar bg_white"></span>
                      <span class="icon-bar bg_white"></span>
                      <span class="icon-bar bg_white"></span>
                    </button>                
                  </div>

                  <div class="collapse navbar-collapse text-uppercase" id="mainnav">
                    <?php wp_nav_menu( array(
                     'theme_location' => 'main-menu', 
                     'container' => false, 
                     'menu_class' => 'nav navbar-nav fullw cl_nav' 
                     ) ); ?>
                   </div>
                   <!-- /.navbar-collapse -->
                 </nav>
               </div>
               <!-- /.container -->
             </div><!-- /.wrnav --><!-- Navigation -->
             <div class="fullw slider">
              <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 473px; ">
                  <?php 
              echo do_shortcode("[metaslider id=53]"); 
              ?>
              </div></div>
             
             