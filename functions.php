<?php

require_once( $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/sassafrass/Mobile_Detect.php');

//Add GZIP

ob_start("ob_gzhandler");


/*Enque Scripts and Styles into the wp_head() */

function sassy_scripts() {
	wp_enqueue_script("jquery");
	wp_enqueue_script("Modernizr-flexbox-test",  get_template_directory_uri()."/js/modernizr.flexboxTest.min.js", array(), '1.0.0', 'all');
	wp_enqueue_script("custom-scripts",  get_template_directory_uri()."/js/scripts.js", array(), '1.0.0', 'all');
	wp_enqueue_script("html5shiv",  get_template_directory_uri()."/js/html5shiv.min.js", array(), '1.0.0', 'all');
	wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all');
	wp_enqueue_script("slicknav",  get_template_directory_uri()."/js/jquery.slicknav.min.js", array(), '1.0.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'sassy_scripts' );

/*Add HTML5 Support */
add_theme_support( 'html5');

//Allows a Features Image to be set to posts and pages. 
add_theme_support( 'post-thumbnails' );

//Adds support for short codes
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');
add_filter( 'the_content', 'wpautop');
add_filter( 'the_content', 'shortcode_unautop'  );




/*Register Navigation */

function register_my_menus() {
       register_nav_menus(
array(
'top_menu' => __( 'Top Nav Menu' ),
'bottom_menu' => __( 'Mobile Nav Menu' ))
);
}
add_action( 'init', 'register_my_menus' );

function naked_and_sassy_main_nav() {
    if ( function_exists( 'wp_nav_menu' ) )
        wp_nav_menu(
'menu=top_menu&theme_location=top-menu&container_class=pagemenu&fallback_cb=mytheme_nav_fallback' );
    else
        mytheme_nav_fallback1();
}
 
function mytheme_nav_fallback1() {
    wp_page_menu( 'show_home=Start&menu_class=pagemenu' );
}

/**
 * Register widgetized area and update sidebar with default widgets
 */
function sassy_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Left Sidebar', 'sassafrass' ),
		'id' => 'sass_left-bar',
        'class'         => 'sass_sidebar',
        'description'   => 'Content area for page template displaying the left sidebar.',
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => "</article>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );
    
    register_sidebar( array(
		'name' => __( 'Right Sidebar', 'sassafrass' ),
		'id' => 'sass_right-bar',
        'class'         => 'sass_sidebar',
        'description'   => 'Content area for page template displaying the right sidebar.',
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => "</article>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );
    
    register_sidebar( array(
		'name' => __( 'Home Secondary Content Section', 'sassafrass' ),
		'id' => 'sass_hs-section',
        'class'         => 'sass_secondary-ss',
        'description'   => 'Content area for seconday page content specific to the hompage.',
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => "</article>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );
    
    register_sidebar( array(
		'name' => __( 'Subpage Secondary Content Section', 'sassafrass' ),
		'id' => 'sass_ss-section',
        'class'         => 'sass_secondary-ss',
        'description'   => 'Content area for seconday page content for subpages.',
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => "</article>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );
    
    register_sidebar( array(
		'name' => __( 'Pre-Footer Content Section', 'sassafrass' ),
		'id' => 'sass_pf-section',
        'class'         => 'sass_pf-ss',
        'description'   => 'Content area for the Pre Footer section.',
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => "</article>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );
    
    register_sidebar( array(
		'name' => __( 'Top Content Section', 'sassafrass' ),
		'id' => 'sass_tc-section',
        'class'         => 'sass_tc-ss',
        'description'   => 'Content area between the header of the document and the main content section.',
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => "</article>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );

	register_sidebar( array(
		'name' => __( 'Slideshow Area', 'sassafrass' ),
		'id' => 'sidebar-slide',
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => "</article>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );

		
}
add_action( 'widgets_init', 'sassy_widgets_init' );

