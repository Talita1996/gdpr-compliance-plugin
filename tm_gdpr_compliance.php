<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/Talita1996/gdpr-compliance-plugin
 * @since             1.0.0
 * @package           GDPRCompliance
 *
 * @wordpress-plugin
 * Plugin Name:       GDPR Compliance
 * Plugin URI:        https://github.com/Talita1996/gdpr-compliance-plugin
 * Description:       GDPR Compliance plugin for Wordpress.
 * Version:           1.0.0
 * Author:            Talita Mota
 * Author URI:        http://www.linkedin.com/in/talita-mota-942134188
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tm-gdpr-compliance
 * Domain Path:       /languages
 */


if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'TM_GDPR_COMPLIANCE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-tm-gdpr-compliance-activator.php
 */
function activate_tm_gdpr_compliance() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tm-gdpr-compliance-activator.php';
	TM_Gdpr_Compliance_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-tm-gdpr-compliance-deactivator.php
 */
function deactivate_tm_gdpr_compliance() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tm-gdpr-compliance-deactivator.php';
	TM_Gdpr_Compliance_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_tm_gdpr_compliance' );
register_deactivation_hook( __FILE__, 'deactivate_tm_gdpr_compliance' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-tm-gdpr-compliance.php';

if ( !function_exists( 'run_tm_gdpr_compliance' ) ) {

	/**
	 * Begins execution of the plugin.
	 *
	 * @since    1.0.0
	 */
	function run_tm_gdpr_compliance() {

		$plugin = new TM_Gdpr_Compliance();
		$plugin->run();

	}

}

run_tm_gdpr_compliance();