<?php
/*
Plugin Name: Eric Johnson Guru Plugin
Plugin URI: https://ericjohnson.guru/
Description: Code Snippets for my lovely Clients
Version: 2.0.1
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
