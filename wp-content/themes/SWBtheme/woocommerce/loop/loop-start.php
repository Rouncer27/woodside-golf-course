<?php
/**
 * Product Loop Start
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
?>

<?php if( is_shop() ) { ?>

<ul class="productslist">

<?php } elseif( is_product_category( array( 'accessories', 'events', 'memberships', 'golf-lessons' ) ) ) { ?>

<ul class="insideproducts__container--list">

<?php } else { ?>

<ul class="insideproducts__container--list">

<?php } ?>	