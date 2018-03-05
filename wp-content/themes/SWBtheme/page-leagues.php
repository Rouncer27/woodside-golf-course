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
                                $mslinfoPDFID = get_post_meta( get_the_id(), '_swb_league_information', true );
                                $mslinfoPDF = wp_get_attachment_url( $mslinfoPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mslinfoPDF ); ?>">League Information</a>
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">Rate Sheet</a>
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">Standings</a>
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
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">League Information</a>
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">Rate Sheet</a>
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">Standings</a>
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
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">League Information</a>
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">Rate Sheet</a>
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">Standings</a>
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
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">League Information</a>
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">Rate Sheet</a>
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">Standings</a>
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
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">League Information</a>
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">Rate Sheet</a>
                            <a target="_blank" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/leagues/League-Information.pdf">Standings</a>
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