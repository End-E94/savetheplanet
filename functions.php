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

/**
 * Adds WooCommerce support.
 */
function savetheplanet_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'savetheplanet_woocommerce_setup' );

/**
 * Registers block style variations.
 */
function savetheplanet_register_block_styles() {
	register_block_style(
		'core/group',
		array(
			'name'         => 'card',
			'label'        => __( 'Card', 'savetheplanet' ),
			'inline_style' => '.wp-block-group.is-style-card { padding: 1.5rem; border: 1px solid currentColor; border-radius: 8px; }',
		)
	);
	register_block_style(
		'core/heading',
		array(
			'name'         => 'underline',
			'label'        => __( 'Underline', 'savetheplanet' ),
			'inline_style' => '.wp-block-heading.is-style-underline { text-decoration: underline; text-underline-offset: 0.2em; }',
		)
	);
}
add_action( 'init', 'savetheplanet_register_block_styles' );

add_filter( 'block_style', 'savetheplanet_block_style_browser_specific', 10, 2 );
function savetheplanet_block_style_browser_specific( $style, $block ) {
	if ( ! is_array( $style ) ) {
		return $style;
	}
	if ( ! isset( $style['browser_specific'] ) ) {
		$style['browser_specific'] = array();
	}
	$browser = get_user_browser();
	if ( $browser['browser'] == 'firefox' ) {
		$style['browser_specific']['firefox'] = array(
			'border-radius' => '8px 8px 0 0',
			'box-shadow' => '0 0 0 1px currentColor',
		);
	} elseif ( $browser['browser'] == 'chrome' || $browser['browser'] == 'safari' ) {
		$style['browser_specific']['chrome_safari'] = array(
			'border-radius' => '8px 8px 0 0',
			'box-shadow' => '0 0 0 1px currentColor',
		);
	}
	return $style;
}
