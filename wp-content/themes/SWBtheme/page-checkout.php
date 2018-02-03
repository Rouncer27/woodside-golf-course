<?php get_header(); ?>
	<main class="checkoutpage">
		<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?> 
			<section class="checkoutview">
				<div class="checkoutview__container">
					<div class="checkoutview__container--content">
						<h3 style="padding:50px 10px; text-align:center;">The Store is currently closed for maintenance. Please check back soon...</h3>
						<?php the_content(); ?>
					</div>
				</div>
			</section>
		<?php endwhile; endif; ?>
	</main>
<?php get_footer(); ?>