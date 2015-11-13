<?php get_header(); ?>



		<div class="row">

			<main <?php post_class( 'positions' ); ?>>

				<?php the_post(); ?>

				<article>

					<header class="positionheader">
						<h1><?php the_title(); ?></h1>
					</header>

					<section class="slogan">
						<?php get_template_part( 'content/content', 'quote' ); ?>
					</section>

					<section class="submissions">
						<?php the_content(); ?>
					</section>


					<section class="available">

						<div class="available__container">
							<div class="available__container--header">
								<h2>Careers</h2>
								<p>Creating insanely outrageous stories even through hiring our employees</p>
							</div>
							<div class="available__container--positions">

						<?php 

						$args = array(
							'post_type' => 'positions',
							);

						$available = NEW WP_Query($args);


						if( $available->have_posts() ) : while( $available->have_posts() ) : $available->the_post(); ?>

							<div class="available__container--positions--individual">
								<h3><?php the_field( 'position_title' ); ?></h3>
								<p><?php the_field( 'job_description_' ); ?></p>
							</div>
							

						<?php endwhile; endif; wp_reset_postdata(); ?> 
							</div>
						</div>
					</section>

				</article>

			</main>

		</div>



<?php get_footer(); ?>