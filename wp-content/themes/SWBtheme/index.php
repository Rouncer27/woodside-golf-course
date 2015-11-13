<?php get_header(); ?>
		<main class="SWBindex__template">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'SWBindex__template--article' ); ?>>
				<header>
					<h1><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p class="author"><span class="by">Written by:</span> <span> <?php the_author(); ?>. Click to read more from <?php the_author_posts_link(); ?></span></p>
					<p class="date"><?php the_date( 'l, F j, Y' ); ?></p>
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="SWBindex__content--image">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php } ?>
				</header>
				<section>
					<?php the_content(); ?>
				</section>
				<footer>
					<div class="swbthemecomments">
						<?php comments_template(); ?>
					</div>
					<p>Filed under: <?php echo get_the_category_list(', ' ); ?></p>
              		<p><span>Tags: <?php the_tags( ' ', ', '); ?></span></p>
              	</footer>
			</article>
			<aside class="SWBindex__template--sidebar swbsidebar">
				<?php if(is_active_sidebar( 'blog_sidebar' ) ) {
				get_sidebar();
				} ?>
			</aside>
			<?php endwhile; else : ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'SWBindex__template--article' );?> >
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