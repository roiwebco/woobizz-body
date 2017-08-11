<?php
/**
 * Plugin Name: Woobizz Body 
 * Plugin URI: https://woobizz.com
 * Description: Woocommerce Storefront Body Customiser
 * Author: Woobizz
 * Author URI: https://woobizz.com
 * Version: 1.0.0
 * Text Domain: woobizz-body
 * Domain Path: /languages/
 */
 /** The prefix Name*/
define('WOOBIZZBODY', 'woobizzbody');

/** Include the Whitelabel plugin */
include('admin/body-admin-page.php' );
	
/** Include the $options array */
include( 'admin/body-options.php' );

/** Include the Custom CSS Variables */
include( 'admin/body-functions.php' );

/** Create the Options Page */
$options_page = new WoobizzBodyOptions( 'WooBizz Body', 'woobizz-body', WOOBIZZBODY, 'admin.php', null, 'read', null, true, false, true, $options );
function woobizz_body_submenu(){
	//add_submenu_page($parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function);
	add_submenu_page( 'woobizz', '', 'Woobizz Body','manage_options', 'woobizz-body');
}
add_action( 'admin_menu', 'woobizz_body_submenu',20);