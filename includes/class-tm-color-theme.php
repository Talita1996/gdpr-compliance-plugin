<?php

/**
 * Color theme option.
 *
 * @link       https://github.com/Talita1996/gdpr-compliance-plugin
 * @since      1.0.0
 *
 * @package    GDPRCompliance
 * @subpackage includes
 */

if ( ! class_exists( 'TM_Color_Theme', false ) ) :

    /**
     * Color theme option.
     *
     * Adds settings of color theme.
     *
     * @package    GDPRCompliance
     * @subpackage includes
     * @author     Talita Mota <talita_mota@outlook.com>
     */

    class TM_Color_Theme {

        /**
		 * Initialize the class.
		 *
		 * @since    1.0.0
		 */
		public function __construct() {
            
			register_setting( 'tm_gdpr_compliance', 'tm_color_theme_option' );
            $this->tm_gdpr_settings_init();

		}

        /**
		 * Set compliance message option.
		 *
		 * @since    1.0.0
		 */
        function tm_gdpr_settings_init() {
	
			/*add_settings_section(
				'tm_color_theme_section',
				__( 'Color Theme', 'tm-gdpr-compliance' ),
                array( $this, 'tm_color_theme_section' ),
				'tm_gdpr_compliance'
			);*/
	
			add_settings_field(
				'tm_gdpr_compliance_color',
				__( 'Select the theme color:', 'tm-gdpr-compliance' ),
				array( $this, 'tm_color_theme_option' ),
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
        function tm_color_theme_section( $args ) {

            ?>
                <p id="<?php echo esc_attr( $args['id'] ); ?>">
                    <?php esc_html_e( 'In this section it\'s possible to select the theme color that is used in GDPR compliace message.', 'tm-gdpr-compliance' ); ?>
                </p>
            <?php
    
        }*/

        /**
		 * Set compliance message option content.
		 *
		 * @since    1.0.0
		 */
        function tm_color_theme_option() {

            $options = get_option( 'tm_color_theme_option' );

            ?>
                <ul>
                    <li>
                        <input type="radio" id="tm-ocean" name="tm_color_theme_option[tm-color-theme]" value="ocean" <?php checked( 'ocean', $options['tm-color-theme'] ); ?> />
                        <label for="tm-ocean"><?php esc_html_e( 'Ocean', 'tm-gdpr-compliance' ) ?></label>
                    </li>
                    <li>
                        <input type="radio" id="tm-light" name="tm_color_theme_option[tm-color-theme]" value="light" <?php checked( 'light', $options['tm-color-theme'] ); ?> />
                        <label for="tm-light"><?php esc_html_e( 'Light', 'tm-gdpr-compliance' ) ?></label>
                    </li>
                    <li>
                        <input type="radio" id="tm-forest" name="tm_color_theme_option[tm-color-theme]" value="forest" <?php checked( 'forest', $options['tm-color-theme'] ); ?> />
                        <label for="tm-forest"><?php esc_html_e( 'Forest', 'tm-gdpr-compliance' ) ?></label>
                    </li>
                </ul>
            <?php
            
        }

    }

endif;

return new TM_Color_Theme();