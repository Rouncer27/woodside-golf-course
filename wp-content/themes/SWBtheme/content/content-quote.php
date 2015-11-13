<div class="grid-container">
	 	
	 	<?php 

	 		$args = array(
	 			'post_type'	=>	'quote',
	 			'posts_per_page'	=>	1,
	 			'orderby'	=>	'rand',
	 			);

	 	$quote = new WP_Query($args);

	 	while( $quote->have_posts() ) : $quote->the_post(); 

	 	the_content();

	 	endwhile; wp_reset_postdata(); ?>

</div>