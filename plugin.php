<?php
/*
Plugin Name:	Oxygen Sass
Plugin URI:		https://wpdevdesign.com/oxygen-sass/
Description:	Companion plugin for WP-SCSS to use Sass in Oxygen.
Version:		1.0.0
Author:			Sridhar Katakam
Author URI:		https://wpdevdesign.com
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

// Set WPSCSS_THEME_DIR constant's value to this plugin's directory.
define( 'WPSCSS_THEME_DIR', plugin_dir_path( __FILE__ ) );

// Force stylesheet compilation on every page load. Comment this out after development is done.
define( 'WP_SCSS_ALWAYS_RECOMPILE', true );

add_action( 'oxygen_enqueue_scripts', 'os_enqueue_scripts' );
/**
 * Loads compiled style.css in Oxygen editor and on the frontend.
 */
function os_enqueue_scripts() {
	if ( class_exists( 'Wp_Scss' ) ) {
		wp_enqueue_style( 'wp-sass', plugin_dir_url( __FILE__ ) . '/css/style.css', array(), CT_VERSION );
	}
}

add_filter( 'wp_scss_variables','wp_scss_set_variables' );
/**
 * Define custom variables here.
 *
 * @return array Array of variables.
 */
function wp_scss_set_variables() {
	$variables = array(
		'primary-color' => '#333',
		'secondary-color' => '#fff',
	);

	return $variables;
}
