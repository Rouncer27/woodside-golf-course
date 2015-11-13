<?php get_header(); ?>

			<main class="specials">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<header class="headerspecials">

						<h1><?php the_title(); ?></h1>

					</header>

					<section class="specialscontent">
						<div class="grid-container">
							<div class="row">
								<div style="border:none; margin:0 auto; padding:0; max-width:800px; min-width:300px; font-size:7.5pt; font-family:Arial, sans-serif; text-align:center;">
								<iframe id="TeeOnLogin" name="TeeOnLogin" src="https://tee-on.com/PubGolf/servlet/com.teeon.teesheet.servlets.all.SpecialsBox?CourseCode=WOOD" scrolling="auto" align="top" frameBorder="0" seamless="seamless" style="width:100%; height:600px; margin:5px; border:none;">
								<a href="http://www.tee-on.com">Tee-On Golf Systems Inc.</a>
								</iframe>
								<div style="padding:0; margin:0 0 0 10px; text-align:left; color: #888787;">Copyright &copy; <a href="http://tee-on.com" target="_blank"style="text-decoration:none; color:inherit;">Tee-On Golf Systems Inc.</a> All rights reserved</div>
								</div>
							</div>
						</div>
					</section>

					<footer>

					</footer>

				<?php endwhile; endif; ?>

			</main>


<?php get_footer(); ?>