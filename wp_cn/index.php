<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 * wp应用入口文件。这个文件除了加载告诉wp需要哪个主题的wp-blog-header.php之外，什么都不做。
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 * 通知wp去加载wp主题，并且输出它。
 * 
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
