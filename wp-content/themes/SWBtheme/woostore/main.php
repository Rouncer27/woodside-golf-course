<main <?php post_class( 'store' ); ?>>


	<section class="mainstoreheader">
		<h2>Our Store</h2>
		<p>Shop convieniently the things you need for a great golf season</p>
	</section>

	<section class="slogan">
		<?php get_template_part( 'content/content', 'quote' ); ?>
	</section>

	<section class="mainstore">
		<div class="mainstore__container">
			<?php woocommerce_content(); ?>
		</div>
	</section>
</main> 