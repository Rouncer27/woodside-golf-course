<header class="events">
	<?php esc_attr( printf('<p>%s | by %s | %s</p>', get_the_category_list(' | '), get_the_author(), get_the_date() ) ); ?>
	<h2><?php the_title(); ?></h2>
</header>