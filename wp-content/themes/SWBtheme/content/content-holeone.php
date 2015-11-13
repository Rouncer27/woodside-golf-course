

<?php // HOLE #3 ?>

<h5>Hole #3</h5>

<?php 

	$args = array(
		'post_type'	=>	'hole_in_one',
		'showposts' =>	-1
		);

$holeone = new WP_Query($args);

	

	while( $holeone->have_posts() ) : $holeone->the_post();


?>


<?php if ( has_term( '3', 'hole_in_one' ) ) { ?>
<div class="holeinonepage__container--info--cell">
	<p class="highlighted"><?php the_title(); ?></p>
	<p class="highlighted"><?php the_time('F j, Y'); ?></p>
</div>


<?php } ?>

<?php endwhile; wp_reset_postdata(); ?>

<?php // HOLE #5 ?>

<h5>Hole #5</h5>

<?php 

	$args = array(
		'post_type'	=>	'hole_in_one',
		'showposts' =>	-1
		);

$holeone = new WP_Query($args);

	

	while( $holeone->have_posts() ) : $holeone->the_post();


?>


<?php if ( has_term( '5', 'hole_in_one' ) ) { ?>

<div class="holeinonepage__container--info--cell">
	<p class="highlighted"><?php the_title(); ?></p>
	<p class="highlighted"><?php the_time('F j, Y'); ?></p>
</div>


<?php } ?>

<?php endwhile; wp_reset_postdata(); ?>



<?php // HOLE #7  ?>

<h5>Hole #7</h5>

<?php 

	$args = array(
		'post_type'	=>	'hole_in_one',
		'showposts' =>	-1
		);

$holeone = new WP_Query($args);

	

	while( $holeone->have_posts() ) : $holeone->the_post();


?>


<?php if ( has_term( '7', 'hole_in_one' ) ) { ?>

<div class="holeinonepage__container--info--cell">
	<p class="highlighted"><?php the_title(); ?></p>
	<p class="highlighted"><?php the_time('F j, Y'); ?></p>
</div>


<?php } ?>

<?php endwhile; wp_reset_postdata(); ?>


<?php // HOLE #12 ?>

<h5>Hole #12</h5>

<?php 

	$args = array(
		'post_type'	=>	'hole_in_one',
		'showposts' =>	-1
		);

$holeone = new WP_Query($args);

	

	while( $holeone->have_posts() ) : $holeone->the_post();


?>


<?php if ( has_term( '12', 'hole_in_one' ) ) { ?>

<div class="holeinonepage__container--info--cell">
	<p class="highlighted"><?php the_title(); ?></p>
	<p class="highlighted"><?php the_time('F j, Y'); ?></p>
</div>


<?php } ?>

<?php endwhile; wp_reset_postdata(); ?>

<?php // HOLE #14 ?>

<h5>Hole #14</h5>

<?php 

	$args = array(
		'post_type'	=>	'hole_in_one',
		'showposts' =>	-1
		);

$holeone = new WP_Query($args);

	

	while( $holeone->have_posts() ) : $holeone->the_post();


?>


<?php if ( has_term( '14', 'hole_in_one' ) ) { ?>

<div class="holeinonepage__container--info--cell">
	<p class="highlighted"><?php the_title(); ?></p>
	<p class="highlighted"><?php the_time('F j, Y'); ?></p>
</div>


<?php } ?>

<?php endwhile; wp_reset_postdata(); ?>

