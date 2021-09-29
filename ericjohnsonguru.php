<?php
/*
Plugin Name: Eric Johnson Guru Plugin
Plugin URI: https://ericjohnson.guru/
Description: Code Snippets for my lovely Clients
Version: 2.2.1
Author: Eric Johnson
Author URI: https://ericjohnson.guru/
License: MIT
License URI: https://opensource.org/licenses/MIT
*/

// Standard plugin security, keep this line in place.
defined('ABSPATH') or die();

//Updates:
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'https://github.com/wormeyman/Eric-Johnson-Guru-WP-Plugin/',
  __FILE__,
  'Eric-Johnson-Guru-WP-Plugin'
);

//Stop overscroll on MacOS
/** @return void  */
function ej_overscoll_fix()
{
  echo '<style>
    body {
      overscroll-behavior-y: none;
    }
  </style>';
}
add_action('admin_head', 'ej_overscoll_fix');

// https://docs.wp-rocket.me/article/7-enabling-white-label
// White Label WP ROCKET.
define('WP_ROCKET_WHITE_LABEL_ACCOUNT', true);


// Exclude from WP Rocket delaying JS.

function ej_exclude_strings_delay_js($pattern)
{

  $pattern[] = 'mediavine';
  $pattern[] = 'adthrive';
  $pattern[] = 'nutrifox';
  $pattern[] = 'social-pug';

  return $pattern;
}
add_filter('rocket_delay_js_exclusions', 'ej_exclude_strings_delay_js');

/**
 * Remove Yoast canonical for web stories
 *
 * This should fix the duplicate canonical error on web stories.
 */
// remove Yoast canonical for web stories
// https://wordpress.org/support/topic/web-story-plugin-is-conflicting-with-yoast-seo-2/
function ej_remove_canonical()
{
  if (is_singular('web-story')) {
    add_filter('wpseo_canonical', '__return_false');
  }
}
add_action('wp', 'ej_remove_canonical');
