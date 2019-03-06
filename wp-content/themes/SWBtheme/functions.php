<?php


add_action( 'after_setup_theme', 'SWB_theme_setup' );

function SWB_theme_setup() {

if ( ! isset( $content_width ) )
$content_width = 960; /* pixels */	

//  ***  Add the the support for the swbtheme.  ***  //
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-formats', array( 'aside', 'gallery' ));
add_theme_support( 'title-tag' ); // this lets wordPress insert the title tag for our website in the head section. //
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'woocommerce' );

//  ***  Setup images sizes on the swbtheme.  ***  //
//  ***  Add image sizes. true is cropped images.  ***  //	
add_image_size( 'main', 1000, 440, true );
add_image_size( 'eventsfront', 500, 500, true );
add_image_size( 'outrageousfront', 250, 250, true );

add_image_size( 'offeringssmall', 500, 500, false);
add_image_size( 'offerings', 2000, 2000, false);

//   ***   These are where we include style sheets that may be need for our project.   ***   //
function switchback_styles() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'switchback_styles' );

//   ***   This is where we will include more script files that may be need for our project.   ***   //
function switchback_scripts() {
	wp_enqueue_script( 'themejs', get_template_directory_uri() . '/js/myscripts.js', array( 'jquery' ), false, false);
}
add_action( 'wp_enqueue_scripts', 'switchback_scripts' );

//   ***   Create the menus   ***   //
function swb_theme_menus() {

register_nav_menus( array(
	'SWB-main-menu' => 'SWB Menu',
	) );

}

add_action( 'init', 'swb_theme_menus' );
 
//   ***   swbtheme site Sidebars   ***   //
add_action( 'widgets_init', 'swb_register_sidebars' );

function swb_register_sidebars() {

	register_sidebar( array(
		'name'	=>	'Blog Page Sidebar',
		'id'	=>	'blog_sidebar',
		'before_widget'	=>	'<li>',
		'after_widget'	=>	'</li>',
		'before_title'	=>	'<h3>',
		'after_title'	=>	'</h3>'
		) );

	register_sidebar( array(
		'name'	=>	'Home Page Bottom Left',
		'id'	=>	'homeleft_sidebar',
		'before_widget'	=>	'',
		'after_widget'	=>	'',
		'before_title'	=>	'<h5>',
		'after_title'	=>	'</h5>'
		) );

	register_sidebar( array(
		'name'	=>	'Home Page Center Bottom',
		'id'	=>	'homecenter_sidebar',
		'before_widget'	=>	'',
		'after_widget'	=>	'',
		'before_title'	=>	'<h5>',
		'after_title'	=>	'</h5>'
		) );

	register_sidebar( array(
		'name'	=>	'Home Page Bottom Right',
		'id'	=>	'homeright_sidebar',
		'before_widget'	=>	'',
		'after_widget'	=>	'',
		'before_title'	=>	'<h5>',
		'after_title'	=>	'</h5>'
		) );

	register_sidebar( array(
		'name'	=>	'Archive Page Sidebar',
		'id'	=>	'archive_sidebar',
		'description'   => 'This is the sidebar that will be displayed on the archive page.',
		'before_widget'	=>	'',
		'after_widget'	=>	'',
		'before_title'	=>	'<h3 class="blogpage__sidebar--title">',
		'after_title'	=>	'</h3>'
		) );

	register_sidebar( array(
		'name'	=>	'Shop Category display Top Bar',
		'id'	=>	'woocat_sidebar',
		'description'   => 'This is the top bar that will display the product caegories on the top of the shop page.',
		'before_widget'	=>	'',
		'after_widget'	=>	'',
		'before_title'	=>	'<h3>',
		'after_title'	=>	'</h3>'
		) );
}


require_once('includes/swb-theme-optimization.php');

// Change the length of the excerpt and the read more tag. //
require_once('includes/talk-to-much.php');
// Change the logo and link on the login screen. //
require_once('includes/login-logo.php');
// Clean the dashboard for non-admin users. This makes it easier for our clients to navigate the backend. //
require_once('includes/clean-dashboard.php');
// Add the Switchback Creative logo to the top of the admin dashboard. //
require_once('includes/dashboard-top-logo.php');
// Add a welcome message and helpful info for our clients. //
require_once('includes/welcome-mat.php');
// Add some helpful links and tips for our clients. //
require_once('includes/links-tips.php');
// Change the footer of the backend admin area. //
require_once('includes/dashboard-footer.php');
// woocommerce theme. Support needed. //
require_once('includes/woocommerce.php');


} //End of the theme setup. Do not delete this curly bracket.












