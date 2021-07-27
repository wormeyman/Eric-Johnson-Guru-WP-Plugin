<?php
// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) or die();
// ADD headers that google emailed everyone about on 2021-03-15
// https://web.dev/coop-coep/#1.-set-the-cross-origin-opener-policy:-same-origin-header-on-the-top-level-document
// add_action( 'send_headers', 'add_header_ej' );
// function add_header_ej() {
//   header( 'Cross-Origin-Embedder-Policy: require-corp' );
//   header( 'Cross-Origin-Opener-Policy: same-origin' );
//  header( 'Content-Security-Policy: block-all-mixed-content' );
// }
