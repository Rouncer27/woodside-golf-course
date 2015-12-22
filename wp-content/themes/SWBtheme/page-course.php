<?php get_header(); ?>
			<main <?php post_class( 'course' ); ?> role="main">
				<?php the_post(); ?>
				<article role="article">
					<header class="courseheader">
						<div class="courseheader__container">
							<div class="courseheader__container--text">
								<img src="<?php echo get_template_directory_uri(); ?>/img/course/icons-course.png" alt="Golf Tee and golf ball with crazy colourful background" title="Course Icon">
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
							</div>
							<div class="courseheader__container--image">
								<img src="<?php echo get_template_directory_uri(); ?>/img/course/header-square-course.jpg" alt="A picture of a beautiful pond with a fountian at Woodside Golf Course.">
							</div>
						</div>
					</header>
					<section class="slogan">
						<?php get_template_part( 'content/content', 'quote' ); ?>
					</section>
					<section class="bookingarea">
						<div class="bookingarea__container">
							<div class="bookingarea__container--teeon" id="book">
								<div style="border:none; margin:0 auto; padding:0; max-width:622px; min-width:300px; font-size:7.5pt; font-family:Arial, sans-serif; text-align:center;">
									<iframe id="TeeOnLogin" name="TeeOnLogin" src="https://tee-on.com/PubGolf/servlet/com.teeon.teesheet.servlets.all.BookATeeTimeLanding?CourseCode=WOOD&LoginType=1&RestrictToType=false" scrolling="auto" align="top" frameBorder="0" seamless="seamless" style="width:100%; height: 420px; overflow-y:auto; border:none; margin:5px;">
									   <a href="http://www.tee-on.com">Tee-On Golf Systems Inc.</a>
									</iframe>
									<div style="padding:0; margin:0 0 0 10px; text-align:left; color: #888787;">Copyright &copy; <a href="http://tee-on.com" target="_blank" style="text-decoration:none; color:inherit;">Tee-On Golf Systems Inc.</a> All rights reserved</div>
								</div>
							</div>
							<div class="bookingarea__container--information">
								<a target="_blank" title="Click here to see our rates." href="<?php the_field( 'rate_sheet_pdf' ); ?>">Our Rates</a>
								<a target="_blank" title="Click here to see our score card." href="<?php the_field( 'score_card_pdf' ); ?>">Score Card</a>
								<a target="_blank" title="Click here to see our code of conduct." href="<?php the_field( 'code_of_conduct_pdf' ); ?>">Code of Conduct</a>
								<a target="_blank" title="Click here to see our Dress Code." href="<?php the_field( 'dress_code_pdf' ); ?>">Dress Code</a>
							</div>
						</div>
						<div class="bookit specials">
							<img src="<?php echo get_template_directory_uri();?>/img/icons/circlegolf.png" alt="A colourful graphic of a golf ball on a tee" >
							<a title="Book A Tee time, Click here!" href="<?php echo home_url(); ?>/specials/">See Our Specials</a>
							<h4>Tee Off Specials!</h4>
						</div>
						<div class="bookingarea__downloadapp">
							<h5>Download The Woodside Golf Course App</h5>
							<a class="appa" target="_blank" title="Click to download our app from Apple" href="https://itunes.apple.com/app/id531879318"></a>
							<a class="appg" target="_blank" title="Click to download our app from the Google Play Store" href="https://play.google.com/store/apps/details?id=com.gallusgolf.c83.android.woodsidegc"></a>
						</div>
					</section>
					<section class="raincheck">
						<div class="raincheck__container">
							<div class="raincheck__container--context">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/raincheck.png" alt="Colourful raindrop icon">
								<?php the_field( 'raincheck' ); ?>
							</div>
						</div>

					</section>
					<section id="menuleagues" class="leagues">
						<div class="leagues__container">
							<div class="leagues__container--header">
								<h2>Our Leagues</h2>
								<p>Creating insanely outrageous stories through league play</p>
							</div>
							<div class="leagues__container--details">

								<div class="ladys">
									<div><?php the_field( 'ladys' ); ?></div>
								</div>
								<div class="seniors">
									<div><?php the_field( 'seniors' ); ?></div>
								</div>
								<div class="mens">
									<div><?php the_field( 'mens' ); ?></div>
								</div>
								<div class="commercial">
									<div><?php the_field( 'commercial' ); ?></div>
								</div>

								<div class="imagedetails">
									
								</div>	
								<div class="juniors">
									<div><?php the_field( 'juniors' ); ?></div>
								</div>
							</div>
						</div>
					</section>
					<section id="menulessons" class="lessons">
						<div class="lessons__container">
							<div class="lessons__container--content">
								<h2>Lessons</h2>
								<p><?php the_field( 'lessons' ); ?></p>
								<a target="_blank" title="Click here for more information on our lessons." href="<?php the_field( 'lessons_pdf' ); ?>" >More Info</a>
								<a title="Click here to sign up for lessons." href="mailto:proshop@woodsidegc.com">Book</a>
							</div>
						</div>
					</section>
					<section id="menufeaturedhole" class="featuredhole">
						<?php get_template_part( 'content/content', 'featured'); ?>
					</section>
					<section class="holeinone">
						<div class="holeinone__container">
							<div class="holeinone__container--header">
								<h2>Hole in One</h2>
								<p>A rare feat the average golfer will likely never achieve</p>
							</div>

							<div class="holeinone__container--content">
								<p><?php the_field( 'hole_in_one' ); ?><p>
								<a href="<?php echo home_url(); ?>/hole-in-one">See all the hole in ones</a>
							</div>	
						</div>
					</section>
				</article>
			</main>
<?php get_footer(); ?>