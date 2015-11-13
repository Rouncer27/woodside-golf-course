<?php get_header(); ?>
	<main role="main" <?php post_class('about'); ?>>
		<?php the_post(); ?>
		<article>
			<header class="aboutheader">
				<div><img src="<?php echo get_template_directory_uri(); ?>/img/about-page/circletree.png" alt="Small Crazy coloured tree"></div>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</header>
			<div class="slogan">
				<?php get_template_part( 'content/content', 'quote' ); ?>
			</div>
			<section class="oursection">
				<div class="oursection__container">
					<article class="oursection__innercontainer">
						<div class="oursection__innercontainer--header">
							<h2>Our Mission</h2>
							<p>Creating insanely outrageous stories</p>
						</div>
						<div class="oursection__innercontainer--context">
							<div>
								<?php the_field( 'mission_excerpt' ); ?>
							</div>
							<div class="reveal">
								<?php the_field( 'mission_hidden' ); ?>
							</div>
							<a class="readmore">Read More</a>
						</div>
					</article>
					<article class="oursection__innercontainer">
						<div class="oursection__innercontainer--header">
							<h2>Our History</h2>
							<p>Don’t underestimate the 6,200 yard course.</p>
						</div>
						<div class="oursection__innercontainer--context">
							<div>
								<?php the_field( 'history_excerpt' ); ?>
							</div>
							<div class="reveal">
								<?php the_field( 'history_hidden' ); ?>
							</div>
							<a class="readmore">Read More</a>
						</div>
					</article>
					<article class="oursection__innercontainer">
						<div class="oursection__innercontainer--header">
							<h2>Our Programs</h2>
							<p>Community participation is all part of the stories we tell</p>
						</div>
						<div class="oursection__innercontainer--context ourprograms">
							<div>
								<?php the_field( 'programs_excerpt' ); ?>
								<div class="buttons">
									<a target="_blank" href="<?php the_field( 'environmental_excellence' ); ?>">Enviromental Excellence Program</a>
									<a target="_blank" href="<?php the_field( 'golf_in_schools' ); ?>">Golf In School Program</a>
									<a target="_blank" href="<?php the_field( 'resident_glass' ); ?>">Resident Glass Program</a>
								</div>
							</div>	
						</div>
					</article>
				</div>
			</section>
			<section id="featurecause" class="cause">
				<div class="cause__container">
					<div class="cause__container--featuredcause">
						<div><img src="<?php echo get_template_directory_uri(); ?>/img/about-page/circletree.png" alt="Small Crazy coloured tree"></div>
						<h3>Featured Cause <span>for</span> <?php the_field( 'featured_cause_year' ) ?></h3>
						<h5><?php the_field( 'featured_cause_title' ); ?></h5>
						<p><?php the_field( 'featured_cause' ); ?></p>
						<a target="_blank" href="<?php the_field( 'featured_cause_pdf' ); ?>">Featured Cause PDF</a>
						<a href="<?php echo home_url(); ?>/contact">Get Involved</a><a href="<?php echo home_url(); ?>/events-and-news">Events</a>
					</div>
					<div class="cause__container--othercause">
						<h4>Other Causes</h4>
						<div class="causeimage"><a href="<?php echo home_url(); ?>/alberta-childrens-hospital"><img src="<?php echo get_template_directory_uri(); ?>/img/about-page/childrens-web.gif" alt=""></a></div>
						<div class="causeimage"><a href="<?php echo home_url(); ?>/breast-cancer"><img src="<?php echo get_template_directory_uri(); ?>/img/about-page/breastcancer-web.gif" alt=""></a></div>
						<div class="causeimage"><a href="<?php echo home_url(); ?>/bethany-care-centre"><img src="<?php echo get_template_directory_uri(); ?>/img/about-page/bethany-web.gif" alt=""></a></div>
					</div>
				</div>
			</section>
		</article>
	</main>
<?php get_footer(); ?>
