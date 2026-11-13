<?php
/**
 * Title: Hero
 * Slug: savetheplanet/hero
 * Categories: savetheplanet
 */
?>
<!-- wp:cover -->
<div class="wp-block-cover">
  <!-- wp:heading -->
  <h1><?php esc_html_e( savetheplanet()->get_title(), 'savetheplanet' ); ?></h1>
  <!-- /wp:heading -->
  <!-- wp:paragraph -->
  <p><?php esc_html_e( savetheplanet()->get_description(), 'savetheplanet' ); ?></p>
  <!-- /wp:paragraph -->
  <!-- wp:button -->
  <button><?php esc_html_e( savetheplanet()->get_call_to_action(), 'savetheplanet' ); ?></button>
  <!-- /wp:button -->
</div>
<!-- /wp:cover -->
