<?php

// How many products per page //
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 24 );

// Remove the page title We need the function in order to work properly.
add_filter('woocommerce_show_page_title', function() { return false; } );

// remove the results count. //
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// remove the star rating from the category page displying all the products //
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

// add the more info button to just after the price on the product display page. //
function swb_more_info_button() {
	printf('<p><a href="%s" title="%s" class="more_info_button" >Product Detail</a></p>',
		esc_url( get_the_permalink() ),
		esc_attr( get_the_title() ) );
}
add_action( 'woocommerce_after_shop_loop_item_title', 'swb_more_info_button', 20 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );


?>