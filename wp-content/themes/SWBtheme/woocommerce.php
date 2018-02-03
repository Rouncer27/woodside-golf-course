<?php get_header() ?>
	<h3 style="padding:50px 10px; text-align:center;">The Store is currently closed for maintenance. Please check back soon...</h3>
	<?php 

		if( is_shop() ) {
			get_template_part( 'woostore/main' );
		} elseif( is_product_category( 'accessories' ) ) {
			get_template_part( 'woostore/accessories' );
		} elseif( is_product_category( 'events' ) ) {  
			get_template_part( 'woostore/events' );
		} elseif( is_product_category( 'memberships' ) ) {  
			get_template_part( 'woostore/membership' );
		} elseif( is_product_category( 'golf-lessons' ) ) {  
			get_template_part( 'woostore/golf-lessons' );
		} elseif(is_product() ) {
			get_template_part( 'woostore/product-single' );
		} else { 
			woocommerce_content();
		}

	?>

<?php get_footer(); ?>