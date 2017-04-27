<?php
    require_once('wp_bootstrap_navwalker.php');
    //Add Driectory 
    define('THEME_URL', get_template_directory_uri() );	
	// Add RSS links to <head> section
	automatic_feed_links();
    if(!isset($content_width)){
    $content_width = 620;
    }
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	//Register Menu
	function register_my_menus() {
      register_nav_menus(
        array(
          'main-menu' => __( 'Main Menu' )
        )
      );
    }
    add_action( 'init', 'register_my_menus' );

	 if (function_exists('register_nav_menus')){
	register_nav_menu( 'top_menu', __( 'Top Menu', 'flat' ) );
	}
	 if (function_exists('register_nav_menus')) {
        register_nav_menus (
            array(
                'bottom' => 'Bottom Menu'
            )
        );
    }
	
//Add logo header
    function themeslug_theme_customizer( $wp_customize ) {
   $wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );

$wp_customize->add_setting( 'themeslug_logo' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
) ) );
}
add_action( 'customize_register', 'themeslug_theme_customizer' );

// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Top header hotline',
            'id'   => 'hotline-header',
            'description'   => 'These are widgets for Top header Widgets.',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => ''
        ));
        register_sidebar(array(
            'name' => 'Số điện thoại chạy dọc',
            'id'   => 'phone-fix',
            'description'   => 'These are widgets for Top header Widgets.',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => ''
        ));
        register_sidebar(array(
            'name' => 'Top header Widgets',
            'id'   => 'top-header',
            'description'   => 'These are widgets for Top header Widgets.',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => ' ',
            'after_title'   => ''
        ));
        register_sidebar(array(
            'name' => 'Hỗ trợ + blog',
            'id'   => 'blog',
            'description'   => 'Hỗ trợ + blog',
            'before_widget' => '<div class="col-md-6 col-sm-6 col-xs-12 item-menu">
              <div class="row">',
            'after_widget'  => '</div></div>',
            'before_title'  => '',
            'after_title'   => ''
        ));
        register_sidebar(array(
            'name' => 'Hỗ trợ trực tuyến trang chủ',
            'id'   => 'ho-tro-home',
            'description'   => 'Hỗ trợ trực tuyến trang chủ',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => ''
        ));
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id'   => 'sidebar',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h5 class="title-left">',
            'after_title'   => '</h5>'
        ));
         register_sidebar(array(
        'name' => 'Sidebar Bên trái trang chủ',
        'id'   => 'sidebar-left',
        'description'   => 'Sidebar Bên trái trang chủ để hiển thị logo đối tác + sản phẩm bán chạy ',
        'before_widget' => '<div class="sk-leftSidebar-widget trademark-widget sellingProducts-widget ">',
        'after_widget'  => '<div class="clearfix">
                </div></div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>'
        ));

       register_sidebar(array(
       'name' => 'Sản phẩm 3 cột',
        'id'   => 'product-news',
        'description'   => 'Hàng mới về (trang chủ) để hiển thị sản phẩm theo kiểu 3 cột 2 hàng ',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
        ));
       register_sidebar(array(
       'name' => 'Slider sản phẩm (trang chủ)',
        'id'   => 'product-rela',
        'description'   => 'Slider sản phẩm (trang chủ) để hiển thị sản phẩm theo kiểu slider ',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
        ));
       register_sidebar(array(
       'name' => 'Giày nữ đẹp (trang chủ)',
        'id'   => 'product-girl',
        'description'   => 'Giày nữ đẹp (trang chủ) để hiển thị sản phẩm theo kiểu 4 cột 2 hàng ',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
        ));
    
       register_sidebar(array(
       'name' => 'Tin tức trang chủ',
        'id'   => 'new-home',
        'description'   => 'Tin tức trang chủ dùng template tin tuc ',
        'before_widget' => '',
        'after_widget'  => '<br>',
        'before_title'  => ' <h5 class="sk-qickLink-title">',
        'after_title'   => '</h5>'
        ));
       register_sidebar(array(
       'name' => 'Footer 1',
        'id'   => 'foot1',
        'description'   => 'Footer 1 ',
        'before_widget' => '',
        'after_widget'  => '<br>',
         'before_title'  => ' <h5 class="sk-qickLink-title">',
        'after_title'   => '</h5>'
        ));
       register_sidebar(array(
       'name' => 'Footer 2',
        'id'   => 'foot2',
        'description'   => 'Footer 2 ',
        'before_widget' => '',
        'after_widget'  => '<br>',
       'before_title'  => ' <h5 class="sk-qickLink-title">',
        'after_title'   => '</h5>'
        ));
       register_sidebar(array(
       'name' => 'Footer 3',
        'id'   => 'foot3',
        'description'   => 'Footer 3 ',
        'before_widget' => '',
        'after_widget'  => '<br>',
         'before_title'  => ' <h5 class="sk-qickLink-title">',
        'after_title'   => '</h5>'
        ));
       register_sidebar(array(
       'name' => 'Footer 4',
        'id'   => 'foot4',
        'description'   => 'Footer 4 ',
        'before_widget' => '',
        'after_widget'  => '<br>',
        'before_title'  => ' <h5 class="sk-qickLink-title">',
        'after_title'   => '</h5>'
        ));
       register_sidebar(array(
       'name' => 'Footer 5',
        'id'   => 'foot5',
        'description'   => 'Footer 5 ',
        'before_widget' => '',
        'after_widget'  => '<br>',
        'before_title'  => ' <h5 class="sk-qickLink-title">',
        'after_title'   => '</h5>'
        ));
    }



/* REGISTER WIDGETS ------------------------------------------------------------*/


 if(function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }

/* Theme setup */

function add_custom_sizes() {
    add_theme_support( 'post-thumbnails' ); 
    add_image_size('tour-photo', 400,400,true);
   
}
add_action( 'after_setup_theme', 'add_custom_sizes' );

//Custom css homepage
function mytheme_style(){
    if(!is_admin()){
    
        wp_register_style('callme-style', THEME_URL . '/css/callme.css', 'all');
        wp_enqueue_style('callme-style');
        wp_register_style('css-style', THEME_URL . '/css/style.css', 'all');
        wp_enqueue_style('css-style');
        wp_register_style('bootstrap-style', THEME_URL . '/bootstrap/bootstrap.min.css', 'all');
        wp_enqueue_style('bootstrap-style');
   

    }

}
add_action('wp_enqueue_scripts','mytheme_style');

//Custom js homepage

function mytheme_javscripts(){
    if(!is_admin()){
      
         wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', array(), '1.6.0' );
        // wp_enqueue_script('main-jquery'); 


        
        // wp_deregister_script('jquery-libarary', THEME_URL . '/js/lib.js', 'all');
        // wp_enqueue_script('jquery-libarary');

        // wp_deregister_script('jquery-bootstrap', THEME_URL . '/js/bootstrap.min.js', 'all');
        // wp_enqueue_script('jquery-bootstrap');
        wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array( ), '3.3.7', true );
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '3.3.7', true );
        


    }

}
add_action('wp_enqueue_scripts','mytheme_javscripts');


function wpdocs_custom_excerpt_length( $length ) {
    return 16;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return ' [...]';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// read more
function lktheme_readmore() {
    return '<a class="detail" href="'.get_permalink( get_the_ID() ) .'">' 
    .__('xem thêm', ''). '</a>';
}
add_filter('excerpt_more','lktheme_readmore');
