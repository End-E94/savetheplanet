<?php
/**
 * Save the Planet theme functions.
 *
 * @package savetheplanet
 */

if ( ! function_exists( 'savetheplanet_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for WordPress features.
	 */
	function savetheplanet_setup() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'responsive-embeds' );
	}
}
add_action( 'after_setup_theme', 'savetheplanet_setup' );


/**
 * Registers the Save the Planet block pattern category.
 */
function savetheplanet_register_pattern_categories() {
	register_block_pattern_category(
		'savetheplanet',
		array( 'label' => __( 'Save the Planet', 'savetheplanet' ) )
	);
}
add_action( 'init', 'savetheplanet_register_pattern_categories' );
