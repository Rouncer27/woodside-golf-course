<?php get_header(); ?>
	<main class="checkoutpage">
	<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?> 
		<section class="checkoutview">
			<div class="checkoutview__container">
				<div class="checkoutview__container--content">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
	<?php endwhile; endif; ?>
	</main>
<?php get_footer(); ?>