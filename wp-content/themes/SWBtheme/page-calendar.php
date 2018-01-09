<?php get_header(); ?>
	<main <?php post_class( 'membership row' ); ?> role="main">
        <?php the_post(); ?>

        <div class="calendarhero">
            <div class="calendarhero__content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar/icon-calendar-woodside.png" alt="Woodside icon with crazy colourful background">
                <h2>Events Calendar</h2>
				<p>Creating insanely outrageous stories with awesome events</p>
            </div>
            <div class="calendarhero__overlay"></div>
            <div class="calendarhero__background"></div>
        </div>
        <div class="slogan">
			<?php get_template_part( 'content/content', 'quote' ); ?>
        </div>

        <section class="calendar">
            <div class="calendar__container">
                <div class="calendar__container--header">
                    <h2>Events Calendar</h2>
                    <p>Current events, tournaments and the unexpected here.</p>
                </div>
                <div class="calendar__container--content">

                    <?php 
                    
                    $args = array(
                    'post_type' => 'calendar',
                    );

            $calendar = new WP_Query($args);

            while( $calendar->have_posts() ) : $calendar->the_post(); ?>


            <?php the_content(); ?>

            <?php endwhile; wp_reset_postdata(); ?>

                </div>
            </div>
        </section>

        <section class="tournaments">
            <div class="tournaments__container">
            <?php 
                $args = array(
                    'post_type' => 'tournaments',
                    );

                $tournaments = new WP_Query($args);

                while( $tournaments->have_posts() ) : $tournaments->the_post();
            ?>

            <h2><?php the_field( 'headline' ); ?></h2>
            <p><?php the_field( 'description' ); ?></p>
            <a target="_blank" title="" href="<?php the_field( 'tournament_pdf' ); ?>">Tournaments</a>
            <a target="_blank" title="" href="<?php the_field( 'advanced_groups_pdf' ); ?>">Advanced Groups</a>

        <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </section>

    </main>
<?php get_footer(); ?>            