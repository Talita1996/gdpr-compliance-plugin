<?php

/**
 * Provide the compliance message on public-facing view
 *
 * @link       https://github.com/Talita1996/gdpr-compliance-plugin
 * @since      1.0.0
 *
 * @package    GDPRCompliance
 * @subpackage public
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