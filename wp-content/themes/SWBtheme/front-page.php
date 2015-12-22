<?php get_header(); ?>

	<main <?php post_class( 'home-main' ); ?>>

		<header class="homepageimage">
		</header>

		<div class="slogan">
			<?php get_template_part( 'content/content', 'quote' ); ?>
		</div>

        <section class="homenews">
        	<div class="homenews__container latestnews">
        		<div class="homenews__div bookit">
        			<?php get_template_part( 'content/content', 'book' ); ?>
        		</div>
        		<div class="homenews__div outrageous">
		    		<img src="<?php echo get_template_directory_uri(); ?>/img/front-page/whitetree.png" alt="Woodside Golf Course's Logo">
		    		<h4>Insanely Outrageous</h4>
		    		<p>Our goal is to instigate the<br /> creation of insanely<br /> outrageous stories.</p>
		    		<p class="youin">Are you in?</p>
		    	</div>
		    	<div class="homenews__div frontnews">
		    		<h4>Latest News</h4>

	    		<?php $my_query = "showposts=1&cat=1"; $my_query = new WP_Query($my_query); ?>
				<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<?php if ( has_post_thumbnail() ) { ?>

						<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
						<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title( '<h5>','</h5>' ); ?></a>

				<?php } else { ?>

						<h5><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">Read More!</a>

					<?php } endwhile;  endif; wp_reset_postdata(); ?>
		    	</div>    	
		    </div>
        </section>



		<section id="insansely" class="insanelyoutrageous">
			<?php the_post(); ?>
			<div class="insanelyoutrageous__intro ">	
				<?php the_content(); ?>
			</div>
			<div class="insanelyoutrageous__instagram">
				<h2>#insanelyoutrageous</h2>
			<?php 

				$args = array(
					'post_type' => 'outrageous',
					'showposts' => 9,
					);

				$outrageous = new WP_Query($args);

				if ( $outrageous->have_posts() ) : while( $outrageous->have_posts() ) : $outrageous->the_post(); 

			?>

				<div class="insanelyoutrageous__instagram--image">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} ?>
				</div>

			<?php endwhile; endif; wp_reset_postdata(); ?>

			</div>            
		</section>
	

		<aside id="test" class='homewidget'>
			<div class="homewidget__container">
				<div class="links homewidget__left">
					<?php get_sidebar( 'homeleft' ); ?>
				</div>
				<div class="homewidget__center newsletter">
					<?php get_sidebar( 'homecenter' ); ?>
				</div>
				<div class="homewidget__right">
					<?php get_sidebar( 'homeright' ); ?>
				</div>	
			</div>	
		</aside>
	</main>
<?php get_footer(); ?>