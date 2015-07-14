<?php

/*******
Remove this comment block to use the Mobile Class for PHP: http://mobiledetect.net/
NOTE: If developing locally you must concatinate in the DIR that your files are in on the local server; i.e. "SASSAFRASS" - your url to the Mobile_Detect script will then print
 out "localhost/SASSAFRASS/wp-contetn....." or else you will get a fatal error. Don't forget to remove for production!!

require_once( $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/sassafras/Mobile_Detect.php');
$detect = new Mobile_Detect;

******/

require_once( $_SERVER['DOCUMENT_ROOT'].'/sassafrass/wp-content/themes/sassafrass-test/Mobile_Detect.php');

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
		'name' => __( 'Main Sidebar', 'nekked' ),
		'id' => 'sidebar-1',
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => "</article>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );

		
}
add_action( 'widgets_init', 'sassy_widgets_init' );

