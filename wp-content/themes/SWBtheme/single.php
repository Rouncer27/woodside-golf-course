<?php get_header(); ?>

			<main class="singlepostpage">
				

				<div class="singlepostpage__container">
			      	<?php if ( has_post_thumbnail() ) { ?> 
				        <div class="article--image">
				          <?php the_post_thumbnail('main'); ?>
				        </div>
			     	<?php } else { ?>
				      	<div class="article--image">
				          <img src="<?php echo get_template_directory_uri(); ?>/img/logo/woodsidebig.png" alt="Image of Woddside Logo." />
				        </div>
			        <?php } ?> 	

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'singlepostpage__container--article swbposts' ); ?>>
						<div class="singlepostpage__container--content">

							<?php if(in_category('events') ) { 
								get_template_part( 'content/content', 'events' );
							} elseif(in_category('news') ) {
								get_template_part( 'content/content', 'news' );
							} elseif (in_category('outrageous') ) {
								get_template_part( 'content/content', 'outrageous' );
							} else { ?>
							<header class="main">
								<?php esc_attr( printf('<p>%s | by %s | %s</p>', get_the_category_list(' | '), get_the_author(), get_the_date() ) ); ?>
								<h2><?php the_title(); ?></h2>
						    </header>
						    <?php } ?>

					      	<section>
					      		<?php the_content(); ?>
					      	</section>
					    </div>
				      	<footer>
				      		<div class="swbthemecomments">
					        	<?php comments_template(); ?>
					        </div>
					        <p>Filed under: <?php echo get_the_category_list(', ' ); ?></p>
					        <p><span>Tags: <?php the_tags( ' ', ', '); ?></span></p>
				      	</footer>      	
				    </article>
					
					<?php endwhile; else : ?> <!-- If there is no post found -->
					<article>
						<header>
							<h1>Oops, Post Not Found!</h1>
						</header>
						<section>
							<p>Uh Oh. Something is missing. Try double checking things.</p>
						</section>
					</article>
					<?php endif; // End of the loop ?>
				</div>

				<nav class="swbpagination"><!-- Pagination -->
					<?php $next_post = get_adjacent_post( false, '', false, 'category' ); ?>
					<?php if( !empty($next_post) ) { ?>
						<p class="next"><?php next_post_link( '%link', 'Next News Post' ); ?></p>
					<?php } ?>
					<?php $prev_post = get_adjacent_post( false, '', true, 'category' ); ?>
					<?php if( !empty($prev_post) ) { ?>
					<p class="previous"><?php previous_post_link( '%link', 'Previous News Post' ); ?></p>
					<?php } ?>
				</nav>
			</main>
<?php get_footer(); ?>	

