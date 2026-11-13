<?php
/**
 * Title: Testimonials
 * Slug: savetheplanet/testimonials
 * Categories: savetheplanet
 */
?>
<!-- wp:quote -->
<blockquote class="wp-quote">
  <p><?php esc_html_e( savetheplanet()->get_testimonial_quote(), 'savetheplanet' ); ?></p>
  <cite><?php esc_html_e( savetheplanet()->get_testimonial_author(), 'savetheplanet' ); ?></cite>
</blockquote>
<!-- /wp:quote -->
