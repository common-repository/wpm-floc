<?php
/**
 * The main file of the Disable FLoC plugin
 *
 * @package wpmfloc
 * @version 1.3.3
 *
 * Plugin Name: Disable FLoC
 * Plugin URI: https://github.com/luehrsenheinrich/wpm-floc
 * Description: A simple zero-config plugin to opt-out of Google "Federated Learning of Cohorts" (FLoC).
 * Author: WP Munich
 * Author URI: https://www.wp-munich.com
 * Version: 1.3.3
 * Text Domain: wpm-floc
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! defined( 'WPMFLOC_SLUG' ) ) {
	define( 'WPMFLOC_SLUG', 'wpm-floc' );
}

if ( ! defined( 'WPMFLOC_VERSION' ) ) {
	define( 'WPMFLOC_VERSION', '1.3.3' );
}

if ( ! defined( 'WPMFLOC_URL' ) ) {
	define( 'WPMFLOC_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'WPMFLOC_PATH' ) ) {
	define( 'WPMFLOC_PATH', plugin_dir_path( __FILE__ ) );
}

// Load the autoloader.
require WPMFLOC_PATH . 'vendor/autoload.php';

// Load the `wp_wpmfloc()` entry point function.
require WPMFLOC_PATH . 'inc/functions.php';

// Initialize the plugin.
call_user_func( 'WpMunich\wpmfloc\wp_wpmfloc' );
