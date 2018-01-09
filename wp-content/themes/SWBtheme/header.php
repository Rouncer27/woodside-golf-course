<!DOCTYPE html>
 <html <?php language_attributes(); ?> class="no-js">
 <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<?php // force Internet Explorer to use the latest rendering engine available ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="true">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<?php // Favicons ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.png" />

	<link rel='pingback' href='<?php bloginfo( 'pingback_url' ); ?>' />
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
	<![endif]-->
	<!--<script type="text/javascript">function getCourseCode(){return 'WOOD';}</script>
	<script type="text/javascript" src="//tee-on.com/mobileRedirect.js"></script>-->
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/GolfCourse">
		<header class="siteheader">
			<div class="siteheader__wrapper">
				<div class="siteheader__logo">	
					<h1 itemprop="name"><?php bloginfo('name'); ?><a class="siteheader__logo--link" itemprop="url" href="<?php echo home_url(); ?>"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo/woodside.png" alt="Woodside Golf Course's Logo"/></a></h1>
					<p itemprop="description"><?php bloginfo('description'); ?></p>
				</div>

				<div class="siteheader__teetime">
					<a target="_blank" href="https://secure.west.prophetservices.com/WoodsideGolfV3">Book A Tee Time</a>
				</div>
			</div>
			<nav class="siteheader__nav">
				<div class="nav_container">
					<?php   /**
							* Displays a navigation menu
							* @param array $args Arguments
							*/
							$args = array(
								'theme_location' => 'SWB-main-menu',
								'menu' => '',
								'container' => '',
								'container_class' => '',
								'container_id' => '',
								'menu_class' => 'main',
								'menu_id' => '',
								'echo' => true,
								'fallback_cb' => '',
								'before' => '',
								'after' => '',
								'link_before' => '',
								'link_after' => '',
								'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
								'depth' => 3,
								'walker' => ''
							); ?>

							<?php wp_nav_menu( $args ); ?>
				</div>
			</nav>
		</header>