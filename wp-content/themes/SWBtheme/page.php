<?php get_header(); ?>
		<main class="SWBpage__template swbpages">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'SWBpage__template--article' ); ?>>
				<header class="article__header">
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="article__header--image">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php } ?>
					<?php esc_attr( printf('<h2 class="article__header--title">%s</h2>', get_the_title() ) ); ?>
				</header>
				<section>
					<?php the_content(); ?>
				</section>
				<footer>
					<div class="swbthemecomments">
						<?php //comments_template(); ?>
					</div>
				</footer>
			</article>
			<?php endwhile; else : ?>
			<article>
				<header>
					<h1>Oops, Post Not Found!</h1>
				</header>
				<section>
					<p>Uh Oh. Something is missing. Try double checking things.</p>
				</section>
			</article>
			<?php endif; ?>
		</main>
<?php get_footer(); ?>