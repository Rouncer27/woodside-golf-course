<?php get_header(); ?>
			<main <?php post_class( 'contact' ); ?>>
				<?php the_post(); ?>
				<article>
					<header class="contactheader" itemprop="hasMap">
						<?php the_content(); ?>
					</header>
					<section class="slogan">
						<?php get_template_part( 'content/content', 'quote' ); ?>
					</section>
					<section class="contactarea">
						<div class="contactarea__container">
							<div class="contactarea__container--left" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
								<div>
									<img src="<?php echo get_template_directory_uri();?>/img/contact/whitetreelogo.png" alt="Woodside Golf Course's logo all in white.">
								</div>
								<h2>Get in touch</h2>
								<p>Have some questions for us?</p>
								<p>Have an outrageous Woodside story to share?</p>
								<h3 itemprop="name">Woodside Golf Course</h3>
								<p itemprop="streetAddress">525 Woodside Drive NW</p>
								<p><span itemprop="addressLocality">Airdrie</span>, <span itemprop="addressRegion">Alberta</span> T4B 2C6</p>
								<h3>Pro Shop</h3>
								<p itemprop="telephone">403.686.GOLF (4653)</p>
								<p>Restaurant 403.948.7416</p>
								<p itemprop="telephone">Office 403.948.6717</p>
								<p itemprop="email"><a taget="_blank" href="mailto:info@woodsidegc.com">E-mail info@woodsidegc.com</a></p>
								<p>Fax 403.948.0106</p>
							</div>						
							<div class="contactarea__container--right">
								<div class="contactform">
									<?php the_field( 'contact_form' ); ?>
								</div>
							</div>
						</div>				
					</section>
					<section id="menuteam" class="ourteam">
						<div class="ourteam__container">
							<h2>Our Team</h2>
							<p>This is some of the Woodside GC team that will make your Woodside experience one to never forget.</p>
							<div class="ourteam__container--members">
								<?php get_template_part( 'content/content', 'team' ); ?>
							</div>
						</div>
					</section>
					<section id="menucareers" class="careers">
						<div class="careers__container">
							<div class="careers__container--header">
								<h2>Careers</h2>
								<p>Creating insanely outrageous stories even through hiring our employees</p>
							</div>
							<div class="careers__container--content">
								<p><?php the_field( 'description' ); ?></p>
								<h3>The Application Process</h3>
								<p><?php the_field( 'process' ); ?></p>	
								<a href="<?php echo get_home_url(); ?>/positions">Positions Available</a>
								<h5>Submissions</h5>
								<p><?php the_field( 'submissions' ); ?></p>
							</div>
						</div>
					</section>
				</article>
			</main>
<?php get_footer(); ?>