
	<?php 
	$args = array(
		'post_type'	=>	'team',
		);

	$team_members = new WP_Query($args);

	if( $team_members->have_posts() ) : while( $team_members->have_posts() ) : $team_members->the_post();

	?>

	<div class="teammember" itemscope itemtype="http://schema.org/Person">
		<img title="<?php the_field( 'name' ); ?>" src="<?php the_field( 'image' ); ?>" alt="Team member <?php the_field( 'name' ); ?>">
		<h4 itemprop="name"><?php the_field( 'name' ); ?></h4>
		<p itemprop="jobTitle"><?php the_field( 'position' ); ?></p>
		<p itemprop="telephone"><?php the_field( 'phone_number' ); ?></p>
		<p><a itemprop="email" href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a></p>
		<div>
			<?php if(get_field( 'facebook' ) ): ?>
			<a class="teamfacebook" target="_blank" title="Click to go to <?php the_field( 'name' ); ?> Facebook account." href="<?php the_field( 'facebook' ); ?>"></a>
			<?php endif; ?>
			<?php if(get_field( 'twitter' ) ): ?> 
			<a class="teamtwitter" target="_blank" title="Click to go to <?php the_field( 'name' ); ?> Twitter account." href="<?php the_field( 'twitter' ); ?>"></a>
			<?php endif; ?>
			<?php if(get_field( 'linkedin' ) ): ?> 
			<a class="teamlinkedin" target="_blank" title="Click to go to <?php the_field( 'name' ); ?> Linkedin account." href="<?php the_field( 'linkedin' ); ?>"></a>
			<?php endif; ?>
		</div>
	</div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
