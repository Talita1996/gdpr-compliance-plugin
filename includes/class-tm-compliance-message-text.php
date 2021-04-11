<?php

/**
 * Option that enables / disables the compliance message.
 *
 * @link       https://github.com/Talita1996/gdpr-compliance-plugin
 * @since      1.0.0
 *
 * @package    GDPRCompliance
 * @subpackage includes
 */

if ( ! class_exists( 'TM_Compliance_Message_Text', false ) ) :

    /**
     * Option that enables / disables the compliance message.
     *
     * Adds settings of enabale/disable message to the compliance plugin admin page.
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
		 * Set compliance message option.
		 *
		 * @since    1.0.0
		 */
        function tm_gdpr_settings_init() {
	/*
			add_settings_section(
				'tm_section_enable_compliance_message',
				__( 'Compliance Message', 'tm-gdpr-compliance' ),
                array( $this, 'tm_section_enable_compliance_message' ),
				'tm_gdpr_compliance'
			);*/
	
			add_settings_field(
				'tm_gdpr_compliance_message_text',
				__( 'What message do you want to show?', 'tm-gdpr-compliance' ),
				array( $this, 'tm_compliance_message_text_option' ),
				'tm_gdpr_compliance',
				'tm_section_compliance_message_settings'
			);

        }

        /**
		 * Set compliance message section content.
		 *
		 * @since    1.0.0
		 */
        /*
        function tm_section_enable_compliance_message( $args ) {

            ?>
                <p id="<?php echo esc_attr( $args['id'] ); ?>">
                    <?php esc_html_e( 'In this section it\'s possible to enable and disable the GDPR compliance message.', 'tm-gdpr-compliance' ); ?>
                </p>
            <?php
    
        }*/

        /**
		 * Set compliance message option content.
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