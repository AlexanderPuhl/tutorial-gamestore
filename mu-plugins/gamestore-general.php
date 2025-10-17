<?php

/**
 * Plugin Name: Gamestore General
 * Description: General plugin for Gamestore
 * Version: 1.0.0
 * Author: Alex Puhl
 * Author URI: https://alexpuhl.com
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

function gamestore_remove_dashboard_widgets() {
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
}

add_action('wp_dashboard_setup', 'gamestore_remove_dashboard_widgets');
