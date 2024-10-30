<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              pridethemes.com
 * @since             1.0.0
 * @package           Hasten_Companion
 *
 * @wordpress-plugin
 * Plugin Name:       Hasten Companion
 * Plugin URI:        pridethemes.com/plugins/hasten-companion
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.1.1
 * Author:            Pride Themes
 * Author URI:        pridethemes.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hasten-companion
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
define( 'HASTEN_COMPANION_VERSION', '1.1.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hasten-companion-activator.php
 */
function activate_hasten_companion() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hasten-companion-activator.php';
	Hasten_Companion_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hasten-companion-deactivator.php
 */
function deactivate_hasten_companion() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hasten-companion-deactivator.php';
	Hasten_Companion_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hasten_companion' );
register_deactivation_hook( __FILE__, 'deactivate_hasten_companion' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hasten-companion.php';

require plugin_dir_path( __FILE__ ) . 'includes/customizer/theme-options.php';
require plugin_dir_path( __FILE__ ) . 'includes/hasten-companion-metaboxes.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hasten_companion() {

	$plugin = new Hasten_Companion();
	$plugin->run();

}
run_hasten_companion();
