<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/Talita1996/gdpr-compliance-plugin
 * @since      1.0.0
 *
 * @package    GDPRCompliance
 * @subpackage partials
 */

 if ( ! current_user_can( 'edit_users' ) ) {
 	die('Sem permissões');
 }
 
 if ( isset( $_GET['settings-updated'] ) ) {

    add_settings_error( 
        'tm_gdpr_compliance_messages',
        'tm_gdpr_compliance_messages',
        __( 'Settings Saved', 'tm-gdpr-compliance' ),
        'updated' 
    );

 }
 
settings_errors( 'tm_gdpr_compliance_messages' );
 
?>

<div class="wrap">

    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
    
    <form action="options.php" method="post">

        <?php
        settings_fields( 'tm_gdpr_compliance' );
        do_settings_sections( 'tm_gdpr_compliance' );
        submit_button( __( 'Save Settings', 'tm-gdpr-compliance' ) );
        ?>

    </form>

</div>