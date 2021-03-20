<?php
/*
Plugin Name: Eric Johnson Guru Plugin
Plugin URI: https://ericjohnson.guru/
Description: Code Snippets for my lovely Clients
Version: 2.1.3
Author: Eric Johnson
Author URI: https://ericjohnson.guru/
License: MIT
License URI: https://opensource.org/licenses/MIT
*/
//Updates:
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'https://github.com/wormeyman/Eric-Johnson-Guru-WP-Plugin/',
  __FILE__,
  'Eric-Johnson-Guru-WP-Plugin'
);


// https://docs.wp-rocket.me/article/7-enabling-white-label
// White Label WP ROCKET.
define ('WP_ROCKET_WHITE_LABEL_ACCOUNT', true);

// ADD headers that google emailed everyone about on 2021-03-15
// https://web.dev/coop-coep/#1.-set-the-cross-origin-opener-policy:-same-origin-header-on-the-top-level-document
// add_action( 'send_headers', 'add_header_ej' );
// function add_header_ej() {
//   header( 'Cross-Origin-Embedder-Policy: require-corp' );
//   header( 'Cross-Origin-Opener-Policy: same-origin' );
//  header( 'Content-Security-Policy: block-all-mixed-content' );
// }
