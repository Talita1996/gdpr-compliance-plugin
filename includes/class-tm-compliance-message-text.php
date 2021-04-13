<?php

/**
 * Option that set the compliance message text.
 *
 * @link       https://github.com/Talita1996/gdpr-compliance-plugin
 * @since      1.0.0
 *
 * @package    GDPRCompliance
 * @subpackage includes
 */

if ( ! class_exists( 'TM_Compliance_Message_Text', false ) ) :

    /**
     * Option that set the compliance message text.
     *
     * Adds settings to the compliance plugin admin page for change the default message.
     *
     * @package    GDPRCompliance
     * @subpackage includes
     * @author     Talita Mota <talita_mota@outlook.com>
     */

    class TM_Compliance_Message_Text {

        /**
		 * Initialize the class.
		 *
		 * @since    1.0.0
		 */
		public function __construct() {
            
			register_setting( 'tm_gdpr_compliance', 'tm_compliance_message_text_option' );
            $this->tm_gdpr_settings_init();

		}

        /**
		 * Set compliance message text option.
		 *
		 * @since    1.0.0
		 */
        function tm_gdpr_settings_init() {
	
			add_settings_field(
				'tm_gdpr_compliance_message_text',
				__( 'What message do you want to show?', 'tm-gdpr-compliance' ),
				array( $this, 'tm_compliance_message_text_option' ),
				'tm_gdpr_compliance',
				'tm_section_compliance_message_settings'
			);

        }

        /**
		 * Set compliance message text editor.
		 *
		 * @since    1.0.0
		 */
        function tm_compliance_message_text_option() {

            $options = get_option( 'tm_compliance_message_text_option' );

            wp_editor( $options['tm-message-text'], 'tmmessagetext', array( 'textarea_name' => 'tm_compliance_message_text_option[tm-message-text]' )  );
            
        }

    }

endif;

return new TM_Compliance_Message_Text();