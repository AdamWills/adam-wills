<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Adam Wills
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function adam_wills_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'adam_wills_jetpack_setup' );
