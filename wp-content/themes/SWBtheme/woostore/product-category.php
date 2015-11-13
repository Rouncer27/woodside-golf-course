	
	<?php if(is_active_sidebar( 'woocat_sidebar' ) ) { ?>
	<section class="woodsinglecat">
		<div class="woodsinglecat__container">
			<?php
			 get_sidebar( 'woocat' );
			?>
		</div>
	</section>
	<?php  } ?>


	<section class="insideproducts">
		<div class="insideproducts__container">
			<?php woocommerce_content(); ?>
		</div>
	</section>



	