<?php

/**
 * Option to position the message on the website.
 *
 * @link       https://github.com/Talita1996/gdpr-compliance-plugin
 * @since      1.0.0
 *
 * @package    GDPRCompliance
 * @subpackage includes
 */

if ( ! class_exists( 'TM_Compliance_Message_Position', false ) ) :

    /**
    * Option to position the message on the website.
     *
     * Adds options to config where the compliance message will shown on website.
     *
     * @package    GDPRCompliance
     * @subpackage includes
     * @author     Talita Mota <talita_mota@outlook.com>
     */

    class TM_Compliance_Message_Position {

        /**
		 * Initialize the class.
		 *
		 * @since    1.0.0
		 */
		public function __construct() {
            
			register_setting( 'tm_gdpr_compliance', 'tm_option_compliance_message_position' );
            $this->tm_gdpr_settings_init();

		}

        /**
		 * Set compliance message option.
		 *
		 * @since    1.0.0
		 */
        function tm_gdpr_settings_init() {
	
			add_settings_section(
				'tm_section_compliance_message_settings',
				__( 'Compliance Message Settings', 'tm-gdpr-compliance' ),
                array( $this, 'tm_section_compliance_message_position' ),
				'tm_gdpr_compliance'
			);
	
			add_settings_field(
				'tm_gdpr_compliance_message_position',
				__( 'Where do you want positioned compliance message?', 'tm-gdpr-compliance' ),
				array( $this, 'tm_option_compliance_message_position' ),
				'tm_gdpr_compliance',
				'tm_section_compliance_message_settings'
			);

        }

        /**
		 * Set compliance message section content.
		 *
		 * @since    1.0.0
		 */
        function tm_section_compliance_message_position( $args ) {

            ?>
                <p id="<?php echo esc_attr( $args['id'] ); ?>">
                    <?php esc_html_e( 'In this section it\'s possible to edit the GDPR compliance message styles.', 'tm-gdpr-compliance' ); ?>
                </p>
            <?php
    
        }

        /**
		 * Set compliance message option content.
		 *
		 * @since    1.0.0
		 */
        function tm_option_compliance_message_position() {

            $options = get_option( 'tm_option_compliance_message_position' );

            ?>
                <ul>
                    <li>
                        <input type="radio" id="tm-message-top" name="tm_option_compliance_message_position[tm-message-position]" value="top" <?php checked( 'top', $options['tm-message-position'] ); ?> />
                        <label for="tm-message-top"><?php esc_html_e( 'Top', 'tm-gdpr-compliance' ) ?></label>
                    </li>
                    <li>
                        <input type="radio" id="tm-message-bottom" name="tm_option_compliance_message_position[tm-message-position]" value="bottom" <?php checked( 'bottom', $options['tm-message-position'] ); ?> />
                        <label for="tm-message-bottom"><?php esc_html_e( 'Bottom', 'tm-gdpr-compliance' ) ?></label>
                    </li>

                </ul>
            <?php 
            
        }

    }

endif;

return new TM_Compliance_Message_Position();