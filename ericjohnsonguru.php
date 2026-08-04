<?php
/*
Plugin Name: Eric Johnson Guru Plugin
Plugin URI: https://ericjohnson.guru/
Description: Code Snippets for my lovely Clients
Version: 2.4.0
Author: Eric Johnson
Author URI: https://ericjohnson.guru/
Requires PHP: 8.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// Standard plugin security, keep this line in place.
defined('ABSPATH') or die();

require __DIR__ . '/plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
  'https://github.com/wormeyman/Eric-Johnson-Guru-WP-Plugin/',
  __FILE__,
  'Eric-Johnson-Guru-WP-Plugin'
);
$myUpdateChecker->getVcsApi()->enableReleaseAssets();

//Stop overscroll on MacOS
/** @return void  */
function ej_overscroll_fix()
{
  echo '<style>
    body {
      overscroll-behavior-y: none;
    }
  </style>';
}
add_action('admin_head', 'ej_overscroll_fix');

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
