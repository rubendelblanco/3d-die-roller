<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://katodia.com
 * @since             1.0.0
 * @package           3D die roller
 *
 * @3D die roller
 * Plugin Name:       3D die roller
 * Plugin URI:        https://katodia.com/
 * Description:       3D die roller based on teall app
 * Version:           1.0.0
 * Author:            Katodia
 * Author URI:        https://katodia.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       3d die roller
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
define( 'KATODIA_DIE_ROLLER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/katodia-die-roller-activator.php
 */
function activate_katodia_die_roller() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/katodia-die-roller-activator.php';
	Katodia_die_roller_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/katodia-die-roller-deactivator.php
 */
function deactivate_katodia_die_roller() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/katodia-die-roller-deactivator.php';
	Katodia_die_roller_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_katodia_die_roller' );
register_deactivation_hook( __FILE__, 'deactivate_katodia_die_roller' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/katodia-die-roller.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_katodia_die_roller() {

	$plugin = new Katodia_die_roller();
	$plugin->run();

}
run_katodia_die_roller();
