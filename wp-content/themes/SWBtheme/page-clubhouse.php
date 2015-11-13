<?php get_header(); ?>
		<main <?php post_class( 'clubhouse' ); ?>>
			<?php the_post(); ?>
			<article>
				<header class="clubhouseheader">
					<img src="<?php echo get_template_directory_uri(); ?>/img/clubhouse/circletree.png" alt="Woodside logo with crazy colourful background">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</header>
				<div class="slogan">
					<?php get_template_part( 'content/content', 'quote' ); ?>
				</div>
				<section class="meetingrooms">
					<div class="meetingrooms__container">
						<div class="meetingrooms__container--header">
							<h2>Meeting Rooms</h2>
							<p>Our meeting room provides flexibility for any number of events</p>
						</div>
						<div class="meetingrooms__container--content">
							<p><?php the_field( 'meeting_rooms'); ?></p>
							<a href="<?php echo home_url(); ?>/contact">Book A Room</a>
						</div>
					</div>
				</section>
				<section class="patio">
					<div class="patio__container">
						<div class="patio__container--content">
							<h3>Patio-ohhh!</h3>
							<p><?php the_field( 'patio_description' ); ?></p>
						</div>
						<div class="patio__container--image">
							<img src="<?php echo get_template_directory_uri(); ?>/img/clubhouse/patio1.jpg" alt="Woodside Golf Course Patio">
							<img src="<?php echo get_template_directory_uri(); ?>/img/clubhouse/patio2.jpg" alt="Woodside Golf Course Patio">
							<img src="<?php echo get_template_directory_uri(); ?>/img/clubhouse/patio3.jpg" alt="Woodside Golf Course Patio">
							<img src="<?php echo get_template_directory_uri(); ?>/img/clubhouse/patio4.jpg" alt="Woodside Golf Course Patio">
						</div>
					</div>
				</section>
				<section class="woodsrestaurant">
					<div class="woodsrestaurant__container">
						<h3><span>The Woods</span> restaurant</h3>
						<p><?php the_field( 'woods' ); ?></p>
						<a target="_blank" title="Click to go to the Woodside Restaurant" href="http://www.thewoodsrestaurant.ca">Full Site</a>
					</div>
				</section>
			</article>
		</main>
<?php get_footer(); ?>