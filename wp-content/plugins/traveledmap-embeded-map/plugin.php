<?php
/**
 * Plugin Name: TraveledMap Embedded Map
 * Plugin URI: https://wordpress.org/plugins/traveledmap-embeded-map
 * Description: TraveledMap Embedded map: Plugin for an easy setup of your TraveledMap. Get the list of your blog posts on a map.
 * Author: traveledmap
 * Author URI: https://www.traveledmap.com
 * Version: 1.0.2
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package TraveledMap
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
