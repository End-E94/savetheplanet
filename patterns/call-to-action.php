<?php
/**
 * Title: Call to Action
 * Slug: savetheplanet/call-to-action
 * Categories: savetheplanet
 */
?>
<!-- wp:group -->
<div class="savetheplanet-call-to-action">
  <!-- wp:heading -->
  <h2><?php esc_html_e( savetheplanet()->get_text( 'get-involved' ), 'savetheplanet' ); ?></h2>
  <!-- /wp:heading -->
  <!-- wp:button -->
  <button class="savetheplanet-button"><?php esc_html_e( savetheplanet()->get_text( 'donate' ), 'savetheplanet' ); ?></button>
  <!-- /wp:button -->
</div>
<!-- /wp:group -->
