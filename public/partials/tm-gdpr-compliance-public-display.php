<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/public/partials
 */

    $compliance_message =  get_option( 'tm_compliance_message_text_option' );
    $button_agree = get_option( 'tm_compliance_button_option' );
?>

<div class="tm-container">
    <p class="tm-compliance-message">
        <?php echo $compliance_message['tm-message-text']; ?>
    </p>
    <button class="tm-compliance-button">
        <?php echo $button_agree['tm-button-text']; ?>
    </button>
</div>