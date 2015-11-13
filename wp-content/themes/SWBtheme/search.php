<?php get_header(); ?>

	<main class="searchpage">

		<section class="searchpage__container">
			<header>
				<h2>Search Results</h2>
			</header>

			<?php if(have_posts()): while(have_posts()): the_post(); ?>

			<section>
				<h3><?php printf( '<a href="%s" title="%s" class="link">%s</a>', esc_url( get_permalink() ), esc_attr( the_title_attribute( 'echo=0' ) ), get_the_title() ); ?></h3>
				<?php the_excerpt(); ?>
			</section>

			<?php endwhile; else : ?>

				<section class="searchpage__container--noresults">
					<p>Sorry but your search did not have any results.</p>
				</section>

			<?php endif; ?>

			<footer>
				<p>Not what you were looking for?<br /> Please try your search again.</p>
				<?php get_search_form(); ?>
			</footer>

		</section>

	</main>

<?php get_footer(); ?>