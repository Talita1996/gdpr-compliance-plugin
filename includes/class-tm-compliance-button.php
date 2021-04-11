<?php

/**
 * Option to change agree button message.
 *
 * @link       https://github.com/Talita1996/gdpr-compliance-plugin
 * @since      1.0.0
 *
 * @package    GDPRCompliance
 * @subpackage includes
 */

if ( ! class_exists( 'TM_Compliance_Button', false ) ) :

    /**
     * Option to change agree button message.
     *
     * Adds settings to change agree button message.
     *
     * @package    GDPRCompliance
     * @subpackage includes
     * @author     Talita Mota <talita_mota@outlook.com>
     */

    class TM_Compliance_Button {

        /**
		 * Initialize the class.
		 *
		 * @since    1.0.0
		 */
		public function __construct() {
            
			register_setting( 'tm_gdpr_compliance', 'tm_compliance_button_option' );
            $this->tm_gdpr_settings_init();

		}

        /**
		 * Set agree button message option.
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
				'tm_gdpr_button_text',
				__( 'What message do you want to show on agree button?', 'tm-gdpr-compliance' ),
				array( $this, 'tm_compliance_button_option' ),
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
		 * Set agree button text.
		 *
		 * @since    1.0.0
		 */
        function tm_compliance_button_option() {

            $options = get_option( 'tm_compliance_button_option' );

            ?>

                <input type="text" id="tm-button-text" name="tm_compliance_button_option[tm-button-text]" value=" <?php echo $options['tm-button-text']; ?> " />

            <?php
        }

    }

endif;

return new TM_Compliance_Button();