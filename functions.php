<?php
/**
 * Theme setup.
 *
 * @package savetheplanet
 */

function savetheplanet_setup() {
	add_theme_support( esc_attr_x( "wp-block-styles", savetheplanet__domain, savetheplanet__domain ) );
}
add_action( esc_attr_x( "after_setup_theme", savetheplanet__domain, savetheplanet__domain ), 'savetheplanet_setup' );

add_action( esc_attr_x( "init", savetheplanet__domain, savetheplanet__domain ), 'savetheplanet_register_pattern_categories' );
function savetheplanet_register_pattern_categories() {
	register_block_pattern_category( esc_attr_x( "savetheplanet-block-patterns", savetheplanet__domain, savetheplanet__domain ), esc_attr_x( "savetheplanet-block-patterns", savetheplanet__domain, savetheplanet__domain ) );
}
