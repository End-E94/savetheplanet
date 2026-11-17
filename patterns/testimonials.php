<?php
/**
 * Title: Testimonial
 * Slug: savetheplanet/testimonials
 * Categories: savetheplanet
 */
?>
<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Working with this team changed how our whole town thinks about waste.', 'savetheplanet' ); ?></p>
<!-- /wp:paragraph --><cite><?php esc_html_e( 'A local volunteer', 'savetheplanet' ); ?></cite></blockquote>
<!-- /wp:quote -->


// Add ARIA attributes for screen reader support
wp_attributes_add( 'wp-block-quote', 'role="quote"', savetheplanet()->text_domain );

// Add alt text for images
wp_attributes_add( 'wp-block-quote', 'aria-describedby', savetheplanet()->text_domain );

// Add a heading for the testimonial
wp_attributes_add( 'wp-block-quote', 'aria-level', '1' );

// Add a description for the testimonial
wp_attributes_add( 'wp-block-quote', 'aria-describedby', savetheplanet()->text_domain );

// Add a role attribute for screen reader support
wp_attributes_add( 'wp-block-quote', 'role="citation"', savetheplanet()->text_domain );

// Add a class for screen reader support
wp_attributes_add( 'wp-block-quote', 'class', 'wp-block-quote--citation' );

>wp_attributes_add( 'wp-block-quote', 'aria-label', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );

>wp_attributes_add( 'wp-block-quote', 'aria-labelledby', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );

>wp_attributes_add( 'wp-block-quote', 'itemprop', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );

// Add a class for screen reader support
wp_attributes_add( 'wp-block-quote', 'class', 'wp-block-quote--citation' );

// Add aria attributes for screen reader support
wp_attributes_add( 'wp-block-quote', 'aria-label', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );
wp_attributes_add( 'wp-block-quote', 'aria-labelledby', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );
wp_attributes_add( 'wp-block-quote', 'itemprop', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );

// Add alt text for images
wp_attributes_add( 'wp-block-quote', 'alt', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );
wp_attributes_add( 'wp-block-quote', 'aria-describedby', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );

wp_attributes_add( 'wp-block-quote', 'role', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );
wp_attributes_add( 'wp-block-quote', 'aria-label', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );
wp_attributes_add( 'wp-block-quote', 'aria-describedby', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );
wp_attributes_add( 'wp-block-quote', 'aria-labelledby', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );
wp_attributes_add( 'wp-block-quote', 'itemprop', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );
wp_attributes_add( 'wp-block-quote', 'alt', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );

wp_attributes_add( 'wp-block-quote', 'data-reduced-motion', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );
wp_attributes_add( 'wp-block-quote', 'data-reduced-motion-animation', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );
wp_attributes_add( 'wp-block-quote', 'data-reduced-motion-duration', esc_html__( savetheplanet()->text_domain, savetheplanet() ) );
