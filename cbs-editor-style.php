<?php
/*
Plugin Name: Custom Block Styles for Gutenberg
Plugin URI: https://www.propatel.com
Description: Custom Styles for WordPress Block which generate background colors for gutenbrg columns, spacer, magic blocks plugin etc. Plugin creates visible area to edit like other visual builder (WP-bakery visual builder or divi builder).
If you have any suggestion please let me know.
Version: 1.0.3
Author: Altaf Hussain Patel
Author URI: https://propatel.blogspot.com
License: GPL2
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
class cbsStyles
{
	 function __construct()
	 {
	 	add_action('admin_enqueue_scripts', array($this,'cbs_register_styles'));
	 }
	function cbs_register_styles()
	{
		$file_name = "cbs_editor_style.css";
		$version = "1.0.3";
		$depend = false;
		wp_register_style('cbs_admin_style' , plugins_url('css/'.$file_name,__FILE__), $depend , $version);
		wp_enqueue_style( 'cbs_admin_style' );
	}
}//class ends

if(class_exists('cbsStyles'))
{
	$cbsStyleWP = new cbsStyles();
}
register_activation_hook( __FILE__, array($cbsStyleWP,'activate'));