<?php

/**
 * King Tut
 *
 * Quickly and efficiently create a highly-flexible Tutorial 
 * Area within your ClassicPress project.
 *
 * @link              https://hyperclock.eu
 * @since             1.0.0
 * @package           King_Tut
 *
 * @wordpress-plugin
 * Plugin Name:       King Tut
 * Plugin URI:        https://github.com/My-CP-Dev-Space/king-tut
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            JMColeman (hyperclock)
 * Author URI:        https://hyperclock.eu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       king-tut
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'KING_TUT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-king-tut-activator.php
 */
function activate_king_tut() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-king-tut-activator.php';
	King_Tut_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-king-tut-deactivator.php
 */
function deactivate_king_tut() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-king-tut-deactivator.php';
	King_Tut_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_king_tut' );
register_deactivation_hook( __FILE__, 'deactivate_king_tut' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-king-tut.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_king_tut() {

	$plugin = new King_Tut();
	$plugin->run();

}
run_king_tut();
