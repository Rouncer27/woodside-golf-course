<?php
/**
 * The template for displaying product category thumbnails within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product_cat.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Increase loop count
$woocommerce_loop['loop'] ++;
?>

<?php // CUSTOM CODE FOR WOODSIDE GOLF COURSE STORE ADDED MY SWITCHBACK. //
	
	if(is_shop() ) { // check to see if we are on the shop page

	$count = $woocommerce_loop["loop"];
					// every fourth category add the class productslist__lessons for the custom css. //
	if($count % 4 == 0) { ?>

		<li <?php wc_product_cat_class( 'productslist__item productslist__lessons' ); ?>>
			<?php do_action( 'woocommerce_before_subcategory', $category ); ?>

<?php } else { ?>

		<li <?php wc_product_cat_class( 'productslist__item' ); ?>>
			<?php do_action( 'woocommerce_before_subcategory', $category ); ?>

<?php } } else { ?>


		<li <?php wc_product_cat_class( 'productslist__item' ); ?>>
			<?php do_action( 'woocommerce_before_subcategory', $category ); ?>

<?php } // END *** CUSTOM CODE FOR WOODSIDE GOLF COURSE STORE ADDED MY SWITCHBACK. *** END  // ?>	

	<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>">

		<?php
			/**
			 * woocommerce_before_subcategory_title hook
			 *
			 * @hooked woocommerce_subcategory_thumbnail - 10
			 */
			do_action( 'woocommerce_before_subcategory_title', $category );
		?>

		<h3><span>Shop</span><br />
			<?php
				echo $category->name;

				if ( $category->count > 0 )
					echo apply_filters( 'woocommerce_subcategory_count_html', ' <mark class="count">(' . $category->count . ')</mark>', $category );
			?>
		</h3>

		<?php
			/**
			 * woocommerce_after_subcategory_title hook
			 */
			do_action( 'woocommerce_after_subcategory_title', $category );
		?>

	</a>

	<?php do_action( 'woocommerce_after_subcategory', $category ); ?>
</li>
