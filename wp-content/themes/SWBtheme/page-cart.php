<?php get_header(); ?>
	<main class="cartpage">
	<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?> 
		<section class="cartview">
			<div class="cartview__container">
				<div class="cartview__container--content">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
	<?php endwhile; endif; ?>
	</main>
<?php get_footer(); ?>