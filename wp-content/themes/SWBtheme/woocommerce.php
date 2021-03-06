<?php get_header() ?>
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