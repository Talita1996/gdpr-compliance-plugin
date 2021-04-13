<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/Talita1996/gdpr-compliance-plugin
 * @since      1.0.0
 *
 * @package    GDPRCompliance
 * @subpackage public
 */

if ( ! class_exists( 'TM_Gdpr_Compliance_Public', false ) ) :

	/**
	 * The public-facing functionality of the plugin.
	 *
	 * Defines the plugin name, version, and load the compliance message
	 * and its styles.
	 *
	 * @package    GDPRCompliance
	 * @subpackage public
	 * @author     Talita Mota <talita_mota@outlook.com>
	 */
	
	class TM_Gdpr_Compliance_Public {

		/**
		 * The ID of this plugin.
		 *
		 * @since    1.0.0
		 * @access   private
		 * @var      string    $plugin_name    The ID of this plugin.
		 */
		private $plugin_name;

		/**
		 * The version of this plugin.
		 *
		 * @since    1.0.0
		 * @access   private
		 * @var      string    $version    The current version of this plugin.
		 */
		private $version;

		/**
		 * Initialize the class and set its properties.
		 *
		 * @since    1.0.0
		 * @param      string    $plugin_name       The name of the plugin.
		 * @param      string    $version    The version of this plugin.
		 */
		public function __construct( $plugin_name, $version ) {

			$this->plugin_name = $plugin_name;
			$this->version = $version;

		}

		/**
		 * Register the general stylesheets for the compliance message.
		 *
		 * @since    1.0.0
		 */
		public function enqueue_styles() {

			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/tm-gdpr-compliance-public.css', array(), $this->version, 'all' );

		}

		/**
		 * Register the general JavaScript for the compliance message.
		 *
		 * @since    1.0.0
		 */
		public function enqueue_scripts() {

			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/tm-gdpr-compliance-public.js', array( 'jquery' ), $this->version, false );

		}

		/**
		 * Starts GDPR Compliance message on public page
		 *
		 * @since    1.0.0
		 */
		public function public_page() {

			$options = get_option( 'tm_option_enable_compliance_message' );

			if ( !is_admin() && $options['tm-message'] == 'enable' ) { 

				require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/tm-gdpr-compliance-public-display.php';

				$options = get_option( 'tm_color_theme_option' );
				wp_enqueue_style( 'tm-message-style', plugin_dir_url( __FILE__ ) . 'css/tm-message-' . $options['tm-color-theme'] . '.css', array(), $this->version, 'all' );

				$options = get_option( 'tm_option_compliance_message_position' );
				wp_enqueue_style( 'tm-message-position', plugin_dir_url( __FILE__ ) . 'css/tm-message-position-' . $options['tm-message-position'] . '.css', array(), $this->version, 'all' );
			}

		}

	}
endif;