<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package new
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function new_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'new_jetpack_setup' );
