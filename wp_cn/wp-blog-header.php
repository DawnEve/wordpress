<?php
/**
 * Loads the WordPress environment and template.
 * 加载wp环境和模板。
 * @package WordPress
 */

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	require_once( dirname(__FILE__) . '/wp-load.php' ); //加载环境

	wp();

	require_once( ABSPATH . WPINC . '/template-loader.php' ); //加载模板

}
