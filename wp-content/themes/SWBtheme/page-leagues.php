<?php get_header(); ?>
	<main <?php post_class( 'membership row' ); ?> role="main">
        <?php the_post(); ?>
        <div class="leaguehero">
            <div class="leaguehero__content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/leagues/icon-leagues-woodside.png" alt="Woodside calendar icon with crazy colourful background">
                <h2>Leagues</h2>
				<p>Instigating the creation of Insanely Outrageous Stories</p>
            </div>
            <div class="leaguehero__overlay"></div>
            <div class="leaguehero__background"></div>
        </div>
        <div class="slogan">
			<?php get_template_part( 'content/content', 'quote' ); ?>
		</div>

        <section class="swbleagues">
            <div class="swbleagues__wrapper">

                <div class="swbleagues__item">
                    <div class="swbleagues__item--header">
                        <h2>Mixed Seniors League</h2>
                        <p>Mixed Seniors League</p>
                    </div>

                    <div class="swbleagues__item--content">
                        <p>Senior Men and Women ages 55+ are invited to join us for 18 holes of play each Monday morning for a 9:00am modified shotgun start.  This league features both individual and team handicapped games each week that are designed to be relaxed, fun and provide  some friendly competition.  In addition, there are a number of special event days throughout the season, such as our annual Steak and Beans Team Event, where the winning team eats steak and losing team eats beans.  The game of golf provides us so many opportunities to create lasting impressions - join the Monday Morning Mixed Senior League in 2018 to be apart of some exceptional moments.</p>
                        <div class="buttons">
                            <?php
                                $mslinfoPDFID = get_post_meta( get_the_id(), '_swb_mixed_seniors_league_information', true );
                                $mslinfoPDF = wp_get_attachment_url( $mslinfoPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mslinfoPDF ); ?>">League Information</a>

                            <?php
                                $mslratePDFID = get_post_meta( get_the_id(), '_swb_mixed_seniors_rate_sheet', true );
                                $mslratePDF = wp_get_attachment_url( $mslratePDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mslratePDF ); ?>">Rate Sheet</a>

                            <?php
                                $mslstanPDFID = get_post_meta( get_the_id(), '_swb_mixed_seniors_standings', true );
                                $mslstanPDF = wp_get_attachment_url( $mslstanPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mslstanPDF ); ?>">Standings</a>

						</div>
                    </div>
                </div>

                <div class="swbleagues__item">
                    <div class="swbleagues__item--header">
                        <h2>Men’s Commercial League</h2>
                        <p>Men’s Commercial League</p>
                    </div>

                    <div class="swbleagues__item--content">
                        <p>This league features 24 corporately sponsored teams that compete in weekly 9 hole match-play events on Monday’s throughout the golf season.  Each team can have a roster of up to 20 players, with 4 players competing for their team each week.  The league consists of 2 divisions, and all teams within a division will play each other once during the regular season.  All teams make playoffs and are seeded for a double elimination playoff.  If you are interested in entering a team into this league, see the league information sheet for full details.</p>
                        <div class="buttons">
                            <?php
                                $mclinfoPDFID = get_post_meta( get_the_id(), '_swb_mens_commercial_league_information', true );
                                $mclinfoPDF = wp_get_attachment_url( $mclinfoPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mclinfoPDF ); ?>">League Information</a>

                            <?php
                                $mclratePDFID = get_post_meta( get_the_id(), '_swb_mens_commercial_league_rate_sheet', true );
                                $mclratePDF = wp_get_attachment_url( $mclratePDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mclratePDF ); ?>">Rate Sheet</a>

                            <?php
                                $mclstanPDFID = get_post_meta( get_the_id(), '_swb_mens_commercial_league_standings', true );
                                $mclstanPDF = wp_get_attachment_url( $mclstanPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mclstanPDF ); ?>">Standings</a>
						</div>
                    </div>
                </div>

                <div class="swbleagues__item">
                    <div class="swbleagues__item--header">
                        <h2>9 Hole Ladies T-Birds</h2>
                        <p>9 Hole Ladies T-Birds</p>
                    </div>

                    <div class="swbleagues__item--content">
                        <p>The Ladies 9 Hole T-Birds provide a social, mostly non-competitive environment where gals come to meet, eat and play 9 holes of golf on Tuesday mornings beginning at 9:00am.  Fun and entertainment are the primary focus of this group, with prizes being awarded for games of chance.  The T-Birds provide an excellent opportunity for ladies who play golf casually to meet like minded individuals and enjoy the game without focusing on their scores.  Weekly lunch features are a big draw following play.</p>
                        <div class="buttons">
                            <?php
                                $ltbinfoPDFID = get_post_meta( get_the_id(), '_swb_nine_tbirds_league', true );
                                $ltbinfoPDF = wp_get_attachment_url( $ltbinfoPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $ltbinfoPDF ); ?>">League Information</a>

                            <?php
                                $ltbratePDFID = get_post_meta( get_the_id(), '_swb_nine_tbirds_rate', true );
                                $ltbratePDF = wp_get_attachment_url( $ltbratePDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $ltbratePDF ); ?>">Rate Sheet</a>

                            <?php
                                $ltbstanPDFID = get_post_meta( get_the_id(), '_swb_nine_tbirds_standings', true );
                                $ltbstanPDF = wp_get_attachment_url( $ltbstanPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $ltbstanPDF ); ?>">Standings</a>
						</div>
                    </div>
                </div>

                <div class="swbleagues__item">
                    <div class="swbleagues__item--header">
                        <h2>Ladies Night OUT</h2>
                        <p>Ladies Night OUT</p>
                    </div>

                    <div class="swbleagues__item--content">
                        <p>Every Tuesday Night you can have a guaranteed night out with your girls!  Weekly 5:30pm shotgun starts kick-off with an all new tailgate party format to transition you from the office to the golf course.  You pick the nights you want to play and register for them online in advance.  Should the weather not accommodate golf, then dinner, an adult beverage and prizes are on Woodside.  In the event of bad weather, we will even give you a complimentary 9 hole rain-check to play golf another time.  This league is extremely popular and sells out quickly, so secure your group of gals and note the registration time and date to avoid disappointment.</p>
                        <div class="buttons">
                            <?php
                                $lnoinfoPDFID = get_post_meta( get_the_id(), '_swb_ladies_night_out_information', true );
                                $lnoinfoPDF = wp_get_attachment_url( $lnoinfoPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $lnoinfoPDF ); ?>">League Information</a>

                            <?php
                                $lnoratePDFID = get_post_meta( get_the_id(), '_swb_ladies_night_out_rates', true );
                                $lnoratePDF = wp_get_attachment_url( $lnoratePDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $lnoratePDF ); ?>">Rate Sheet</a>

                            <?php
                                $lnostanPDFID = get_post_meta( get_the_id(), '_swb_ladies_night_out_standings', true );
                                $lnostanPDF = wp_get_attachment_url( $lnostanPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $lnostanPDF ); ?>">Standings</a>
						</div>
                    </div>
                </div>


                <div class="swbleagues__item">
                    <div class="swbleagues__item--header">
                        <h2>18 Hole Ladies T-Birds</h2>
                        <p>18 Hole Ladies T-Birds</p>
                    </div>

                    <div class="swbleagues__item--content">
                        <p>These crazy ladies have focused their league experience on creating laughs wherever and whenever possible.  If you are looking for the perfect way to start your Wednesday, then come tee-it-up with the Woodside 18 Hole Lady T-Birds.  These gals play 18 holes beginning at 9:00am every Wednesday morning as part of a modified 9 hole shotgun.  Each week features a new, semi-competitive event format aimed at creating memorable stories to be shared with the group over lunch following the completion of play.</p>
                        <div class="buttons">
                            <?php
                                $lteinfoPDFID = get_post_meta( get_the_id(), '_swb_tbirds_info', true );
                                $lteinfoPDF = wp_get_attachment_url( $lteinfoPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $lteinfoPDF ); ?>">League Information</a>

                            <?php
                                $lteratePDFID = get_post_meta( get_the_id(), '_swb_tbirds_rate', true );
                                $lteratePDF = wp_get_attachment_url( $lteratePDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $lteratePDF ); ?>">Rate Sheet</a>

                            <?php
                                $ltestanPDFID = get_post_meta( get_the_id(), '_swb_tbirds_standings', true );
                                $ltestanPDF = wp_get_attachment_url( $ltestanPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $ltestanPDF ); ?>">Standings</a>
						</div>
                    </div>
                </div>


                <div class="swbleagues__item">
                    <div class="swbleagues__item--header">
                        <h2>Men’s Night</h2>
                        <p>Men's Night</p>
                    </div>

                    <div class="swbleagues__item--content">
                        <p>Woodside’s Men’s League provides gents the opportunity to play 9 or 18 holes every Wednesday afternoon from 1:00pm until 6:30pm.  Scoring formats rotate monthly and a season long points format can win you some great prizing at the year-end event.  You book your own tee-times and set your own groups, so make sure you get some of your good friends to register to play with you.  The more often you play, the better your chances are of winning some of the over $8,000 in prizing at seasons end.  Food & Beverage specials abound, so you can enjoy a great meal and some cold beers with the fellas after you’ve completed your round.  This league has sold out each of the past 4 seasons, so be sure to make note of the registration time and date to avoid disappointment.</p>
                        <div class="buttons">
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">League Information</a>
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">Rate Sheet</a>
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">Standings</a>
						</div>	
                    </div>

                </div>


                
            </div>
        </section>


    </main>
<?php get_footer(); ?>    