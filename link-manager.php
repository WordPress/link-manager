<?php
/* Plugin Name: Link Manager
 * Description: Enables the Link Manager that existed in WordPress until version 3.5.
 * Author: WordPress
 * Requires at least: 3.5
 * Requires PHP: 5.6
 * Version: 0.1-beta2
 *
 * @package link-manager
 */

/*
 * See http://core.trac.wordpress.org/ticket/21307
 */

add_filter( 'pre_option_link_manager_enabled', '__return_true' );
