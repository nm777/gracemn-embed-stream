<?php
/*
 * Plugin Name: GraceMN Embedded Stream
 * Version: 1.0
 * Plugin URI: https://gracemn.com/
 * Description: Stream embedding plugin
 * Author: Nate Morris
 * Author URI: https://gracemn.com
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: gracemn-embedded-stream
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Nate Morris
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-gracemn-embedded-stream.php' );
require_once( 'includes/class-gracemn-embedded-stream-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-gracemn-embedded-stream-admin-api.php' );
require_once( 'includes/lib/class-gracemn-embedded-stream-post-type.php' );
require_once( 'includes/lib/class-gracemn-embedded-stream-taxonomy.php' );

/**
 * Returns the main instance of GraceMN_Embedded_Stream to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object GraceMN_Embedded_Stream
 */
function GraceMN_Embedded_Stream () {
	$instance = GraceMN_Embedded_Stream::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = GraceMN_Embedded_Stream_Settings::instance( $instance );
	}

	return $instance;
}

GraceMN_Embedded_Stream();
