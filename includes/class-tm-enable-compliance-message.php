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

if ( ! class_exists( 'TM_Enable_Compliance_Message', false ) ) :

    /**
     * Option that enables / disables the compliance message.
     *
     * Adds settings of enabale/disable message to the compliance plugin admin page.
     *
     * @package    GDPRCompliance
     * @subpackage includes
     * @author     Talita Mota <talita_mota@outlook.com>
     */

    class TM_Enable_Compliance_Message {

        /**
		 * Initialize the class.
		 *
		 * @since    1.0.0
		 */
		public function __construct() {
            
			register_setting( 'tm_gdpr_compliance', 'tm_option_enable_compliance_message' );
            $this->tm_gdpr_settings_init();

		}

        /**
		 * Set compliance message option.
		 *
		 * @since    1.0.0
		 */
        function tm_gdpr_settings_init() {
	
			add_settings_section(
				'tm_section_enable_compliance_message',
				__( 'Compliance Message', 'tm-gdpr-compliance' ),
                array( $this, 'tm_section_enable_compliance_message' ),
				'tm_gdpr_compliance'
			);
	
			add_settings_field(
				'tm_gdpr_compliance_message',
				__( 'Do you want activate the message?', 'tm-gdpr-compliance' ),
				array( $this, 'tm_option_enable_compliance_message' ),
				'tm_gdpr_compliance',
				'tm_section_enable_compliance_message'
			);

        }

        /**
		 * Set compliance message section content.
		 *
		 * @since    1.0.0
		 */
        function tm_section_enable_compliance_message( $args ) {

            ?>
                <p id="<?php echo esc_attr( $args['id'] ); ?>">
                    <?php esc_html_e( 'In this section it\'s possible to enable and disable the GDPR compliance message.', 'tm-gdpr-compliance' ); ?>
                </p>
            <?php
    
        }

        /**
		 * Set compliance message option content.
		 *
		 * @since    1.0.0
		 */
        function tm_option_enable_compliance_message() {

            $options = get_option( 'tm_option_enable_compliance_message' );

            ?>
                <ul>
                    <li>
                        <input type="radio" id="tm-enable-message" name="tm_option_enable_compliance_message[tm-message]" value="enable" <?php checked( 'enable', $options['tm-message'] ); ?> />
                        <label for="tm-enable-message"><?php esc_html_e( 'Enable', 'tm-gdpr-compliance' ) ?></label>
                    </li>
                    <li>
                        <input type="radio" id="tm-disable-message" name="tm_option_enable_compliance_message[tm-message]" value="disable" <?php checked( 'disable', $options['tm-message'] ); ?> />
                        <label for="tm-disable-message"><?php esc_html_e( 'Disable', 'tm-gdpr-compliance' ) ?></label>
                    </li>

                </ul>
            <?php
            
        }

    }

endif;

return new TM_Enable_Compliance_Message();