<?php

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) or die();

/**
 * Exclude from WP Rocket delaying JS.
 */
function exclude_strings_delay_js( $pattern ) {

	$pattern[] = 'mediavine';
	$pattern[] = 'adthrive';
	$pattern[] = 'nutrifox';
	$pattern[] = 'social-pug';

	return $pattern;
}
add_filter( 'rocket_delay_js_exclusions', '\exclude_strings_delay_js' );
