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
