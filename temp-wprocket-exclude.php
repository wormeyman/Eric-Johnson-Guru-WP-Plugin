<?php
/**
 * Plugin Name: WP Rocket | Exclude JS From Delay JS
 * Description: Exclude specified JS from WP Rocket Delay Javascript Execution.
 * Author:      WP Rocket Support Team
 * Author URI:  http://wp-rocket.me/
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP MEDIA 2021
 */

namespace WP_Rocket\Helpers\exclude_delay_js;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) or die();

/**
 * Filter inline JS excluded from being combined.
 *
 * @param (array) $pattern Patterns to match in inline JS content.
 *
 * @author Arun Basil Lal
 */
function exclude_strings_delay_js( $pattern ) {

	$pattern[] = 'mediavine';
	$pattern[] = 'adthrive';
	$pattern[] = 'nutrifox';
	$pattern[] = 'social-pug';

	return $pattern;
}
add_filter( 'rocket_delay_js_exclusions', __NAMESPACE__ . '\exclude_strings_delay_js' );

/**
 * Cleans entire cache folder on activation.
 *
 * @author Arun Basil Lal
 */
function clean_wp_rocket_cache() {

	if ( ! function_exists( 'rocket_clean_domain' ) ) {
		return false;
	}

	// Purge entire WP Rocket cache.
	rocket_clean_domain();
}
register_activation_hook( __FILE__, __NAMESPACE__ . '\clean_wp_rocket_cache' );
