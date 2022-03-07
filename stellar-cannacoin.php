<?php

/**
 * Plugin Name: StellarCanna Munchies
 * Description: ‌Generate link and QR image to receive StellarCanna Munchies donation.
 * Version:     1.0.0
 * Author:      crypt0potamus
 * Author URI:      https://farahani.dev
 * Text Domain: stellarcanna-munchies
 * Domain Path: /languages
 * License:     GPLv3
 */

namespace StellarCanna_Munchies;

use StellarCanna_Munchies\Admin\Init as Admin;
use StellarCanna_Munchies\Includes\Assets;
use StellarCanna_Munchies\Includes\Elementor;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once 'vendor/autoload.php';

register_activation_hook( __FILE__, '\StellarCanna_Munchies\activation_hook_callback' );

function activation_hook_callback() {
	\StellarCanna_Munchies\Includes\Init::activate();
}

register_deactivation_hook( __FILE__, '\StellarCanna_Munchies\deactivation_hook_callback' );

function deactivation_hook_callback() {
	\StellarCanna_Munchies\Includes\Init::deactivate();
}


Admin::instance();
Assets::instance();
Elementor::instance();
