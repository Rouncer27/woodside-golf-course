<?php

// the_excerpt() length _____________________________________________________
function swbtheme_excerpt_length($length) {
	return 55; // whatever you want the length to be for our the_excerpt() function thoughout our theme.
}

add_filter('excerpt_length', 'swbtheme_excerpt_length');


// Replaces the excerpt "more" text by a link __________________________________

function swbtheme_excerpt_more($more) {
    global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'swbtheme_excerpt_more');

?>