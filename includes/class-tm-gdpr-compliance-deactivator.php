<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://github.com/Talita1996/gdpr-compliance-plugin
 * @since      1.0.0
 *
 * @package    GDPRCompliance
 * @subpackage includes
 */

if ( ! class_exists( 'TM_Gdpr_Compliance_Deactivator', false ) ) :

	/**
	 * Fired during plugin deactivation.
	 *
	 * This class defines all code necessary to run during the plugin's deactivation.
	 *
	 * @since      1.0.0
	 * @package    GDPRCompliance
	 * @subpackage includes
	 * @author     Talita Mota <talita_mota@outlook.com>
	 */
	
	class TM_Gdpr_Compliance_Deactivator {

		/**
		 * Deactivate the GDPR Compliance plugin 
		 *
		 * Remove all options registered by plugin
		 * 
		 * @since    1.0.0
		 */
		public static function deactivate() {

			$setting_options = array( 'tm_option_enable_compliance_message', 'tm_option_compliance_message_position', 'tm_color_theme_option', 'tm_compliance_message_text_option', 'tm_compliance_button_option' );
 
			foreach ( $setting_options as $setting_name ) {

				delete_option( $setting_name );

			}

		}

	}

endif;