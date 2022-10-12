<?php
/**
 * Plugin Name: Pricing Table Addon
 * Description: Advanced pricing table widget for Elementor.
 * Version:     1.0.0
 * Author:      Danish Ahmad
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-addon
 */

function caea_register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/pricing-table-widget.php' );

	$widgets_manager->register( new \pricing_table_widget() );

}
add_action( 'elementor/widgets/register', 'caea_register_hello_world_widget' );