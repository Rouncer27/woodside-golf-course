<?php get_header(); ?>

	<main class="page404">
		<section class="container404">
			<header>
				<h2>Uh Oh, something is missing here...</h2>
			</header>
			<article>
				<p>Okay so we seem to have missplaced something... I guess we only have a few options to get outta here!</p>
				<ul>
					<li>You can use the top menu or the menu in the footer to find the page or article agian</li>
					<li>You can try and search for whatever it is you are looking for<?php get_search_form(); ?></li>
					<li>You can just go back <a href="<?php echo esc_attr( home_url() ); ?>" title="Go Back Home!">home</a></li>
				</ul>
			</article>
		</section>
	</main>


<?php get_footer(); ?>