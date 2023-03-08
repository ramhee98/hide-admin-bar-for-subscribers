<?php
/**
* Plugin Name: Hide Admin Bar for Subscribers
* Plugin URI: https://github.com/ramhee98/hide-admin-bar-for-subscribers
* Description: This Plugin hides the Admin Bar on top for subscribers.
* Version: 1.0
* Author: ramhee
* Author URI: https://ramhee.ch/
* License: GPL-3.0
* License URI: https://github.com/ramhee98/hide-admin-bar-for-subscribers/blob/main/LICENSE
*/

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
	if (current_user_can('subscriber')) //Hide admin bar if user is a subscriber
	{
		show_admin_bar(false);
	}
}
