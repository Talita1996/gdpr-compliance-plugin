<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/Talita1996/gdpr-compliance-plugin
 * @since      1.0.0
 *
 * @package    GDPRCompliance
 * @subpackage includes
 */

if ( ! class_exists( 'TM_Gdpr_Compliance_Activator', false ) ) :

	/**
	 * Fired during plugin activation.
	 *
	 * This class defines all code necessary to run during the plugin's activation.
	 *
	 * @since      1.0.0
	 * @package    GDPRCompliance
	 * @subpackage includes
	 * @author     Talita Mota <talita_mota@outlook.com>
	 */
	
	class TM_Gdpr_Compliance_Activator {

		/**
		 * Activate the GDPR Compliance plugin and set the options
		 *
		 * @since    1.0.0
		 */
		public static function activate() {

			if( !get_option( 'tm_option_enable_compliance_message' ) ) {
				
				$options = array(
					'tm-message'	=> 'disable',
				);
			
				add_option( 'tm_option_enable_compliance_message', $options );
			}

			if( !get_option( 'tm_option_compliance_message_position' ) ) {
				
				$options = array(
					'tm-message-position'	=> 'bottom',
				);
			
				add_option( 'tm_option_compliance_message_position', $options );
			}
			
			if( !get_option( 'tm_color_theme_option' ) ) {
				
				$options = array(
					'tm-color-theme'	=> 'ocean',
				);
			
				add_option( 'tm_color_theme_option', $options );
			}

			if( !get_option( 'tm_compliance_message_text_option' ) ) {
				
				$options = array(
					'tm-message-text'	=> 'We use cookies to provide our services and for analytics and marketing. To find out more about our use of cookies, please see our Privacy Policy. By continuing to browse our website, you agree to our use of cookies. ',
				);
			
				add_option( 'tm_compliance_message_text_option', $options );
			}
			
		}

	}

endif;