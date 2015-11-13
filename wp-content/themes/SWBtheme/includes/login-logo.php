<?php
// Add custom logo to the admin login screen. //

function swbtheme_login_logo() { ?>

	<style type="text/css">
	.login h1 a {
		background-image: url( <?php echo get_stylesheet_directory_uri(); ?>/img/logo/swbtheme.png );
		background-size: contain;
		background-repeat: no-repeat;
		width: 100%;
		height: 200px;
	}
	</style>

<?php }
add_action('login_enqueue_scripts', 'swbtheme_login_logo');

// Change the new login logo's link. //

function swbtheme_login_logo_url() {
	$swbtheme_url = 'http://switchbackcreative.ca';
    return $swbtheme_url;
}
add_filter( 'login_headerurl', 'swbtheme_login_logo_url');

// Change the new login logo's link title //

function swbtheme_login_logo_url_title() {
    return 'Proudly made by Switchback Creative Inc.';
}
add_filter( 'login_headertitle', 'swbtheme_login_logo_url_title' );

?>