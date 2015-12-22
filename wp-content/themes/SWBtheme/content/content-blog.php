

<?php if( in_category( 'news' ) ) { ?>


	<div class="media-box news" data-columns="2">

		<div class="media-box-content">

			<div class="media-box-title"><h1 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
			<div class="media-box-date">
				<p><span class="by">News Article Written by:</span><span> <?php the_author(); ?></span>.</p>
				<p> Click to read more from <?php the_author_posts_link(); ?></span></p>
				<p><?php the_date( 'M-d-y' ); ?></p>
			</div>
				
			<div class="media-box-text"><?php the_excerpt(); ?></div>
			<div class="media-box-more"> <a href="<?php the_permalink(); ?>">Read More</a> </div>
		</div>

	</div>


<?php } elseif ( in_category( 'events' ) ) { ?>

	<div class="media-box events" data-columns="2">

		<?php if ( has_post_thumbnail() ) { ?>
		<div class="media-box-image">
			<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'eventsfront'); ?>
			<div data-width="400px" data-height="250px" data-thumbnail="<?php echo $url[0] ?>"></div>
			<div class="thumbnail-overlay">
				<div class="media-box-more">
					<a href="<?php the_permalink(); ?>">Read More On This Event!
						<img class="logooverlay" src="<?php echo get_template_directory_uri(); ?>/img/events-news/blog-eventsbutton.jpg" alt="Woodside Events">
					</a> 
				</div>
			</div>
		</div>

		<?php } else { ?>
			
			<div class="media-box-content">

				<div class="media-box-title"><h1 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
				<div class="media-box-date">
					<p><span class="by">Events Article Written by:</span><span> <?php the_author(); ?></span>.</p>
					<p> Click to read more from <?php the_author_posts_link(); ?></span></p>
					<p><?php the_date( 'M-d-y' ); ?></p>
				</div>
					
				<div class="media-box-text"><?php the_excerpt(); ?></div>
				<div class="media-box-more"><a href="<?php the_permalink(); ?>">Read More</a></div>
			</div>
			

			<?php } ?>
	</div>


<?php } elseif ( in_category ( 'outrageous' ) ) { ?>

	<div class="media-box outrageous" data-columns="1">

		<?php if ( has_post_thumbnail() ) { ?>
		<div class="media-box-image">

			<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'outrageousfront'); ?>

			<div data-width="250px" data-height="250px" data-thumbnail="<?php echo $url[0] ?>"></div>
				<div class="thumbnail-overlay">
					<div class="media-box-more"> 
						<a href="<?php the_permalink(); ?>">OUTRAGEOUS! Read More!
							<img class="logooverlay" src="<?php echo get_template_directory_uri(); ?>/img/events-news/blog-outrageousbutton.jpg" alt="Outrageous Stories">
						</a>
					</div>
			</div>
		</div>

		<?php } else { ?>
			
		<div class="media-box-content">

			<div class="media-box-title"><h1 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
			<div class="media-box-date">
				<p><span class="by">Outrageous Article Written by:</span><span> <?php the_author(); ?></span>.</p>
				<p> Click to read more from <?php the_author_posts_link(); ?></span></p>
				<p><?php the_date( 'M-d-y' ); ?></p>
			</div>
				
			<div class="media-box-text"><?php the_excerpt(); ?></div>
			<div class="media-box-more"><a href="<?php the_permalink(); ?>">Read More</a></div>
		</div>

		<?php } ?>

	</div>

  <?php } else { ?>


<div class="media-box other" data-columns="1">

	<div class="media-box-content">

		<div class="media-box-title"><h1 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
		<div class="media-box-date">
			<p><span class="by">News Article Written by:</span><span> <?php the_author(); ?></span>.</p>
			<p> Click to read more from <?php the_author_posts_link(); ?></span></p>
			<p><?php the_date( 'M-d-y' ); ?></p>
		</div>
			
		<div class="media-box-text"><?php the_excerpt(); ?></div>
		<div class="media-box-more"> <a href="<?php the_permalink(); ?>">Read More</a> </div>
	</div>

</div>


  <?php } ?>