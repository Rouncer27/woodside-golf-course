<?php get_header(); ?>
	<main <?php post_class( 'membership row' ); ?> role="main">
		<?php the_post(); ?>
		<article>
			<header class="membershipheader">
				<div class="membershipheader__container">
					<div class="membershipheader__container--text">
						<img src="<?php echo get_template_directory_uri(); ?>/img/membership/icons-member.png" alt="Silhouette of two people with crazy colourful background" title="Course Icon">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
					<div class="membershipheader__container--image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/membership/header-square-membership.jpg" alt="A picture people playing golf having a good time and laughing.">
					</div>
				</div>
			</header>
			<div class="slogan">
				<?php get_template_part( 'content/content', 'quote' ); ?>
			</div>
			<section class="membershipinfo">
				<div class="membershipinfo__container">
					<div class="membershipinfo__container--section">

						<div class="membershipinfo__container--section--header">
							<h2>Unlimited Play</h2>
							<p>Personal Shareholder Unlimited Play</p>
						</div>
						<div class="membershipinfo__container--section--content">
							<div class="intro">
								<h3>Personal Shareholder Unlimited Play</h3>
								<p><?php the_field( 'personal_shareholder' ); ?><p>	
							</div>
							<div class="buttons unlimited">
								<a title="Click here to book now!" href="<?php the_field('personal_shareholder_dues_url'); ?>">Pay now</a>
								<a target="_blank" href="<?php the_field( 'personal_shareholder_pdf' ); ?>">Information</a>
								<a target="_blank" href="<?php the_field( 'personal_shareholder_schedule_pdf' ); ?>">Savings</a>
							</div>
							
							
							<!-- <div class="intro">
								<h3>Seasonal Designate Unlimited Play</h3>
								<p>There are a limited number of Seasonal Memberships available at Woodside Golf Course.  A Designate Membership provides you an opportunity to take over the Annual Dues commitment of a current Woodside Personal Shareholder for a single season.  Designates are provided all of the benefits associated with Personal Shareholder Membership at Woodside Golf Course.  If you are interested in experiencing an Unlimited Play Membership at Woodside this season, then contact us at 403.686.GOLF (4653) to instigate the creation of your Woodside story!<p>	
							</div>
							<div class="buttons unlimited">
								<a target="_blank" href="https://woodsidegc.com/store/designateunlimiteddues/">Pay now</a>
								<a target="_blank" href="https://woodsidegc.com/wp-content/uploads/2017/11/ShareUnlimitedMembershipInfo-2018.pdf">Information</a>
								<a target="_blank" href="https://woodsidegc.com/wp-content/uploads/2017/11/ShareUnlimitedDuesSchedule-2018.pdf">Savings</a>
							</div>	 -->





						</div>
					</div>

					<div class="membershipinfo__container--section">
						<div class="membershipinfo__container--section--header">
							<h2><span>Shareholder</span> Pre-Pay Play</h2>
							<p>Shareholder Pre-Paid Play</p>
						</div>
						<div class="membershipinfo__container--section--content">
							<div class="intro">
								<h3>Shareholder Pre-Paid Play, formally known as Corporate Membership</h3>
								<p><?php the_field( 'pre-pay' ); ?><p>
								<p class="contactchris"><a href="mailto:chris@woodsidegc.com" title="Contact Chris McNicol">Contact Chris McNicol for full details</a></p>	
							</div>
							<div class="buttons pre-paid">
								<a title="Click here to book now!" href="<?php the_field('corporate_shareholder_dues_url') ?>">Pay now</a>
								<a target="_blank" href="<?php the_field( 'pre-pay_play_pdf' ); ?>">Information</a>
								<a target="_blank" href="<?php the_field( 'pre-pay_play_schedule_pdf' ); ?>">Savings</a>
							</div>			
						</div>
					</div>


					<div class="membershipinfo__container--section">
						<div class="membershipinfo__container--section--header">
							<h2>Student Play</h2>
							<p>Junior Seasonal Unlimited Play</p>
						</div>
						<div class="membershipinfo__container--section--content">
							<div class="intro">
								<h3>Junior Seasonal Unlimited Play</h3>
								<p><?php the_field( 'junior_seasonal' ); ?><p>
							</div>	
							<!-- <div class="intro">
								<h3>Intermediate Seasonal Unlimited Play</h3>
								<p><?php the_field( 'intermediate_seasonal' ); ?><p>			
							</div> -->
							<div class="buttons student">
								<a title="Click here to book now!" href="<?php the_field('student_dues_url'); ?>">Pay now</a>
								<a target="_blank" href="<?php the_field( 'student_benefit_details_pdf' ); ?>">Information</a>
								<a target="_blank" href="<?php the_field( 'student_benefit_dues_schedule_pdf' ); ?>">Savings</a>	
							</div>	
						</div>
					</div>

					<div class="membershipinfo__container--section">
						<div class="membershipinfo__container--section--header">
							<h2>Pay Per Play</h2>
							<p>Flex Membership</p>
						</div>
						<div class="membershipinfo__container--section--content">
							<div class="intro">
								<h3>Flex Membership</h3>
								<p><?php the_field( 'pay_per_play' ); ?><p>
								
							</div>
							<div class="flex buttons">	
								<a title="Click here to book now!" href="<?php the_field('flex_membership_dues_url'); ?>">Pay now</a>
								<a target="_blank" href="<?php the_field( 'flex_benefit_details_pdf' ); ?>">Information</a>
							</div>	
						</div>
					</div>

				</div>
			</section>

			<section class="interclub">
				<div class="interclub__container">
					<div class="interclub__container--header">
						<h3>Interclub</h3>
						<p><?php the_field( 'interclub' ); ?></p>
						<p><?php the_field('interclub_locations' ); ?></p>
					</div>
				</div>
			</section>
		</article>
	</main>
<?php get_footer(); ?>