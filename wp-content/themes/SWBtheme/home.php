<?php get_header(); ?>


			<main <?php post_class( 'blog' ); ?>>

				<header class="eventsheader">
					<img src="<?php echo get_template_directory_uri();?>/img/events-news/icons-news.png" alt="News and Events Icon.">
					<h1>Events and News</h1>
				</header>

				<div class="slogan">
					<?php get_template_part( 'content/content', 'quote' ); ?>
				</div>

				<section class="newsevents">
					<div class="newsevents__container">
						<ul class="media-boxes-filter" id="filter">
							  <li><a class="selected" href="" data-filter="*">All</a></li>
							  <li><a href="" data-filter=".news">News</a></li>
							  <li><a href="" data-filter=".events">Events</a></li>
							  <li><a href="" data-filter=".outrageous">Outrageous</a></li>
							  <li><a href="" data-filter=".other">Other</a></li>
						</ul>
						<div id="grid">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php get_template_part( 'content/content', 'blog' ); ?>
							<?php endwhile; else : ?>
						<article class="post-not-found">
							<header class="article-header">
								<h1>Oops, Post Not Found!</h1>
							</header>
							<section class="entry-content">
								<p>Uh Oh. Something is missing. Try double checking things.</p>
							</section>
							<footer class="article-footer">
								<p>This is the error message in the index.php template.</p>
							</footer>
						</article>
						<?php endif; ?>
						</div>
						<nav class="blog-archive__pagination"><!-- Pagination -->
							<?php the_posts_pagination( array(
							    'mid_size' => 2,
							    'prev_text' => __( 'Back Page', 'textdomain' ),
							    'next_text' => __( 'Next Page', 'textdomain' ),
							) ); ?>
						</nav>
					</div>
				</section>

				<section class="tournaments">
					<div class="tournaments__container">
					<?php 
						$args = array(
							'post_type' => 'tournaments',
							);

						$tournaments = new WP_Query($args);

						while( $tournaments->have_posts() ) : $tournaments->the_post();
					?>

					<h2><?php the_field( 'headline' ); ?></h2>
					<p><?php the_field( 'description' ); ?></p>
					<a target="_blank" title="" href="<?php the_field( 'tournament_pdf' ); ?>">Tournaments</a>
					<a target="_blank" title="" href="<?php the_field( 'advanced_groups_pdf' ); ?>">Advanced Groups</a>

				<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</section>

				<section class="calendar">
					<div class="calendar__container">
						<div class="calendar__container--header">
							<h2>Events Calendar</h2>
							<p>Current events, tournaments and the unexpected here.</p>
						</div>
						<div class="calendar__container--content">

							<?php 
							
							$args = array(
							'post_type' => 'calendar',
							);

					$calendar = new WP_Query($args);

					while( $calendar->have_posts() ) : $calendar->the_post(); ?>


					<?php the_content(); ?>

					<?php endwhile; wp_reset_postdata(); ?>

						</div>
					</div>
				</section>


			</main>

<?php get_footer(); ?>