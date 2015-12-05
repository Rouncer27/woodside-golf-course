<?php get_header(); ?>
	<main class="cartpage">
	<?php if ( is_user_logged_in() ) { ?>
	<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?> 
		<section class="cartview">
			<div class="cartview__container">
				<div class="cartview__container--content">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
	<?php endwhile; endif; ?>
	<?php } else { ?>

	<div class="under_contruction">
		<h2>Woodside Store</h2>
		<p>Coming Soon</p>
	</div>

	<?php } ?>
	</main>
<?php get_footer(); ?>