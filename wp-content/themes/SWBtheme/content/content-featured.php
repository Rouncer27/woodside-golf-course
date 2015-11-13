<div class="featuredhole__container">

	<?php 

	$args = array(
		'post_type'	=>	'featured_hole',
		'showposts' => 4,
		'orderby' => 'rand',
		);

	$featured = new WP_Query($args);
	$count = 0;

	while($featured->have_posts() ) : $featured->the_post();

	$count++;

	?>

	<?php if ( $count % 2 ) { ?>

	<div class="clear__container">
		<div class="featuredhole__container--imageleft">
			<img src="<?php the_field( 'image' ); ?>" alt="A piture of the <?php the_title();?>" title="A piture of the <?php the_title();?>">
		</div>
		<div class="featuredhole__container--storyright">
			<h2>Welcome To Hole <?php the_field( 'hole_number' ); ?></h2>
			<h5>Par <?php the_field( 'par' ); ?><br>Back Tee: <span class="back"><?php the_field( 'back_tee'); ?> yards</span> Forward Tee: <span class="forward"><?php the_field( 'forward_tee' ); ?> yards</span></h5>
			<p><?php the_field( 'description' ); ?></p> 
		</div>
	</div>
	
	<?php } else { ?>

	<div class="clear__container">
		<div class="featuredhole__container--imageright">
			<img src="<?php the_field( 'image' ); ?>" alt="A piture of the <?php the_title();?>" title="A piture of the <?php the_title();?>">
		</div>
		<div class="featuredhole__container--storyleft">
			<h2>Welcome To Hole <?php the_field( 'hole_number' ); ?></h2>
			<h5>Par <?php the_field( 'par' ); ?><br>Back Tee: <span class="back"><?php the_field( 'back_tee'); ?> yards</span> Forward Tee: <span class="forward"><?php the_field( 'forward_tee' ); ?> yards</span></h5>
			<p><?php the_field( 'description' ); ?></p> 
		</div>
	</div>

	<?php } endwhile;  wp_reset_postdata(); ?>

</div>
