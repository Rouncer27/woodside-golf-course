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
	printf('<p class="more_info_button" >Product Detail</p>',
		esc_url( get_the_permalink() ),
		esc_attr( get_the_title() ) );
}
add_action( 'woocommerce_after_shop_loop_item_title', 'swb_more_info_button', 20 );

// move the price down the page to under the product description. //

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );

// Romove the long description from the backend of the website. //

function remove_product_editor() {
	remove_post_type_support( 'product', 'editor' );
}
add_action( 'init', 'remove_product_editor' );

// remove the long description from the front end of the website. //

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    //unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;
}

// add the features for the products. //

function swb_add_features_for_products() {
	if(have_rows('features_list') ) :
		echo '<h2 class="features_headline">Product Features</h2>';
		while( have_rows('features_list') ) : 
			the_row();

		$feature = esc_html( get_sub_field('feature') );
		printf('<p class="product_feature">%s</p>', $feature);	

		endwhile;
	endif;
}

add_action( 'woocommerce_single_product_summary', 'swb_add_features_for_products', 21);

// remove the related products from the single product display page. //
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
 
function custom_override_checkout_fields( $fields ) {
    //unset($fields['billing']['billing_first_name']);
    //unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    //unset($fields['billing']['billing_address_1']);
    //unset($fields['billing']['billing_address_2']);
    //unset($fields['billing']['billing_city']);
    //unset($fields['billing']['billing_postcode']);
    //unset($fields['billing']['billing_country']);
    //unset($fields['billing']['billing_state']);
    //unset($fields['billing']['billing_phone']);
    //unset($fields['order']['order_comments']);
    //unset($fields['billing']['billing_address_2']);
    //unset($fields['billing']['billing_postcode']);
    //unset($fields['billing']['billing_email']);
    //unset($fields['billing']['billing_city']);
    unset($fields['shipping']['shipping_first_name']);
	unset($fields['shipping']['shipping_last_name']);
	unset($fields['shipping']['shipping_company']);
	//unset($fields['shipping']['shipping_address_1']);
	//unset($fields['shipping']['shipping_address_2']);
	//unset($fields['shipping']['shipping_city']);
	//unset($fields['shipping']['shipping_postcode']);
	//unset($fields['shipping']['shipping_country']);
	//unset($fields['shipping']['shipping_state']);

    return $fields;
}

add_filter( 'woocommerce_product_subcategories_hide_empty', 'swb_show_empty_categories', 10, 1 );
function swb_show_empty_categories ( $hide_empty ) {
    $hide_empty  =  false;
    // You can add other logic here too
    return $hide_empty;
}

add_filter( 'woocommerce_subcategory_count_html', 'swb_hide_category_count' );
function swb_hide_category_count() {
}






?>