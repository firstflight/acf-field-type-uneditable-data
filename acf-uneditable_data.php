<?php

/*
Plugin Name: Advanced Custom Fields: Uneditable data
Plugin URI: https://github.com/firstflight/acf-field-type-uneditable-data
Field type for Advanced Custom Field to display data and preventing the user from editing it.: Field type for Advanced Custom Field to display data and preventing the user from editing it.
Version: 1.0.0
Author: Björn Folbert for First Flight Communication
Author URI: http://www.firstflight.se
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-uneditable_data', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );

// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_uneditable_data( $version ) {
	
	include_once('acf-uneditable_data-v5.php');
	
}
add_action('acf/include_field_types', 'include_field_types_uneditable_data');

// 3. Include field type for ACF4
function register_fields_uneditable_data() {
	
	include_once('acf-uneditable_data-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_uneditable_data');