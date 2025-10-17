<?php

/**
 * Plugin Name: Core Gamestore
 * Description: Core Code for Gamestore
 * Version: 1.0.0
 * Author: Alex Puhl
 * Author URI: https://alexpuhl.com
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: core-gamestore
 * Domain Path: /languages
 */

define('GAMESTORE_PLUGIN_URL', plugin_dir_url(__FILE__));
define('GAMESTORE_PLUGIN_DIR', plugin_dir_path(__FILE__));

function core_gamestore_init() {
}

add_action('init', 'core_gamestore_init');
