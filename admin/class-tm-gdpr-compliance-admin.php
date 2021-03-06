<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/Talita1996/gdpr-compliance-plugin
 * @since      1.0.0
 *
 * @package    GDPRCompliance
 * @subpackage admin
 */

if ( ! class_exists( 'TM_Gdpr_Compliance_Admin', false ) ) :

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    GDPRCompliance
 * @subpackage admin
 * @author     Talita Mota <talita_mota@outlook.com>
 */
	class TM_Gdpr_Compliance_Admin {

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
		 * @param      string    $plugin_name       The name of this plugin.
		 * @param      string    $version    The version of this plugin.
		 */
		public function __construct( $plugin_name, $version ) {

			$this->plugin_name = $plugin_name;
			$this->version = $version;

		}

		/**
		 * Register the stylesheets for the admin area.
		 *
		 * @since    1.0.0
		 */
		public function enqueue_styles() {

			/**
			 * This function is provided for demonstration purposes only.
			 *
			 * An instance of this class should be passed to the run() function
			 * defined in Plugin_Name_Loader as all of the hooks are defined
			 * in that particular class.
			 *
			 * The Plugin_Name_Loader will then create the relationship
			 * between the defined hooks and the functions defined in this
			 * class.
			 */

			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/plugin-name-admin.css', array(), $this->version, 'all' );

		}

		/**
		 * Register the JavaScript for the admin area.
		 *
		 * @since    1.0.0
		 */
		public function enqueue_scripts() {

			/**
			 * This function is provided for demonstration purposes only.
			 *
			 * An instance of this class should be passed to the run() function
			 * defined in Plugin_Name_Loader as all of the hooks are defined
			 * in that particular class.
			 *
			 * The Plugin_Name_Loader will then create the relationship
			 * between the defined hooks and the functions defined in this
			 * class.
			 */

			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/plugin-name-admin.js', array( 'jquery' ), $this->version, false );

		}

		/**
		 * Add top level menu page and starts the options and sections
		 *
		 * @since    1.0.0
		 */
		public function options_page() {

			add_menu_page( 
				__( 'GDPR Compliance', 'tm-gdpr-compliance' ),
				__( 'GDPR', 'gdpr-compliance'),
				'edit_users', 
				'tm_gdpr_compliance',
				array( $this, 'gdpr_compliance_admin_page' ) 
			);

			require_once plugin_dir_path( __FILE__ ) . '../includes/class-tm-enable-compliance-message.php';
			require_once plugin_dir_path( __FILE__ ) . '../includes/class-tm-compliance-message-position.php';
			require_once plugin_dir_path( __FILE__ ) . '../includes/class-tm-color-theme.php';
			require_once plugin_dir_path( __FILE__ ) . '../includes/class-tm-compliance-message-text.php';
			require_once plugin_dir_path( __FILE__ ) . '../includes/class-tm-compliance-button.php';

		}

		/**
		 * Require admin view
		 *
		 * @since    1.0.0
		 */
		function gdpr_compliance_admin_page() {
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/tm-gdpr-compliance-admin-display.php';
		}

	}

endif;