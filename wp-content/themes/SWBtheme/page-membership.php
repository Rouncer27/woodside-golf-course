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

			<?php

				$member_section_active = get_post_meta( get_the_ID(), '_wsc_membership_offe_active', true );
				if( $member_section_active[0] === "yes" ) {

					$member_offer_title = get_post_meta( get_the_ID(), '_wsg_membership_offer_title', true );
					$member_offer_image_id = get_post_meta( get_the_ID(), '_wsg_membership_offer_image', true );
					$member_offer_content = get_post_meta( get_the_ID(), '_wsg_membership_offer_content', true );
					$member_offer_buttons = get_post_meta( get_the_ID(), '_wsg_membership_offer_btn', true );

					if(	$member_offer_title && $member_offer_image_id && $member_offer_content ) {

						$img_src_small = wp_get_attachment_image_src( $member_offer_image_id, 'offeringssmall' );
          	$img_src_large = wp_get_attachment_image_src( $member_offer_image_id, 'offerings' );
          	$img_alt = get_post_meta( $member_offer_image_id, '_wp_attachment_image_alt', true);

			?>

			<section class="woodfeatured">
				<div class="woodfeatured__wrapper">
					<div class="woodfeatured__header">
						<h2><?php echo esc_html( $member_offer_title ); ?></h2>
					</div>
					<div class="woodfeatured__image">
						<picture>
							<source srcset="<?php echo esc_url( $img_src_large[0] ); ?>" media="(min-width: 768px)">
							<source srcset="<?php echo esc_url( $img_src_small[0] ); ?>" media="(min-width: 320px)">
							<img src="<?php echo esc_url( $img_src_large[0] ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>">
						</picture>
					</div>

					<div class="woodfeatured__content">
						<?php echo wpautop( esc_html( $member_offer_content ) ); ?>
					</div>

						<?php if( $member_offer_buttons ) { ?>

					<div class="woodfeatured__buttons">
							<?php
								for( $i = 0; $i < $member_offer_buttons; $i++ ) {
									$member_offer_button_text = get_post_meta( get_the_ID(), '_wsg_membership_offer_btn_' . $i . '_button_text', true );
									$member_offer_button_type = get_post_meta( get_the_ID(), '_wsg_membership_offer_btn_' . $i . '_button_type', true );
									if( $member_offer_button_type === 'pdf' ) {
										$member_offer_button_pdf = get_post_meta( get_the_ID(), '_wsg_membership_offer_btn_' . $i . '_button_pdf', true );
										echo '<a target="_blank" href="' . esc_url( $member_offer_button_pdf ) . '">' . esc_html( $member_offer_button_text ) . '</a>';
									} else if( $member_offer_button_type === 'link' ) {
										$member_offer_button_email = get_post_meta( get_the_ID(), '_wsg_membership_offer_btn_' . $i . '_button_email', true );
										echo '<a target="_blank" href="mailto:' . antispambot( $member_offer_button_email ) . '">' . esc_html( $member_offer_button_text ) . '</a>';

									} else if( $member_offer_button_type === 'email' ) {
										$member_offer_button_link = get_post_meta( get_the_ID(), '_wsg_membership_offer_btn_' . $i . '_button_link', true );
										echo '<a href="' . esc_url( $member_offer_button_link ) . '">' . esc_html( $member_offer_button_text ) . '</a>';
									}
							?>

							<?php } ?>
					</div>

						<?php } ?>

				</div>
			</section>

				<?php } ?>
			<?php } ?>


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
							<h2>Young <span>Professional</span></h2>
							<p>Seasonal Unlimited Play</p>
						</div>
						<div class="membershipinfo__container--section--content">
							<div class="intro">
								<h3>Young Professional Seasonal Unlimited Play</h3>
								<p>Details Coming Soon<p>
								<p class="contactchris"><a href="mailto:chris@woodsidegc.com" title="Contact Chris McNicol">Contact Chris McNicol for full details</a></p>	
							</div>
							<div class="buttons pre-paid">
								<a>Details Coming Soon</a>
								<a>Details Coming Soon</a>
								<a>Details Coming Soon</a>
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